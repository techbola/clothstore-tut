@extends('layouts.main.master')

@section('content')

    <!--breadcrumb start-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1>Shop</h1>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="space-60"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @yield('productContent')

            </div>

            <div class="col-md-3 col-md-offset-1">

                <div class="sidebar-widget">
                    <h3>Most Popular </h3>

                    @foreach($popularProducts as $popularProduct)

                        <div class="media">
                            <div class="media-left">
                                <a href="{{ route('productDetails', $popularProduct->slug) }}">
                                    <img class="media-object" src="{{ asset($popularProduct->featured) }}" alt="" width="70">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href='{{ route('productDetails', $popularProduct->slug) }}'>{{ $popularProduct->title }}</a></h4>
                                <span class="price">
                                    ${{ $popularProduct->price }}
                                </span>
                            </div>
                        </div><!--media-->

                    @endforeach

                </div><!--sidebar-widget end-->

            </div><!--sidebar col-->
        </div>
    </div>
    <div class="space-60"></div>

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Subscribe to newsletter</h3>
                </div>
                <div class="col-md-7">
                    <form role="form" method="post" action="#" class="subscribe-form  assan-newsletter">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Enter email to subscribe">
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div>
                                    <button class="newsletter-btn" name="submit" type="submit">Notify me</button>
                                </div>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
