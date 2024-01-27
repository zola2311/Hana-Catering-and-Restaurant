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
                        <h1>Add Wallpaper</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Wallpapers</li>
                            <li class="breadcrumb-item active"><a href="{{ route('wallpaper.index') }}">All Wallpapers</a></li>
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
                    <!-- left column -->
                    <div class="col-md-1"></div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-10">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">New Wallpaper</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{ route('wallpaper.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Wallpaper Name </label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name of the Wallpaper ">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Wallpaper  Description</label>
                                                <input type="text" name="description"class="form-control @error('description') is-invalid @enderror" placeholder="Wallpaper Description">
                                                @error('description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>



                                            <div class="form-group">
                                                <label for="customFile_3">Wallpaper Image</label>
                                                <div class="custom-file">
                                                    <input name="wallpaper_image" type="file" class="custom-file-input @error('wallpaper_image') is-invalid @enderror" id="image">
                                                    <label class="custom-file-label" >Choose Wallpaper Image</label>
                                                    @error('wallpaper_image')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input"class="col-sm-2col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="showImage"  class="img-thumbnail" src="{{url('upload/no_image.jpg')}}"alt="Card image cap" height="150px" width="150px">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Wallpaper">

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- general form elements disabled -->

                        <!-- /.card -->
                    </div>
                    <div class="col-md-1"></div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
