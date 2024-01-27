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
                        <h1>Add Calender</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Calender</li>
                            <li class="breadcrumb-item"><a href="{{ route('wallpaper.index') }}">All Calenders</a></li>
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
                                <h3 class="card-title">Adding New Calender</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{ route('calendar.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Calender Link </label>
                                                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" placeholder="Name of the Calender ">
                                                @error('link')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Calender  Description</label>
                                                <input type="text" name="description"class="form-control @error('description') is-invalid @enderror" placeholder="Calender Description">
                                                @error('description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="customFile_3">Calender Image</label>
                                                <div class="custom-file">
                                                    <input name="calender_image" type="file" class="custom-file-input @error('calender_image') is-invalid @enderror" id="image">
                                                    <label class="custom-file-label" >Choose Calender Image</label>
                                                    @error('calender_image')
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
                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Calender">

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>

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
