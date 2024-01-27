
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
                        <h1>Add player</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Players</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('all.players')}}">All players</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


{{--        <section class="content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <!-- left column -->--}}
{{--                    <div class="col-md-1"></div>--}}
{{--                    <!--/.col (left) -->--}}
{{--                    <!-- right column -->--}}
{{--                    <div class="col-md-10">--}}
{{--                        <div class="card card-info">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Update Profile and Password</h3>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <form method="post" action="{{ route('admin.update_password') }}" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <!-- text input for profile update -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Name</label>--}}
{{--                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name of the admin" value="{{ $admin->name }}">--}}
{{--                                                @error('name')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <!-- Add other profile update fields here -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Name</label>--}}
{{--                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name of the admin" value="{{ $admin->name }}">--}}
{{--                                                @error('name')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group">--}}
{{--                                                <label>Email</label>--}}
{{--                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email of the admin" value="{{ $admin->email }}">--}}
{{--                                                @error('email')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <!-- text input for password update -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Current Password</label>--}}
{{--                                                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Enter current password">--}}
{{--                                                @error('current_password')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group">--}}
{{--                                                <label>New Password</label>--}}
{{--                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter new password">--}}
{{--                                                @error('password')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Confirm Password</label>--}}
{{--                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password">--}}
{{--                                            </div>--}}
{{--                                            <!-- Add other password update fields here -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="row mb-3">--}}
{{--                                        <!-- Display profile image and other details here -->--}}
{{--                                    </div>--}}

{{--                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update  Password">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--            @if(session('error'))--}}
{{--                <div class="alert alert-danger">--}}
{{--                    {{ session('error') }}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </section>--}}

        <!-- /.content -->
    </div>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if(session('toastr'))
        <script>
            var toastrData = @json(session('toastr'));
            toastr[toastrData.type](toastrData.message);
        </script>
    @endif
    @if(session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif

    @if(session('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif

@endsection
