@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.add_order')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ url('dashboard.clients.index') }}">@lang('site.clients')</a></li>
                <li class="active">@lang('site.add_order')</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">

                <div class="col-md-6">

                    <div class="box box-primary">

                        <div class="box-header">

                            <h3 class="box-title" style="margin-bottom: 10px">@lang('site.categories')</h3>

                        </div><!-- end of box header -->

                        <div class="box-body">
                            @foreach ($categories as $category)

                                <div class="panel-group">

                                    <div class="panel panel-info">

                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#{{ str_replace(' ', '-', $category->name) }}">{{ $category->name }}</a>
                                            </h4>
                                        </div>

                                        <div id="{{ str_replace(' ', '-', $category->name) }}" class="panel-collapse collapse">

                                            <div class="panel-body">

                                                @if ($category->products->count() > 0)

                                                    <table class="table table-hover">
                                                        <tr>
                                                            <th>@lang('site.name')</th>
                                                            <th>@lang('site.stock')</th>
                                                            <th>@lang('site.price')</th>
                                                            <th>@lang('site.add')</th>
                                                        </tr>

                                                        @foreach ($category->products as $product)
                                                            <tr>
                                                                <td>{{ $product->name }}</td>
                                                                <td>{{ $product->stock }}</td>
                                                                <td>{{$product->sale_price}}</td>
                                                                {{-- <td>{{ number_format($product->sale_price, 2) }}</td> --}}
                                                                <td>
                                                                    <a href=""
                                                                       id="product-{{ $product->id }}"
                                                                       data-name="{{ $product->name }}"
                                                                       data-id="{{ $product->id }}"
                                                                       data-price="{{ $product->sale_price }}"
                                                                       class="btn btn-success btn-sm add-product-btn">
                                                                        <i class="fa fa-plus"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </table><!-- end of table -->

                                                @else
                                                    <h5>@lang('site.no_records')</h5>
                                                @endif

                                            </div><!-- end of panel body -->

                                        </div><!-- end of panel collapse -->

                                    </div><!-- end of panel primary -->

                                </div><!-- end of panel group -->

                            @endforeach

                        </div><!-- end of box body -->

                    </div><!-- end of box -->

                </div><!-- end of col -->

                <div class="col-md-6">

                    <div class="box box-primary">

                        <div class="box-header">

                            <h3 class="box-title">@lang('site.orders')</h3>

                        </div><!-- end of box header -->

                        <div class="box-body">

                            <form
                            action="{{ url('order/store',$client->id) }}"
                             method="post">

                                {{ csrf_field() }}
                                {{ method_field('post') }}

                                @include('partials._errors')

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>@lang('site.product')</th>
                                        <th>@lang('site.quantity')</th>
                                        <th>@lang('site.price')</th>
                                    </tr>
                                    </thead>

                                    <tbody class="order-list">


                                    </tbody>

                                </table><!-- end of table -->

                                <h4>@lang('site.total') : <span class="totalLabel">0</span></h4>

                                <button class="btn btn-primary btn-block disabled" id="add-order-form-btn"><i class="fa fa-plus"></i> @lang('site.add_order')</button>

                            </form>

                        </div><!-- end of box body -->

                    </div><!-- end of box -->

                    {{-- @if ($client->orders->count() > 0)

                        <div class="box box-primary">

                            <div class="box-body">

                                @foreach ($orders as $order)

                                    <div class="panel-group">

                                        <div class="panel panel-success">

                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#{{ $order->created_at->format('d-m-Y-s') }}">{{ $order->created_at->toFormattedDateString() }}</a>
                                                </h4>
                                            </div>

                                            <div id="{{ $order->created_at->format('d-m-Y-s') }}" class="panel-collapse collapse">

                                                <div class="panel-body">

                                                    <ul class="list-group">
                                                        @foreach ($order->products as $product)
                                                            <li class="list-group-item">{{ $product->name }}</li>
                                                        @endforeach
                                                    </ul>

                                                </div><!-- end of panel body -->

                                            </div><!-- end of panel collapse -->

                                        </div><!-- end of panel primary -->

                                    </div><!-- end of panel group -->

                                @endforeach

                                {{ $orders->links() }}

                            </div><!-- end of box body -->

                        </div><!-- end of box -->

                    @endif --}}

                </div><!-- end of col -->

            </div><!-- end of row -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
