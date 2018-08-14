@extends('layouts.main.master')

@section('slider')
  @include('front.includes.slider')
@endsection

@section('content')

  <!--new arrivals-->
  <section class="new-arrivals">
      <div class="container">
          <h2 class="section-heading">New Arrivals</h2>

          <!--owl carousel-->
          <div class="row">
              <div id="owl-slider" class="col-md-12 owl-carousel owl-theme">

                  @foreach($newProducts as $newProduct)

                      <div class="item">
                          <div class="item_holder">
                              <a href="{{ route('productDetails', $newProduct->slug) }}">
                                  <img src="{{ asset($newProduct->featured) }}" alt="" class="img-responsive">
                              </a>
                              <div class="title">
                                  <h5>{{ $newProduct->title }}</h5>
                                  <span class="price">${{ $newProduct->price }}</span>
                              </div>
                          </div><!--item holder-->
                      </div> <!--item loop-->

                  @endforeach

              </div>
          </div>
          <!--owl end-->
      </div>
  </section>
  <!--end new arrivals-->
  <div class='space-60'></div>

  <!--popular products-->
  <section class="featured-products">
      <div class="container">
          <h2 class="section-heading">All products</h2>
          <div class="row">

              @foreach($popularProducts as $popularProduct)

                  <div class="col-sm-6 col-md-3 ">
                      <div class="item_holder">
                          <a href="{{ route('productDetails', $popularProduct->slug) }}"><img src="{{ asset($popularProduct->featured) }}" alt="" class="img-responsive"></a>
                          <div class="title">
                              <h5>{{ $popularProduct->title }}</h5>
                              <span class="price">${{ $popularProduct->price }}</span>
                          </div>
                      </div><!--item holder-->
                  </div><!--col end-->

              @endforeach

          </div><!--row-->

      </div>
  </section>
  <!--end Popular products-->
  <div class="space-50"></div>

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
  <!--newsletter end-->
  <div class="space-50"></div>

  <!--features section start-->
  <div class="container">
      <div class="row">
          <div class="col-sm-4 margin-b-30">
              <div class="features-box">
                  <div class="icon">
                      <i class="fa fa-truck"></i>
                  </div>
                  <div class="text">
                      <h3>Free Shipping</h3>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam.
                      </p>
                  </div>
              </div><!--features box-->
          </div><!--features column-->
          <div class="col-sm-4 margin-b-30">
              <div class="features-box blue">
                  <div class="icon">
                      <i class="fa fa-credit-card"></i>
                  </div>
                  <div class="text">
                      <h3>Secure payment</h3>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam.
                      </p>
                  </div>
              </div><!--features box-->
          </div><!--features column-->
          <div class="col-sm-4 margin-b-30">
              <div class="features-box">
                  <div class="icon">
                      <i class="fa fa-refresh"></i>
                  </div>
                  <div class="text">
                      <h3>Easy Returns</h3>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam.
                      </p>
                  </div>
              </div><!--features box-->
          </div><!--features column-->
      </div>
  </div>
  <!--features section end-->
  <div class="space-30"></div>

@endsection
