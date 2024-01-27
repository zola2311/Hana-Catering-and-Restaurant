@extends('admin.body.table_links')
@section('main')

    @section('title')
        Kagnew | Gallery
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

    <body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gallery Images</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Gallery</li>
                            <li class="breadcrumb-item active"><a href="{{route('images.upload')}}">Add Image</a></li>
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
                                <h3 class="card-title">Gallery Images</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{ route('delete.images') }}">
                                    @csrf
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Gallery Images</th>
                                        <th>Action</th>
                                        <th>Select</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($allImages as $item)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td>
                                                <img src="{{ asset($item->images) }}" style="width: 60px; height: 50px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.image',$item->id) }}" class="btn btn-info sm" title="Edit Data">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('delete.image',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>



                                            <td>
                                                <input type="checkbox" name="selected_images[]" value="{{ $item->id }}">
                                            </td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-danger" >Delete Selected Images</button>
                                </div>
                                </form>

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

</div>
@endsection
