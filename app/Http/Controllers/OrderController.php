<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;




class OrderController extends Controller
{
    public function products($id){
        // $products = $order->products;
        $products = Order::find($id)->product ;
        // dd($products);
        return view('clients.order.products', compact('products'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index($cat_id,Client $client)
    {
        // dd( Client::find(1)->order);
        //    return Product::find(1)->children;;
      $categories = Category::all();
      return view('clients.order.create',compact('categories','cat_id','client'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return Order::find(1)->client;
        $orders= Order::all();
        return view('clients.order.index',compact('orders'));
    // return view('clients.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Client $client)
    {

        $client = Client::findorFail($request->id);
        // dd(Product::find(1)) ;


    $order = $client->orders()->create([
        'client_id'=>$request->id,
        'total_price'=>0
    ]);
// return $request ;
        $order->product()->attach($request->products);

        $total_price = 0;

        foreach ($request->products as $id => $quantity) {

            $product = Product::FindOrFail($id);
            $total_price += $product->sale_price * $quantity['quantity'];

            $product->update([
                'stock' => $product->stock - $quantity['quantity']
            ]);

        }//end of foreach

        $order->update([
            'total_price' => $total_price
        ]);


    // $user = Or::find(1);

    // $productIds = [1, 2, 3]; // IDs of products to be associated with the order
    // $order->product()->attach([1,1]);
      //return $order->id ;
    // $order = $order->id ;
    // $order->product->attach([1,1]);

    // foreach ($request->product as $index=>$product){
    //     $order->product()->attach([$product,$request->quantity[$index]]);
    // }
            //  foreach($request->quantity as $quantity){
            //     $order->product()->attach([$product,$quantity]);
            //  }






    // Success: Order created

        // $order = ;
        //  $client_id = $request->id;
        // $orders = $client->orders()->create([
        //     'client_id'=>$client_id,
        //     // 'client_id'=>1
        // ]);
        // return $orders;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //return
    //    Order::find($id)->product->pivot->quantity;
        foreach (  Order::find($id)->product as $product){
            $product->update([
                'stock'=> $product->pivot->quantity + $product->stock,
            ]);
        }
        $order = Order::find($id);
        $order->delete();
        dd("done");

    }
}
