@php
$route=Route::current()->getName();
@endphp

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('dashboard')}}" class="nav-link">Home</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">{{auth()->user()->unreadNotifications->where('data.location', 'location2')->count() + auth()->user()->unreadNotifications->where('data.location', 'location1')->count()}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">{{auth()->user()->unreadNotifications->where('data.location', 'location2')->count() + auth()->user()->unreadNotifications->where('data.location', 'location1')->count()}} Notifications</span>
                            <div class="dropdown-divider"></div>
                    @php
                        $timestamp = isset($BookingSuccessful->data['timestamp'])
                            ? Carbon\Carbon::parse($BookingSuccessful->data['timestamp'])
                            : Carbon\Carbon::now();

                        $timestamp_2 = isset($DeliverySuccessful->data['timestamp'])
                            ? Carbon\Carbon::parse($DeliverySuccessful->data['timestamp'])
                            : Carbon\Carbon::now();
                    @endphp
                    <a href="{{route('book_notifications.get')}}" class="dropdown-item">
                        <i class="fas fa-utensils mr-2"></i> New bookings
                        <span class="float-right text-muted text-sm">{{auth()->user()->unreadNotifications->where('data.location', 'location1')->count()}}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('delivery_notification.get')}}" class="dropdown-item">
                        <i class="fas fa-dolly mr-1"></i> New deliveries
                        <span class="float-right text-muted text-sm">{{auth()->user()->unreadNotifications->where('data.location', 'location2')->count()}}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('book_notifications.get')}}" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
            <li class="nav-item">
{{--                <a class="nav-link" href="{{route('admin.logout')}}" role="button">--}}
{{--                    <i class="fas fa-sign-out-alt"></i>--}}
{{--                </a>--}}
            </li>

        </ul>
    </nav>
