@php
$route=Route::current()->getName();
@endphp
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container d-flex justify-content-between">
        <div class="d-lg-flex social-links a">
{{--            <a href="https://t.me/KAGNEWFC" class="telegram" rel="noopener noreferrer" target="_blank"><i class="bi bi-telegram"></i></a>--}}
{{--            <a href="https://www.facebook.com/kagnewfootballclub" class="facebook" rel="noopener noreferrer" target="_blank"><i class="bi bi-facebook"></i></a>--}}
{{--            <a href="https://instagram.com/kagnew_fc" class="instagram" rel="noopener noreferrer" target="_blank"><i class="bi bi-instagram"></i></a>--}}
{{--            <a href="https://www.tiktok.com/@kagnew.fc?_t=8iMcqrU9a6A&_r=1" class="tiktok" rel="noopener noreferrer" target="_blank"><i class="bx bxl-tiktok"></i></a>--}}
        </div>
        <div class="d-lg-flex social-links a">
            @guest
                <a href="{{ route('login') }}" class="twitter" rel="noopener noreferrer" target="_blank"><i class="bi bi-person"></i></a>
                <a href="{{ route('login') }}" style="white-space: nowrap;">Login</a>
            @else
                <a href="{{route('register')}}" style="white-space: nowrap;">{{ Auth::user()->name }}</a>
            @endguest
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
{{--<header id="header" class="fixed-top d-flex align-items-center header-transparent">--}}
{{--    <div class="container-fluid container-xl d-flex align-items-center justify-content-md-between">--}}
{{--        <div class="logo me-auto">--}}
{{--            <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/header-logo.png') }}"  alt="Kagnew FC Logo" class="img-fluid"></a>--}}

{{--            <h1><a href="{{ route('home') }}"></a></h1>--}}

{{--        </div>--}}
{{--        <nav id="navbar" class="navbar order-last order-lg-0">--}}
{{--            <ul>--}}
{{--                <li><a class="{{ $route == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>--}}
{{--                <li><a href="{{ route('about') }}" class="{{ $route == 'about' ? 'active' : '' }}">About</a></li>--}}
{{--                <li><a href="{{ route('profile') }}" class="{{ $route == 'profile' ? 'active' : '' }}">Profile</a></li>--}}
{{--                <li><a href="{{ route('gallery') }}" class="{{ $route == 'gallery' ? 'active' : '' }}">Gallery</a></li>--}}
{{--                <li><a href="{{ route('membership_and_shop') }}" class="{{ $route == 'membership_and_shop' ? 'active' : '' }}">Membership & Shop</a></li>--}}
{{--                <li><a href="{{ route('contact') }}" class="{{ $route == 'contact' ? 'active' : '' }}">Contact</a></li>--}}
{{--            </ul>--}}
{{--            <i class="bi bi-list mobile-nav-toggle"></i>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</header>--}}

