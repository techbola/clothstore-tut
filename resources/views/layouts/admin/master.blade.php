<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
<div class="be-wrapper be-fixed-sidebar">

    @include('admin.includes.nav')

    @include('admin.includes.sidebar')

    @yield('content')

</div>

@include('admin.includes.scripts')

</body>

</html>