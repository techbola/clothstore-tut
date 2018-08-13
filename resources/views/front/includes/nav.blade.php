<!--search toggle form-->
<div class="search-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <form action="" method="post">

                   {{ csrf_field() }}

                    <input type="text" name="search_query" class="form-control" placeholder="E.g. Blue T-shirt..." required>
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
    {{--<div class="top-bar">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-6 hidden-xs">--}}
                    {{--<span>Welcome message goes here...</span>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 text-right">--}}
                    {{--<ul class="list-inline">--}}
                        {{--<li class="hidden-xs"><a href="{{ route('register') }}"><i class="pe-7s-user"></i> Register</a></li>--}}
                        {{--<li><a href="{{ route('login') }}"><i class="pe-7s-lock"></i> Login</a></li>--}}
                        {{--<li class="lang-dropdown">--}}
                            {{--<a href="#"><img src="images/flag1.png" alt=""> English <i class="fa fa-angle-down"></i></a>--}}
                            {{--<div class="lang-drop-menu">--}}
                                {{--<a href="#"><img src="images/flag1.png" alt=""> English</a>--}}
                                {{--<a href="#"><img src="images/flag2.png" alt=""> French</a>--}}
                                {{--<a href="#"><img src="images/flag3.png" alt=""> German</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li><a href="javascript:void(0)" class="search-toggle"><i class="fa fa-search"></i></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
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
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">
                            <i class="pe-7s-cart"></i> <span class="badge">5</span></a>
                    </li>
                    <li><a href="javascript:void(0)" class="search-toggle"><i class="fa fa-search"></i></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <!--main navigation end-->
</header>
<!--header end-->