@push('js')
<script>
    // lert(//'egergeg');
    // consle.log('hythyth')
    // $(document).ready(function () {
    //     alter('gfdgfdsg');
    // });
$(document).on("click",".add-product-btn", function(e){
// Check if there's an element with the specified class name
// if (elements.length > 0) {

//      calcuate_price();

// }
    e.preventDefault();
    // var sum = 0 ;
    // e.preventDefault();
    var name = $(this).data('name');
        var id = $(this).data('id');
        var price = parseInt($(this).data('price'));
        //     <td><input type="hidden" name="product[]" value="${id}"></td>
//   <td><input type="number" name=quantity[]" data-price="${price}" class="form-control input-sm product-quantity" min="1" value="1"></td>
        $(this).removeClass('btn-success').addClass('btn-default disabled');
            var total_price =  calcuate_price() ;
        var html =
            `<tr>
                <td>${name}</td>

                <td><input type="number" name="products[${id}][quantity]" data-price="${price}" class="form-control input-sm product-quantity" min="1" value="1"></td>

                <td class="product-price">${price}</td>
                <td><button class="btn btn-danger btn-sm remove-product-btn" data-id="${id}"><span class="fa fa-trash"></span></button></td>
                <td><input name="id" type="hidden" value="{{{$cat_id}}}"></td>
            </tr>`;

        $('.order-list').append(html);
        calcuate_price();

        // //to calculate total price
        // calculateTotal();
    });
    $(document).on("click",".remove-product-btn", function(e){
        var elements = document.getElementsByClassName('totalLabel');

// Check if there's an element with the specified class name
if (elements.length > 0) {
    // Change the content of the first element
    elements[0].textContent =calcuate_price() ;
}
        e.preventDefault();

        var id = $(this).data('id');
        $(this).closest('tr').remove();
        $('#product-' + id).removeClass('btn-default disabled').addClass('btn-success');
        calcuate_price();

       // console.log(id);

    });
    $('body').on('keyup change', '.product-quantity', function() {
        var elements = document.getElementsByClassName('totalLabel');

// Check if there's an element with the specified class name
if (elements.length >= 0) {
    // Change the content of the first element
    elements[0].textContent =calcuate_price() ;
}

var quantity = parseInt($(this).val());
// var quantity = parseInt($(this).);

 //2

var unitPrice = parseInt($(this).data('price'));

// calcuate_price();
 //150
console.log(unitPrice);
$(this).closest('tr').find('.product-price').html(unitPrice*quantity);

calcuate_price();

});//end



//    if ()

    // var quantityInput = document.getElementsByClassName('product-quantity');
    // console.log(quantityInput);




//     $(document).ready(function() {

//     // Select the span element by its ID and change its text
//    $('.total-price').text(price);
// });
    // $('body').on('change','.product-quantity', function() {
    //     var price_1 = parseInt((this).val());
    //     var pricr_2 = parseInt((this).data('price'));
    //     $(this).closest('tr').find('.product-price').html(price_1*pricr_2);
    //     calcuate_price() ;
    //     // console.log(price_1);

    // });







    function calcuate_price() {
       // alter('gfdgfdsg');

var price = 0;

$('.order-list .product-price').each(function(index) {


    price += parseInt($(this).html());

});

$('.totalLabel').html(price);
if (price>0){
 $('#add-order-form-btn').removeClass('btn-default disabled');
}
else {
 $('#add-order-form-btn').addClass('btn-default disabled');

}

// return price;

}


//end
    // function calcuate_price(){
    //      var price = 0 ;
    //      $('.order-list .product-price').each(function(index){
    //      price+=parseInt($(this).html());


    //      }
    //     }

    //      alter(price);

</script>

@endpush
