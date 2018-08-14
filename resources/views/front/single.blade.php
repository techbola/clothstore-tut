@extends('layouts.main.master')

@section('content')

    <!--breadcrumb start-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="space-60"></div>
    <div class="container">
        <div class="row">
            <div class="blog-item col-sm-10 col-sm-offset-1">
                <a href="#">
                    <img src="{{ asset($post->featured) }}" class="img-responsive" alt="">
                </a>
                <div class="blog-desc">
                    <h4 class="title"><a href="#">{{ $post->title }}</a></h4>
                    <p>
                        {!! $post->content !!}
                    </p>

                </div><!--blog desc-->

                {{--<div class="comments">--}}
                    {{--<h3><i class="pe-7s-comment"></i> 1 Comment</h3>--}}
                    {{--<hr>--}}
                    {{--<div class="media">--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading">John Doe <a href="#">Reply</a></h4>--}}
                            {{--<p>--}}
                                {{--Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,--}}
                                {{--when an unknown printer took a galley of type and scrambled it to make a type specimen book--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div><!--blog item-->
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
