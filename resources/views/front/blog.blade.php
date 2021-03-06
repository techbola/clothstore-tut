@extends('layouts.main.master')

@section('content')

    <!--breadcrumb start-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1>blog</h1>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="space-60"></div>
    <div class="container">
        <div class="blog-grid row clearfix">

            @foreach($posts as $post)

                <div class="blog-item col-sm-4">
                    <a href="{{ route('singlePost', $post->slug) }}">
                        <img src="{{asset($post->featured)}}" class="img-responsive" alt="">
                    </a>
                    <div class="blog-desc">
                        <h4 class="title"><a href="{{ route('singlePost', $post->slug) }}">{{ $post->title }}</a></h4>
                        <p>
                            {{ str_limit(strip_tags($post->content), 150) }}
                        </p>
                        <a href="{{ route('singlePost', $post->slug) }}" class="btn btn-skin">Continue...</a>
                    </div><!--blog desc-->
                </div><!--blog item-->

            @endforeach

        </div><!--grid blog-->

        <div class="row">
            <div class="col-sm-12">
                {{ $posts->links() }}
            </div>
        </div>

    </div>
    <div class="space-60"></div>
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Subscribe to newsletter</h3>
                    <p>Lorem ipsum get latest update of products sit amet.</p>
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
