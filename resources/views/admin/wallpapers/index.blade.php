@extends('admin.body.table_links')
@section('main')

    @section('title')
        Kagnew | Add
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
                        <h1>Wallpapers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Wallpapers</li>
                            <li class="breadcrumb-item active"><a href="{{ route('wallpaper.create') }}">Add Wallpaper</a></li>
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
                                <h3 class="card-title">All Wallpapers</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Wallpaper Name</th>
                                        <th>Wallpaper Description</th>
                                        <th>WallpaperImage</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($wallpapers as $item)
                                        <tr>
                                            <td> {{ $i++}} </td>
                                            <td> {{ $item->name }} </td>
                                            <td> {{ Str::limit($item->description, 50)}} </td>
                                            <td> <img src="{{ asset($item->wallpaper_image) }}" style="width: 60px; height: 50px;"> </td>


                                            <td>
                                                <a href="{{ route('edit.wallpaper',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                                <a href="{{ route('delete.wallpaper',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
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
