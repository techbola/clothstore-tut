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
<!--revolution slider extentions-->
<script type="text/javascript" src="{{ asset('main/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<!--revolution slider extentions-->
<script type="text/javascript" src="{{ asset('main/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script>
    /******************************************
     -	PREPARE PLACEHOLDER FOR SLIDER	-
     ******************************************/

    var revapi;
    jQuery(document).ready(function () {
        revapi = jQuery("#rev_slider").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 9000,
            navigation: {
                arrows: {enable: true}
            },
            gridwidth: 1230,
            gridheight: 500
        });
    });	/*ready*/
</script>

@yield('scripts')
