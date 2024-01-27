@extends('admin.body.table_links')
@section('main')

    @section('title')
        Kagnew | Edit
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Calendars</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Calendars</li>
                            <li class="breadcrumb-item active"><a href="{{ route('calendar.create') }}">Add Calender</a> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Calendars</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Calendar Link</th>
                                        <th>Calendar Description</th>
                                        <th>Calendar Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($calendars as $item)
                                        <tr>
                                            <td> {{ $i++}} </td>
                                            <td> {{ $item->link }} </td>
                                            <td> {{ Str::limit($item->description, 50)}} </td>
                                            <td> <img src="{{ asset($item->calendar_image) }}" style="width: 60px; height: 50px;"> </td>
                                            <td>
                                                <a href="{{ route('edit.calendar',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                                <a href="{{ route('delete.calendar',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
                                                   id="delete">  <i class="fas fa-trash-alt"></i> </a>
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

