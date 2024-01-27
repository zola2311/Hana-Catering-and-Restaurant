@extends('admin.body.links')
@section('main')

    @section('title')
        Kagnew | edit
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
                        <h1>Edit player</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Players</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('all.players')}}">All players</a></li>
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
                                <h3 class="card-title">Update player</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{ route('update.player') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{  $player->id }}">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Name </label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $player->name }}">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Nickname</label>
                                                <input type="text" name="nick_name"class="form-control @error('nick_name') is-invalid @enderror" value="{{ $player->nick_name }}">
                                                @error('size')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label>Positions </label>
                                                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ $player->position }}">
                                                @error('position')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label>Squad Number</label>
                                                <input type="number"  name="squad_no" class="form-control @error('squad_no') is-invalid @enderror" value="{{ $player->squad_no }}">
                                                @error('squad_no')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text"  name="dob" class="form-control @error('dob') is-invalid @enderror" value="{{ $player->dob }}"placeholder="Date of Birth">
                                                @error('dob')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Debut</label>
                                                <input type="text"  name="debut" class="form-control @error('debut') is-invalid @enderror" placeholder="Debut"value="{{ $player->debut }}">
                                                @error('debut')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>height</label>
                                                <input type="text"  name="height" class="form-control @error('debut') is-invalid @enderror" placeholder="Debut"value="{{ $player->height }}">
                                                @error('debut')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="customFile_3">Image of the player</label>
                                                <div class="custom-file">
                                                    <input name="photo1" type="file" class="custom-file-input @error('photo1') is-invalid @enderror" id="image">
                                                    <label class="custom-file-label" >Choose Image of the player </label>
                                                    @error('photo1')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="customFile_3">Image  of the player when hovered</label>
                                                <div class="custom-file">
                                                    <input name="photo2" type="file" class="custom-file-input @error('photo2') is-invalid @enderror" id="image2">
                                                    <label class="custom-file-label" >Choose Image  of the player when hovered </label>
                                                    @error('photo2')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="customFile_3">Image of the player when opened</label>
                                                <div class="custom-file">
                                                    <input name="photo3" type="file" class="custom-file-input @error('photo3') is-invalid @enderror" id="image3">
                                                    <label class="custom-file-label" >Choose Detailed Image of the player </label>
                                                    @error('photo3')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                            <div class="row mb-3">
                                                <div class="col-4">
                                                    <label for="example-text-input"class="col-sm-2col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <img id="showImage"  class="img-thumbnail" src="{{ asset($player->photo1) }}"alt="Card image cap"height="150px" width="150px">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="example-text-input"class="col-sm-2col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <img id="showImage2"  class="img-thumbnail"  src="{{ asset($player->photo2) }}"alt="Card image cap"height="150px" width="150px">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="example-text-input"class="col-sm-2col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <img id="showImage3"  class="img-thumbnail"  src="{{ asset($player->photo3) }}"alt="Card image cap"height="150px" width="150px">
                                                    </div>
                                                </div>
                                            </div>



                                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update player">
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
