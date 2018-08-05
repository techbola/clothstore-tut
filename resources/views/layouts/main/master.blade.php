<!DOCTYPE html>
<html lang="en">

    <head>
        @include('front.includes.head')
    </head>

    <body>

        @include('front.includes.nav')

        @yield('slider')

        @yield('content')

        @include('front.includes.footer')

        @include('front.includes.scripts')

    </body>
</html>
