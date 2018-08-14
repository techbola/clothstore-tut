<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Clothstore</title>

    <!-- Bootstrap -->
    <link href="{{ asset('main/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--plugins-->
    <link href="{{ asset('main/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/bower_components/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('main/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('main/owl-carousel/assets/owl.theme.default.css') }}" rel="stylesheet">

    <link href="{{ asset('main/pe-icons/Pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('main/custom-scrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('main/css/yamm.css') }}" rel="stylesheet">
    <!--sky form pro css-->
    <link href="{{ asset('main/sky-form/css/sky-forms.css') }}" rel="stylesheet">

    <!--custom css file-->
    <link href="{{ asset('main/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('main/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include('front.includes.nav')

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1>Checkout</h1>
    </div>
</div>
<!--end breadcrumb-->

<div class="space-60"></div>
<div class="container sky-checkout-form">

    <form action="" id="checkout-form" class="sky-form">

        {{--<fieldset>--}}
            {{--<div class="row">--}}
                {{--<section class="col col-6">--}}
                    {{--<label class="input">--}}
                        {{--<i class="icon-prepend fa fa-user"></i>--}}
                        {{--<input type="text" name="fname" placeholder="First name">--}}
                    {{--</label>--}}
                {{--</section>--}}
                {{--<section class="col col-6">--}}
                    {{--<label class="input">--}}
                        {{--<i class="icon-prepend fa fa-user"></i>--}}
                        {{--<input type="text" name="lname" placeholder="Last name">--}}
                    {{--</label>--}}
                {{--</section>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<section class="col col-6">--}}
                    {{--<label class="input">--}}
                        {{--<i class="icon-prepend fa fa-envelope"></i>--}}
                        {{--<input type="email" name="email" placeholder="E-mail">--}}
                    {{--</label>--}}
                {{--</section>--}}
                {{--<section class="col col-6">--}}
                    {{--<label class="input">--}}
                        {{--<i class="icon-prepend fa fa-phone"></i>--}}
                        {{--<input type="tel" name="phone" placeholder="Phone">--}}
                    {{--</label>--}}
                {{--</section>--}}
            {{--</div>--}}
        {{--</fieldset>--}}

        <div class="space-30"></div>
        <div class="cart-total" id="cart_total_checkout">
            <fieldset>

                <h2>Cart total</h2>
                <table class="table table-bordered">
                    <thead>
                        <th style="text-align: center;">Product</th>
                        <th style="text-align: center;">Quantity</th>
                        <th style="text-align: center;">Total</th>
                    </thead>

                    <tbody>

                        @foreach(Cart::content() as $item)

                            <tr>
                                <td width="25%">{{ $item->name }}</td>
                                <td width="25%">x {{ $item->qty }}</td>
                                <td width="50%" class="color">${{ $item->price }}</td>
                            </tr>

                        @endforeach

                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td class="color">
                                <strong>${{ Cart::total() }}</strong>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </fieldset>
        </div>
        <div class="space-30"></div>
        <footer class="text-right">
            <button type="submit" class="btn btn-light-dark btn-lg">Place order</button>
        </footer>
    </form>

</div>
<div class="space-60"></div>

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 margin-b-30">
                    <h3>About store</h3>
                    <p>
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus
                    </p>
                    <ul class="list-inline social-footer">
                        <li><a href="#" data-toggle="tooltip" data-placement="top" data-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" data-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 margin-b-30">
                    <h3>Quick Links </h3>
                    <div class="tags clearfix">
                        <a href="#">Home</a>
                        <a href="#">Shop</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div class="col-md-4 margin-b-30">
                    <h3>Help Center</h3>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">+01 1800 345-4509</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">care@assan.com</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">124, Lorem street, California, Usa</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <div class="container text-center">
            <h3>
                <a href="{{ route('index') }}">
                    <img src="" alt="Logo Here">
                </a>
            </h3>
            <span class="copyright">&copy; Copyright 2018.</span>
        </div>
    </div>
    <!--footer end-->


<!--js plugins-->
<script src="{{ asset('main/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('main/js/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/js/jquery.easing.1.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.sticky.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.mousewheel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/bower_components/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('main/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/js/tweetie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/js/custom.js') }}" type="text/javascript"></script>
<!--sky form plugin js-->
<script src="{{ asset('main/sky-form/js/jquery.form.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/sky-form/js/jquery.maskedinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('main/sky-form/js/jquery.validate.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(function ()
    {
        // Masking
        $('#cvv').mask('999', {placeholder: 'X'});
        $('#card').mask('9999-9999-9999-9999', {placeholder: 'X'});
        $('#year').mask('2099', {placeholder: 'X'});

        // Add validation method
        $.validator.addMethod("creditcard", function (value, element, param)
            {
                if (/[^0-9\-]+/.test(value))
                {
                    return false;
                }
            },
            $.validator.format('Please enter a valid credit card number.'));

        // Validation
        $('#checkout-form').validate(
            {
                // Rules for form validation
                rules:
                    {
                        fname:
                            {
                                required: true
                            },
                        lname:
                            {
                                required: true
                            },
                        email:
                            {
                                required: true,
                                email: true
                            },
                        phone:
                            {
                                required: true
                            },
                        country:
                            {
                                required: true
                            },
                        city:
                            {
                                required: true
                            },
                        code:
                            {
                                required: true,
                                digits: true
                            },
                        address:
                            {
                                required: true
                            },
                        name:
                            {
                                required: true
                            },
                        card:
                            {
                                required: true
                            },
                        cvv:
                            {
                                required: true,
                                digits: true
                            },
                        month:
                            {
                                required: true
                            },
                        year:
                            {
                                required: true,
                                digits: true
                            }
                    },
                // Messages for form validation
                messages:
                    {
                        fname:
                            {
                                required: 'Please enter your first name'
                            },
                        lname:
                            {
                                required: 'Please enter your last name'
                            },
                        email:
                            {
                                required: 'Please enter your email address',
                                email: 'Please enter a VALID email address'
                            },
                        phone:
                            {
                                required: 'Please enter your phone number'
                            },
                        country:
                            {
                                required: 'Please select your country'
                            },
                        city:
                            {
                                required: 'Please enter your city'
                            },
                        code:
                            {
                                required: 'Please enter code',
                                digits: 'Digits only please'
                            },
                        address:
                            {
                                required: 'Please enter your full address'
                            },
                        name:
                            {
                                required: 'Please enter name on your card'
                            },
                        card:
                            {
                                required: 'Please enter your card number'
                            },
                        cvv:
                            {
                                required: 'Enter CVV2',
                                digits: 'Digits only'
                            },
                        month:
                            {
                                required: 'Select month'
                            },
                        year:
                            {
                                required: 'Enter year',
                                digits: 'Digits only please'
                            }
                    },
                // Do not change code below
                errorPlacement: function (error, element)
                {
                    error.insertAfter(element.parent());
                }
            });
    });
</script>

</body>
</html>
