<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;//bcrypt
use Illuminate\Support\Facades\bcrypt;//bcrypt
use App\Models\User;

use App\Models\Role;
use App\Models\Permission;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request )

    {
        $query = User::query();
        if ($request->email){
        $query->when($request->has('email'), function ($q) use ($request) {
            return $q->where('email', 'like', '%' . $request->input('email') . '%');
        });




        $user = $query->get();
        return view('user.index',compact('user'));
    }

      else{
        $user=User::all();
        return view('user.index',compact('user'));
      }


    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return $request ;

    //  return $request ;
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        $user =User::create([
            'name'=>'mo',
            'email'=>$request->email.rand(1,100),
            'password'=>bcrypt($request->password)

           ]);
           foreach($request->permission as $per)
           $user->givePermission($per);

           //$editUserPermission = Permission::where('name', 'users-create')->first();

        //    $user->givePermission('');

        //    dd($user);
        // $user->syncPermissions([$editUserPermission]);


        // Get the admin role and the permissions
        //$user->perms()->sync([1,1]);


    session()->flash('success', 'Item has been created successfully.');
    return redirect()->route('users.index');


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
    public function destroy(string $id)
    {
        //
    }
}
