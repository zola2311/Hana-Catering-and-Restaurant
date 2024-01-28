
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
                            <div class="card-header">
                                <h3 class="card-title">Messages from the website</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($contacts as $item)
                                    <tr>
                                        <td> {{ $i++}} </td>
                                        <td> {{ $item->name }} </td>
                                        <td> {{ $item->email }} </td>
                                        <td> {{ $item->phone }} </td>
                                        <td> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </td>

                                        <td>
                                            <a href="{{ route('delete.message',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                                            <a href="{{ route('view.message',$item->id) }}" class="btn btn-info sm" title="view message">  <i class="fas fa-envelope-open"></i> </a>
                                        </td>

                                    </tr>
                                    @endforeach


                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
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
