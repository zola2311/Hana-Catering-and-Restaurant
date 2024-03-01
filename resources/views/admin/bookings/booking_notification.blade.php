
@extends('admin.body.table_links')
@section('main')

    @section('title')
        Kagnew | message
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
                        <h1>All Messages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="container mt-4">
                                @if (auth()->user()->unreadNotifications->count() > 0)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="notification">
                                    There are new notifications.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <!-- Your admin dashboard content goes here -->

                                <!-- Clear Notification Button -->
                                <a href="{{route('mark-as-booking')}}" class="btn btn-secondary float-right">Clear Notification</a>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav class="w-100">
                                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Booking Notifications</a>
                                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Delivery Notifications</a>
                                    </div>
                                </nav>
                                <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                        <table id="example4" class="table table-bordered table-striped">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>Sl</th>
                                                <th>Notification</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($i = 1)
                                            @foreach(auth()->user()->unreadNotifications->where('data.location', 'location1') as $notification)
                                                <tr class="table-danger">
                                                    <td> {{ $i++}} </td>
                                                    <td>{{ $notification->data['data'] }}</td>
                                                </tr>
                                            @endforeach
                                            @foreach(auth()->user()->readNotifications->where('data.location', 'location1') as $notification)
                                                <tr class="table-success">
                                                    <td> {{ $i++}} </td>
                                                    <td>{{ $notification->data['data'] }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                                        <table id="example" class="table table-bordered table-striped">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>Sl</th>
                                                <th>Notification</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($i = 1)
                                            @foreach(auth()->user()->unreadNotifications->where('data.location', 'location2') as $notification)
                                                <tr class="table-danger">
                                                    <td> {{ $i++}} </td>
                                                    <td>{{ $notification->data['data'] }}</td>
                                                </tr>
                                            @endforeach
                                            @foreach(auth()->user()->readNotifications->where('data.location', 'location2') as $notification)
                                                <tr class="table-success">
                                                    <td> {{ $i++}} </td>
                                                    <td>{{ $notification->data['data'] }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>

@endsection
