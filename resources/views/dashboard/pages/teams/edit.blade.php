@extends('dashboard.layout.layout')

@section('page-title', 'edit teams');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>edit teams</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('teams.list.view') }}">teamss</a></li>
                            <li class="breadcrumb-item active">Create teams</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create teams</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('teams.update', ['id' => $team['id']]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @if($errors->any())
                                <div class=" alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error )
                                          <li>{{ $error }}</li>  
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id">id</label>
                                        <input name="id" type="number"
                                            class="form-control @error('id') is-invalid  @enderror" id="id"
                                            placeholder="Enter id" value="{{ old('id',$team['id']) }}">
                                        @error('id')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="team_det_id">team_det_id</label>
                                        <input name="team_det_id" type="number"
                                            class="form-control @error('team_det_id') is-invalid  @enderror" id="team_det_id"
                                            placeholder="Enter team_det_id" value="{{ old('team_det_id',$team['team_det_id']) }}">
                                        @error('team_det_id')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="image">image</label>
                                        <div class="custom-file">
                                            <input name="image" type="text"
                                                class="custom-file-input @error('image') is-invalid  @enderror"
                                                id="image"
                                                placeholder="Enter image" value="{{ old('image',$team['image']) }}">
                                            <label class="custom-file-label" for="image">Choose image</label>
                                        </div>
                                        @error('image')
                                            <span id="exampleInputEmail1-error" class="error invalid-feedback"
                                                style="display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid  @enderror" id="name"
                                            placeholder="Enter name" value="{{ old('name',$team['name']) }}">
                                        @error('name')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="position">position</label>
                                        <input name="position" type="text"
                                            class="form-control @error('position') is-invalid  @enderror" id="position"
                                            placeholder="Enter position" value="{{ old('position',$team['position']) }}">
                                        @error('position')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">facebook</label>
                                        <input name="facebook" type="text"
                                            class="form-control @error('facebook') is-invalid  @enderror" id="facebook"
                                            placeholder="Enter facebook" value="{{ old('facebook',$team['facebook']) }}">
                                        @error('facebook')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">twitter</label>
                                        <input name="twitter" type="text"
                                            class="form-control @error('twitter') is-invalid  @enderror" id="twitter"
                                            placeholder="Enter twitter" value="{{ old('twitter',$team['twitter']) }}">
                                        @error('twitter')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="dribbble">dribbble</label>
                                        <input name="dribbble" type="text"
                                            class="form-control @error('dribbble') is-invalid  @enderror" id="dribbble"
                                            placeholder="Enter dribbble" value="{{ old('dribbble',$team['dribbble']) }}">
                                        @error('dribbble')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="discription">discription</label>
                                        <input name="discription" type="text"
                                            class="form-control @error('discription') is-invalid  @enderror" id="discription"
                                            placeholder="Enter discription" value="{{ old('discription',$team['discription']) }}">
                                        @error('discription')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="youtube">youtube</label>
                                        <input name="youtube" type="text"
                                            class="form-control @error('youtube') is-invalid  @enderror" id="youtube"
                                            placeholder="Enter youtube" value="{{ old('youtube',$team['youtube']) }}">
                                        @error('youtube')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="behance">behance</label>
                                        <input name="behance" type="text"
                                            class="form-control @error('behance') is-invalid  @enderror" id="behance"
                                            placeholder="Enter behance" value="{{ old('behance',$team['behance']) }}">
                                        @error('behance')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="vemo">vemo</label>
                                        <input name="vemo" type="text"
                                            class="form-control @error('vemo') is-invalid  @enderror" id="vemo"
                                            placeholder="Enter vemo" value="{{ old('vemo',$team['vemo']) }}">
                                        @error('vemo')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection