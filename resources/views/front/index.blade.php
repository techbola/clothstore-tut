@extends('layouts.main.master')

@section('content')

  <div class="blocks-main">
      <div class="container">
          <div class="row">
              <div class="col-sm-4">
                  <div class="blocks-col">
                      <img src="{{ asset('main/images/bg/bg-2.jpg') }}" alt="" class="img-responsive">
                      <div class="block-overlay">
                          <h4>Menswear</h4>
                          <p>Summer sale upto 50% off</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="blocks-col">
                      <img src="{{ asset('main/images/bg/bg-3.jpg') }}" alt="" class="img-responsive">
                      <div class="block-overlay">
                          <h4>Accessories</h4>
                          <p>Lorem ipsum dolor sit  </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="blocks-col">
                      <img src="{{ asset('main/images/bg/bg-1.jpg') }}" alt="" class="img-responsive">
                      <div class="block-overlay">
                          <h4>Womens collection</h4>
                          <p>Winter sale upto 40% off  </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div><!--block main-->

  <div class="space-60"></div>

  <!--new arrivals-->
  <section class="new-arrivals">
      <div class="container">
          <h2 class="section-heading">New Arrivals</h2>

          <!--owl carousel-->
          <div class="row">
              <div id="owl-slider" class="col-md-12 owl-carousel owl-theme">

                  <div class="item">
                      <div class="item_holder">
                          <a href="#"><img src="{{ asset('main/images/women/1.jpg') }}" alt="" class="img-responsive"></a>
                          <div class="title">
                              <h5>Sky-Blue <br>Short Skirt</h5>
                              <span class="price">$29.99</span>
                          </div>
                      </div><!--item holder-->
                  </div> <!--item loop-->
                  <div class="item">
                      <div class="item_holder">
                          <a href="#"><img src="{{ asset('main/images/men/1.jpg') }}" alt="" class="img-responsive"></a>
                          <div class="title">
                              <h5>Dark-Blue <br>Men's t-shirt</h5>
                              <span class="price">$19.99 <del>$25.99</del></span>
                          </div>
                      </div><!--item holder-->
                  </div> <!--item loop-->
                  <div class="item">
                      <div class="item_holder">
                          <a href="#"><img src="{{ asset('main/images/women/2.jpg') }}" alt="" class="img-responsive"></a>
                          <div class="title">
                              <h5>Black <br>Short Skirt</h5>
                              <span class="price">$29.99</span>
                          </div>
                      </div><!--item holder-->
                  </div> <!--item loop-->
                  <div class="item">
                      <div class="item_holder">
                          <a href="#"><img src="{{ asset('main/images/men/3.jpg') }}" alt="" class="img-responsive"></a>
                          <div class="title">
                              <h5>Black <br>analog watch</h5>
                              <span class="price">$45.99</span>
                          </div>
                      </div><!--item holder-->
                  </div> <!--item loop-->
                  <div class="item">
                      <div class="item_holder">
                          <a href="#"><img src="{{ asset('main/images/men/4.jpg') }}" alt="" class="img-responsive"></a>
                          <div class="title">
                              <h5>Black & blue <br>Backpack</h5>
                              <span class="price">$45.99</span>
                          </div>
                      </div><!--item holder-->
                  </div> <!--item loop-->
                  <div class="item">
                      <div class="item_holder">
                          <a href="#"><img src="{{ asset('main/images/men/5.jpg') }}" alt="" class="img-responsive"></a>
                          <div class="title">
                              <h5>Black & blue <br>Laptop bag</h5>
                              <span class="price">$45.99</span>
                          </div>
                      </div><!--item holder-->
                  </div> <!--item loop-->
              </div>
          </div>
          <!--owl end-->
      </div>
  </section>
  <!--end new arrivals-->
  <div class='space-60'></div>

  <!--parallax section start-->
  <section class="parallax">
      <div class="container">
          <div class="row">
              <div class="col-sm-10 col-sm-offset-1 text-center">
                  <h1><span>Upto 50% off on men's collection</span></h1>
                  <a href='#' class="btn btn-skin btn-lg">Shop Now</a>
              </div>
          </div>
      </div>
  </section>
  <!--parallax section end-->
  <div class='space-60'></div>

  <!--popular products-->
  <section class="featured-products">
      <div class="container">
          <h2 class="section-heading">Popular products</h2>
          <div class="row">
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder">
                      <a href="#"><img src="{{ asset('main/images/women/1.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder out-of-stock">
                      <span class="out-stock-label">Out of stock</span>
                      <a href="#"><img src="{{ asset('main/images/men/1.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder">
                      <a href="#"><img src="{{ asset('main/images/men/2.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder">
                      <a href="#"><img src="{{ asset('main/images/women/2.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
          </div><!--row-->

          <div class="row">
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder">
                      <a href="#"><img src="{{ asset('main/images/women/1.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder">
                      <span class="offer-lablel">50% off</span>
                      <a href="#"><img src="{{ asset('main/images/men/5.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder">
                      <a href="#"><img src="{{ asset('main/images/men/7.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
              <div class="col-sm-6 col-md-3 ">
                  <div class="item_holder">
                      <a href="#"><img src="{{ asset('main/images/men/4.jpg') }}" alt="" class="img-responsive"></a>
                      <div class="title">
                          <h5>Sky-Blue <br>Short Skirt</h5>
                          <span class="price">$29.99</span>
                      </div>
                  </div><!--item holder-->
              </div><!--col end-->
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

  <!--best sellers, featured, sale item section start-->
  <div class="container">
      <div class="row">
          <div class="col-sm-4 col-xs-12">
              <h3 class="bg-title">Top <span>Rated</span></h3>
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/men/3.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Men's watch</a></h4>
                      <span class="cat">Watches</span>
                      <ul class="list-inline">
                          <li><del>$49.99</del></li>
                          <li>$29.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/men/4.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Men's Backpack</a></h4>
                      <span class="cat">Backpack</span>
                      <ul class="list-inline">
                          <li><del>$99.99</del></li>
                          <li>$69.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/women/8.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Women's T-shirt</a></h4>
                      <span class="cat">T-shirts</span>
                      <ul class="list-inline">
                          <li><del>$49.99</del></li>
                          <li>$29.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/women/6.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Yukute Lower</a></h4>
                      <span class="cat">Lowers</span>
                      <ul class="list-inline">
                          <li><del>$29.99</del></li>
                          <li>$19.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
          </div><!--col-end-->
          <div class="col-sm-4 col-xs-12">
              <h3 class="bg-title">new <span>arrivals</span></h3>
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/men/3.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Men's watch</a></h4>
                      <span class="cat">Watches</span>
                      <ul class="list-inline">
                          <li><del>$49.99</del></li>
                          <li>$29.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/men/4.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Men's Backpack</a></h4>
                      <span class="cat">Backpack</span>
                      <ul class="list-inline">
                          <li><del>$99.99</del></li>
                          <li>$69.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/women/8.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Women's T-shirt</a></h4>
                      <span class="cat">T-shirts</span>
                      <ul class="list-inline">
                          <li><del>$49.99</del></li>
                          <li>$29.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/women/6.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Yukute Lower</a></h4>
                      <span class="cat">Lowers</span>
                      <ul class="list-inline">
                          <li><del>$29.99</del></li>
                          <li>$19.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
          </div><!--col-end-->
          <div class="col-sm-4 col-xs-12">
              <h3 class="bg-title">best <span>sellers</span></h3>
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/men/9.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Men's T-shirt</a></h4>
                      <span class="cat">T-shirts</span>
                      <ul class="list-inline">
                          <li><del>$49.99</del></li>
                          <li>$29.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/women/3.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Women's Skirt</a></h4>
                      <span class="cat">Skirts</span>
                      <ul class="list-inline">
                          <li><del>$99.99</del></li>
                          <li>$69.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/women/4.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Women's Short</a></h4>
                      <span class="cat">Shorts</span>
                      <ul class="list-inline">
                          <li><del>$49.99</del></li>
                          <li>$29.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
              <div class="media-item clearfix">
                  <img src="{{ asset('main/images/men/10.jpg') }}" alt="" class="img-responsive" width="100">
                  <div class="media-item-content">
                      <h4><a href="#">Yukute Lower</a></h4>
                      <span class="cat">Lowers</span>
                      <ul class="list-inline">
                          <li><del>$29.99</del></li>
                          <li>$19.00</li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                          <li><a href='#' data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a></li>
                      </ul>
                      <div class='rating'>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-empty"></i>
                      </div>
                  </div>
              </div><!--media item-->
          </div><!--col-end-->
      </div>
  </div>
  <!--section end-->
  <div class="space-60"></div>

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

  <!--partners-->
  <section class="partners">
      <div class='container'>
          <h2 class="section-heading">Our Partners</h2>
          <div class="row">
              <div id="owl-partners" class="col-md-12 owl-carousel owl-theme">

                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>
                  <div class="item"><img src="{{ asset('main/images/partner.png') }}" alt="parner" class="img-responsive"></div>

              </div>
          </div>
      </div>
  </section>
  <!--end partners-->

@endsection
