@extends('admin.body.links')
@section('main')

    @section('title')
        Kagnew | Add Gallery Image
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
                        <h1>Adding Images to gallery</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Gallery</li>
                            <li class="breadcrumb-item active"><a href="{{route('all.images')}}">All Images</a></li>
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
                                <h3 class="card-title">Adding New images in to gallery</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="customFile_3">Gallery</label>
                                                <div class="custom-file">
                                                    <input name="images[]" class="custom-file-input @error('images.*') is-invalid @enderror" type="file" id="image" multiple>
                                                    <label class="custom-file-label" >Choose Images</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input"class="col-sm-2col-form-label"></label>
                                        <div class="col-sm-10">
                                            <div id="showImages">
                                                <img class="img-thumbnail" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap" height="150px" width="150px">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Add images">

                                </form>
                                @if($errors->any())
                                    <div class="alert alert-danger mt-3">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
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




