@php
$route=Route::current()->getName();
@endphp
{{--@php--}}
{{--    $shop = \App\Models\Shop::count();--}}
{{--@endphp--}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--            <a href="{{route('admin.profile')}}">--}}
            <div class="image">
                <img src=" {{asset('dist/img/1212.jpeg')}}" class="img-circle elevation-2" alt="User Image" >
            </div>
            </a>
            <div class="info">
{{--                <a href="{{route('admin.profile')}}" class="d-block">{{$admin->name}}</a>--}}
            </div>


        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                       Profile
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
{{--                        <a href="{{route('admin.profile')}}" class="nav-link">--}}
{{--                            <i class="fas fa-question nav-icon"></i>--}}
{{--                            <p>Change password</p>--}}
{{--                        </a>--}}

                    </li>

                </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Deliveries
                            <i class="fas fa-angle-left right"></i>
                                                        <span class="badge badge-info right">3</span>
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                           Bookings
                            <i class="fas fa-angle-left right"></i>
                                                        <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            {{--                            <a href="{{route('all.images')}}" class="nav-link">--}}
                            {{--                                <i class="far fa-circle nav-icon"></i>--}}
                            {{--                                <p>All Images</p>--}}
                            {{--                            </a>--}}
                        </li>
                        <li class="nav-item">
                            {{--                            <a href="{{route('images.upload')}}" class="nav-link">--}}
                            {{--                                <i class="far fa-circle nav-icon"></i>--}}
                            {{--                                <p>Upload images</p>--}}
                            {{--                            </a>--}}
                        </li>


                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th "></i>
                        <p>
Menu Category
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="far fa-circle nav-icon"></i>
                                <p>All menu category</p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="far fa-circle nav-icon"></i>
                                <p>Add menu category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-life-ring"></i>
                        <p>
                        Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All menu items</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add menu item</p>
                            </a>
                        </li>

                    </ul>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

