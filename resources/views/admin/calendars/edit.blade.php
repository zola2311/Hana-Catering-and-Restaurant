@extends('admin.body.links')
@section('main')

    @section('title')
        Kagnew | Edit
    @endsection

    @php
        $route = Route::current()->getName();
    @endphp

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Calender</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Calender</li>
                            <li class="breadcrumb-item"><a href="{{ route('wallpaper.index') }}">All Calenders</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


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
                                <h3 class="card-title">Update Calender</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{  route('update.calendar') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{   $calendar->id }}">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Link </label>
                                                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ $calendar->link}}">
                                                @error('link')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Calendar Description</label>
                                                <input type="text" name="description"class="form-control @error('description') is-invalid @enderror" value="{{ $calendar->description }}">
                                                @error('description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>




                                            <div class="form-group">
                                                <label for="customFile_3">Calendar Image</label>
                                                <div class="custom-file">
                                                    <input name="calendar_image" type="file" class="custom-file-input @error('calendar_image') is-invalid @enderror"  id="image">
                                                    <label class="custom-file-label" >Calendar Image</label>
                                                    @error('calendar_image')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="row mb-3">
                                                <label for="example-text-input"class="col-sm-2col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <img id="showImage"  class="img-thumbnail" src="{{ asset($calendar->calendar_image) }}"alt="Card image cap" height="150px" width="150px">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Calender">

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
