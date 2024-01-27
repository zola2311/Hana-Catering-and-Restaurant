@extends('admin.body.table_links')
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
                        <h1>All players</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Players</li>
                            <li class="breadcrumb-item"><a href="{{route('create.player')}}">Add players</a></li>
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
                                <h3 class="card-title">All players</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>DoB</th>
                                        <th>Position</th>
                                        <th>Squad Number</th>
                                        <th>Action</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach( $players as $item)
                                        <tr>
                                            <td> {{ $i++}}</td>
                                            <td>{{ $item->name}}</td>
                                            <td> @if($item->photo1)
                                                    <img src="{{ asset($item->photo1) }}" style="width: 60px; height: 50px;">

                                                @else
                                                    <img src="{{url('upload/no_image.jpg')}}" style="width: 60px; height: 50px;">
                                                @endif
                                            </td>
                                            <td>{{ $item->dob}}</td>
                                            <td>{{ $item->position}}</td>
                                            <td>{{ $item->squad_no}}</td>
                                            <td>
                                                <a href="{{ route('edit.player',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                                <a href="{{ route('delete.player',$item->id) }}" class="btn btn-danger sm" data-toggle="modal" title="Delete Data"
                                                   id="delete" >  <i class="fas fa-trash-alt"></i> </a>

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

    <!-- /.content-wrapper -->
@endsection
