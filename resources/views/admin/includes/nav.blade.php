<nav class="navbar navbar-expand fixed-top be-top-header">
    <div class="container-fluid">
        <div class="be-navbar-header">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand">Logo Here</a>
        </div>
        <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <img src="{{ asset('admin/assets/img/avatar.png') }}" alt="Username">
                        <span class="user-name">{{ auth()->user()->name }}</span></a>
                    <div role="menu" class="dropdown-menu">
                        <div class="user-info">
                            <div class="user-name">{{ auth()->user()->name }}</div>
                        </div>
                        <a href="{{route('logout')}}" class="dropdown-item"><span class="icon mdi mdi-power"></span> Logout</a>
                    </div>
                </li>
            </ul>
            <div class="page-title">
                <span>
                    @yield('pageTitle')
                </span>
            </div>
        </div>
    </div>
</nav>