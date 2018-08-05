<!--search toggle form-->
<div class="search-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <form action="" method="post">

                   {{ csrf_field() }}

                    <input type="text" class="form-control" placeholder="E.g. Blue T-shirt..." required>
                    <span class="search-close"><i class="fa fa-times"></i></span>
                </form>
            </div>
        </div>
    </div>
</div>
<!--search toggle form end-->
<!--header start-->
<header class="header">
    <!--top bar-->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <span>Welcome message goes here...</span>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline">
                        <li class="hidden-xs"><a href="#" class="offers">offers</a></li>
                        <li class="hidden-xs"><a href="#"><i class="pe-7s-user"></i> Register</a></li>
                        <li><a href="#"><i class="pe-7s-lock"></i> Login</a></li>
                        <li class="lang-dropdown">
                            <a href="#"><img src="images/flag1.png" alt=""> English <i class="fa fa-angle-down"></i></a>
                            <div class="lang-drop-menu">
                                <a href="#"><img src="images/flag1.png" alt=""> English</a>
                                <a href="#"><img src="images/flag2.png" alt=""> French</a>
                                <a href="#"><img src="images/flag3.png" alt=""> German</a>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="search-toggle"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--top bar end-->


    <!--main navigation start-->
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top yamm sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo-dark.png" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <!--mega menu-->
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Pages  <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">

                                        <div class="col-sm-3">
                                            <h3 class="heading">Base pages</h3>
                                            <ul class="nav mega-vertical-nav">
                                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                                                <li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
                                                <li><a href="contact.html"><i class="fa fa-map-marker"></i> Contact </a></li>
                                                <li><a href="404.html"><i class="fa fa-trash-o"></i> 404 </a></li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-3">
                                            <h3 class="heading">Product Pages </h3>
                                            <ul class="nav mega-vertical-nav">
                                                <li><a href="product-list.html"><i class="fa fa-list"></i> Product list</a></li>
                                                <li><a href="product-grid.html"><i class="fa fa-bars"></i> Product grid</a></li>
                                                <li><a href="product-detail.html"><i class="fa fa-angle-right"></i> Product Detail </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3 class="heading">Cart Pages</h3>
                                            <ul class="nav mega-vertical-nav">
                                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                                <li><a href="checkout.html"><i class="fa fa-truck"></i> Checkout</a></li>
                                                <li><a href="order-history.html"><i class="fa fa-sliders"></i> Order history </a></li>
                                                <li><a href="compare.html"><i class="fa fa-random"></i> Compare </a></li>
                                                <li><a href="wishlist.html"><i class="fa fa-heart"></i> Wishlist </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <img src="images/women/10.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> <!--menu Features li end here-->
                    <!--mega menu end-->
                    <!--mega menu-->
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Women  <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">

                                        <div class="col-sm-3">
                                            <h3 class="heading">Sample title</h3>
                                            <ul class="nav mega-vertical-nav">
                                                <li><a href="#">Nam ipsum est</a></li>
                                                <li><a href="#">Volutpat</a></li>
                                                <li><a href="#">In efficitur in</a></li>
                                                <li><a href="#">Accumsan eget</a></li>
                                                <li><a href="#">Curabitur</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-3">
                                            <h3 class="heading">Sample title </h3>
                                            <ul class="nav mega-vertical-nav">
                                                <li><a href="#">Nam ipsum est</a></li>
                                                <li><a href="#">Volutpat</a></li>
                                                <li><a href="#">In efficitur in</a></li>
                                                <li><a href="#">Accumsan eget</a></li>
                                                <li><a href="#">Curabitur</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3 class="heading">Sample title</h3>
                                            <ul class="nav mega-vertical-nav">
                                                <li><a href="#">Nam ipsum est</a></li>
                                                <li><a href="#">Volutpat</a></li>
                                                <li><a href="#">In efficitur in</a></li>
                                                <li><a href="#">Accumsan eget</a></li>
                                                <li><a href="#">Curabitur</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <img src="images/women/8.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> <!--menu Features li end here-->
                    <!--mega menu end-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Men <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Nam ipsum est</a></li>
                            <li><a href="#">Volutpat</a></li>
                            <li><a href="#">In efficitur in</a></li>
                            <li><a href="#">Accumsan eget</a></li>
                            <li><a href="#">Curabitur</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">

                            <li><a href="blog-masonry.html">Masonry view</a></li>
                            <li><a href="blog-post.html">Single Post</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true"><i class="pe-7s-cart"></i> <span class="badge">5</span></a>
                        <div class="dropdown-menu shopping-cart">

                            <div class="cart-items content-scroll">
                                <div class="cart-item clearfix">
                                    <div class="img">
                                        <img src="images/men/1.jpg" alt="" class="img-responsive">
                                    </div><!--img-->
                                    <div class="description">
                                        <a href="#">Mauris et ligula quis</a><strong class="price">1 x $44.95</strong>
                                    </div><!--Description-->
                                    <div class="buttons">
                                        <a href="#" class="fa fa-pencil"></a><a href="#" class="fa fa-trash-o"></a>
                                    </div>
                                </div><!--cart item-->
                                <div class="cart-item clearfix">
                                    <div class="img">
                                        <img src="images/men/4.jpg" alt="" class="img-responsive">
                                    </div><!--img-->
                                    <div class="description">
                                        <a href="#">Mauris et ligula quis</a><strong class="price">1 x $44.95</strong>
                                    </div><!--Description-->
                                    <div class="buttons">
                                        <a href="#" class="fa fa-pencil"></a><a href="#" class="fa fa-trash-o"></a>
                                    </div>
                                </div><!--cart item-->
                                <div class="cart-item clearfix">
                                    <div class="img">
                                        <img src="images/men/2.jpg" alt="" class="img-responsive">
                                    </div><!--img-->
                                    <div class="description">
                                        <a href="#">Mauris et ligula quis</a><strong class="price">1 x $44.95</strong>
                                    </div><!--Description-->
                                    <div class="buttons">
                                        <a href="#" class="fa fa-pencil"></a><a href="#" class="fa fa-trash-o"></a>
                                    </div>
                                </div><!--cart item-->
                                <div class="cart-item clearfix">
                                    <div class="img">
                                        <img src="images/men/3.jpg" alt="" class="img-responsive">
                                    </div><!--img-->
                                    <div class="description">
                                        <a href="#">Mauris et ligula quis</a><strong class="price">1 x $44.95</strong>
                                    </div><!--Description-->
                                    <div class="buttons">
                                        <a href="#" class="fa fa-pencil"></a><a href="#" class="fa fa-trash-o"></a>
                                    </div>
                                </div><!--cart item-->
                                <div class="cart-item clearfix">
                                    <div class="img">
                                        <img src="images/men/6.jpg" alt="" class="img-responsive">
                                    </div><!--img-->
                                    <div class="description">
                                        <a href="#">Mauris et ligula quis</a><strong class="price">1 x $44.95</strong>
                                    </div><!--Description-->
                                    <div class="buttons">
                                        <a href="#" class="fa fa-pencil"></a><a href="#" class="fa fa-trash-o"></a>
                                    </div>
                                </div><!--cart item-->
                            </div><!--cart-items-->

                            <div class="cart-footer">
                                <a href="#" class="btn btn-light-dark"> View Cart</a>
                                <a href="#" class="btn btn-skin"> Checkout</a>
                            </div><!--footer of cart-->


                        </div><!--cart dropdown end-->
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <!--main navigation end-->
</header>
<!--header end-->
