@extends('layouts.main.master')

@section('content')

    <!--breadcrumb start-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1>Shopping Cart</h1>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="space-60"></div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-condensed cart-table">
                <thead>
                <tr>
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach(Cart::content() as $product)

                    <tr>
                        <td class="product-image">
                            <img src="{{ asset($product->model->featured) }}" alt="" width="80">
                        </td>
                        <td class='product-name'>
                            <a href='{{ route('productDetails', $product->model->slug) }}'>
                                {{ $product->model->title }}
                            </a>
                        </td>
                        <td class="product-price">${{ $product->price }}</td>
                        <td class="product-quantity">
                            <input type="number" value="{{ $product->qty }}" min="1" class="fl qty-text" name="quantity">
                        </td>
                        <td class="product-total">
                            ${{ $product->total() }}
                        </td>
                        <td class='product-delete'>
                            <a href='{{ route('cart.delete', ['id' => $product->rowId]) }}' data-toggle='tooltip' data-placement='top' title='Remove this item'>
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table><!--cart table-->
        </div>
        <div class="space-30"></div>
        <div class="cart-total">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <h2>Cart total</h2>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Total</td>
                            <td class="total">${{ Cart::total() }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"> <a href="{{ route('cart.checkout') }}" class="btn btn-lg btn-skin">Proceed to checkout</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="space-60"></div>

@endsection
