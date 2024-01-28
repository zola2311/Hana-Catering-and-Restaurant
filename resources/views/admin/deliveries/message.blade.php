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
                        <h1>Inbox</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">

                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Subject:   {{ $message->subject }}</h5>
                                    <h5>From: {{ $message->name }}
              <span class="mailbox-read-time float-right">{{ $message->created_at->format('Y-m-d H:i:s') }}</span></h5>
                                    <h5>Phone Number: {{ $message->phone  }} </h5>
                                </div>

                                <div class="mailbox-read-message">
                                    <p>{{ $message->message }}</p>
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <div class="float-right">
{{--                                    <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>--}}
{{--                                    <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>--}}
                                </div>
                                <a href="{{ route('delete.message', $message->id) }}" class="btn btn-default" onclick="return confirm('Are you sure you want to delete this message?')">
                                    <i class="far fa-trash-alt"></i> Delete
                                </a>
                                <button type="button" class="btn btn-default" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
