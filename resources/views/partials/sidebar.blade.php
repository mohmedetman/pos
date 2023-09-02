<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="#" class="brand-link logo-switch">
        {{--         <img src="{{ asset('/') }}admin/dist/img/logo.png" class="brand-image-xl logo-xs">--}}
        <img src="{{ asset('/') }}admin/custom/logo1.png" class="brand-image-xs">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{--      <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
        {{--        <div class="image">--}}
        {{--          <img src="{{ asset('/') }}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
        {{--        </div>--}}
        {{--        <div class="info">--}}
        {{--          <a href="#" class="d-block">Admin</a>--}}
        {{--        </div>--}}
        {{--      </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-flat" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon  fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

               {{-- @if (auth()->user()->hasRole('admin') )  --}}
                {{-- if ($user->hasRole('admin')) { --}}

{{-- } else {
    // User does not have the 'admin' role
} --}}

                    <li class="nav-item @if(request()->is("admin/project-category")) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                user
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{ url('user') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>index</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('user/add') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(request()->is("admin/project-category")) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                client
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{ url('client') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>index</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('client/create') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(request()->is("admin/project-category")) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Product
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{ url('product') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>index</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('product/create') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(request()->is("admin/project-category")) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                category
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{ url('category') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>index</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('category/create') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(request()->is("admin/project-category")) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                order
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{ url('order') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>index</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item ">
                                <a href="{{ url('category/create') }}" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>add</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>


{{-- @endif --}}


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
