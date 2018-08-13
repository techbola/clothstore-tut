<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="active">
                            <a href="{{ route('admin.dashboard') }}"><i class="icon mdi mdi-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Products</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('products.create') }}">New Product</a>
                                </li>
                                <li><a href="{{ route('products.index') }}">All Products</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Posts</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('posts.create') }}">New Post</a>
                                </li>
                                <li><a href="{{ route('posts.index') }}">All Posts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>