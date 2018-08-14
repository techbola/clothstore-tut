@extends('layouts.shop.master')

@section('productContent')

    <div class="row">

        @foreach($allProducts as $allProduct)

            <div class="col-sm-4">
                <div class="item_holder">
                    <a href="{{ route('productDetails', $allProduct->slug) }}">
                        <img src="{{ asset($allProduct->featured) }}" alt="" class="img-responsive">
                    </a>
                    <div class="title">
                        <h5>{{ $allProduct->title }}</h5>
                        <span class="price">${{ $allProduct->price }}</span>
                    </div>
                </div><!--item holder-->
            </div><!--col end-->

        @endforeach

    </div>

    <div class="row">
        <div class="col-sm-12">
            {{ $allProducts->links() }}
        </div>
    </div>

@endsection