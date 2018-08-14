@extends('layouts.shop.master')

@section('productContent')

    <div class="row">
        <div class="col-md-5 margin-b-30">
            <div id="product-single"  class="owl-carousel owl-theme single-product-slider">
                <div class="item">
                    <a href="{{ asset($product->featured) }}" data-lightbox="roadtrip">
                        <img src="{{ asset($product->featured) }}" alt="Product image" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="product-detail-desc">
                <h3 class="title"><a href="#">{{ $product->title }}</a></h3>
                <span class="price">${{ $product->price }}</span>

                <form action="{{ route('cart.add') }}" method="post">

                    {{ csrf_field() }}

                    <div class="size">
                        <span>Quantity:</span>
                        <input type="number" min="1" name="qty">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                    </div>
                    <div class="add-buttons">

                        <button type="submit" class="btn btn-skin btn-lg">
                            <i class="fa fa-shopping-cart"></i> Add to cart
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div><!--single product details end-->
    <div class="space-40"></div>
    <div class="row">
        <div class="col-md-12 item-more-info">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-justified" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#desc" aria-controls="desc" role="tab" data-toggle="tab">Description</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="desc">
                        {!! $product->description !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection