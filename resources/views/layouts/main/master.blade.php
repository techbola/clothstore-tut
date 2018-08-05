<!DOCTYPE html>
<html lang="en">

    <head>
        @include('front.includes.head')
    </head>

    <body>

        @include('front.includes.nav')

        @include('front.includes.slider')

        @yield('content')

        @include('front.includes.footer')

        @include('front.includes.scripts')

    </body>
</html>
