{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Profile') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">--}}
{{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
{{--                <div class="max-w-xl">--}}
{{--                    @include('profile.partials.update-profile-information-form')--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
{{--                <div class="max-w-xl">--}}
{{--                    @include('profile.partials.update-password-form')--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
{{--                <div class="max-w-xl">--}}
{{--                    @include('profile.partials.delete-user-form')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
@extends('admin.body.links')
@section('main')

    @section('title')
        Kagnew | Add
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp


        <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Profile</li>
                            <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        </ol>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src=" {{asset('backend/dist/img/1212.jpeg')}}"

                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                                <p class="text-muted text-center">{{ Auth::user()->email }}</p>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>
                    <div class="col-md-8">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- left column -->

                                    <!--/.col (left) -->
                                    <!-- right column -->
                                    <div class="col-md-12">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Update Profile and Password</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label>Current Password</label>
                                                        <input type="password" name="current_password" class="form-control @if($errors->updatePassword->has('current_password')) is-invalid @endif" autocomplete="current-password">
                                                        @if($errors->updatePassword->has('current_password'))
                                                            <span class="text-danger">{{ $errors->updatePassword->first('current_password') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="password" name="password" class="form-control @if($errors->updatePassword->has('password')) is-invalid @endif" autocomplete="new-password">
                                                        @if($errors->updatePassword->has('password'))
                                                            <span class="text-danger">{{ $errors->updatePassword->first('password') }}</span>
                                                        @endif
                                                    </div>



                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" name="password_confirmation" class="form-control @if($errors->updatePassword->has('password_confirmation')) is-invalid @endif" autocomplete="new-password">
                                                        @if($errors->updatePassword->has('password_confirmation'))
                                                            <span class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</span>
                                                        @endif
                                                    </div>




                                                    <div class="flex items-center gap-4">
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">{{ __('Save') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card card-info">
                                            <div class="card-body">
                                                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                                    @csrf
                                                    @method('patch')

                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                                                        @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required autocomplete="username">
                                                        @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                            <div>
                                                                <p class="text-sm mt-2 text-gray-800">
                                                                    {{ __('Your email address is unverified.') }}

                                                                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        {{ __('Click here to re-send the verification email.') }}
                                                                    </button>
                                                                </p>

                                                                @if (session('status') === 'verification-link-sent')
                                                                    <p class="mt-2 font-medium text-sm text-green-600">
                                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="flex items-center gap-4">
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">{{ __('Save') }}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </section>
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        // Add this script at the bottom of your Blade template or in a separate JS file

        document.addEventListener('DOMContentLoaded', function () {
            @if (session('status') === 'profile-updated')
            toastr.success('{{ __('Profile updated.') }}');
            @endif
            @if (session('status') === 'password-updated')
            toastr.success('{{ __('password updated') }}');
            @endif
        });
    </script>
@endsection
