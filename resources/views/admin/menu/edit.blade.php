@extends('admin.body.links')
@section('main')

    @section('title')
        Menu| Edit
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
                        <h1>Edit Menu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Menus</li>
                            <li class="breadcrumb-item active"><a href="{{ route('menus.index') }}">All Menus</a></li>
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
                        <!-- Form Element sizes -->

                        <!-- /.card -->


                        <!-- /.card -->

                        <!-- general form elements disabled -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Update Menu</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{  route('update.menu') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{   $menu->id }}">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="row mb-3">
                                                <label for="category_id" class="col-sm-2 col-form-label">Choose category</label>
                                                <div class="col-sm-10">
                                                    <select name="category_id" id="category_id" class="select2-dropdown">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Item Name </label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $menu->name}}">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Item Description</label>
                                                <input type="text" name="description"class="form-control @error('description') is-invalid @enderror" value="{{ $menu->description }}">
                                                @error('description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Item Price</label>
                                                <input type="text" name="price"class="form-control @error('description') is-invalid @enderror" value="{{ $menu->price }}">
                                                @error('price')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>




{{--                                            <div class="form-group">--}}
{{--                                                <label for="customFile_3">Menu Image</label>--}}
{{--                                                <div class="custom-file">--}}
{{--                                                    <input name="wallpaper_image" type="file" class="custom-file-input @error('wallpaper_image') is-invalid @enderror"  id="image">--}}
{{--                                                    <label class="custom-file-label" >Wallpaper Image</label>--}}
{{--                                                    @error('wallpaper_image')--}}
{{--                                                    <span class="text-danger">{{$message}}</span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}



{{--                                            <div class="row mb-3">--}}
{{--                                                <label for="example-text-input"class="col-sm-2col-form-label"></label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <img id="showImage"  class="img-thumbnail" src="{{ asset($wallpaper->wallpaper_image) }}"alt="Card image cap" height="150px" width="150px">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>

                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Menu">

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
