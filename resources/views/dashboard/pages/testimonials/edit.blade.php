@extends('dashboard.layout.layout')

@section('page-title', 'Edit Testimonial');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('testimonials.list.view') }}">Testimonials</a></li>
                            <li class="breadcrumb-item active">Edit Testimonial</li>
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
                                <h3 class="card-title">Edit Testimonial</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('testimonials.update', ['id' => $testimonial['id']]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="icon">Select icon</label>
                                        <div class="custom-file">
                                            <input name="icon" type="text"
                                                class="custom-file-input @error('icon') is-invalid  @enderror"
                                                id="icon"
                                                placeholder="Enter icon" value="{{ old('icon', $testimonial['icon']) }}">
                                            <label class="custom-file-label" for="icon">Choose icon</label>
                                        </div>
                                        @error('icon')
                                            <span id="exampleInputEmail1-error" class="error invalid-feedback"
                                                style="display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="discription">Discription</label>
                                        <textarea name="discription" class="form-control @error('discription') is-invalid  @enderror" id="discription"
                                            placeholder="Enter discription">{{ old('discription',$testimonial['discription']) }}</textarea>
                                        @error('discription')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input name="Name" type="text"
                                            class="form-control @error('Name') is-invalid  @enderror" id="Name"
                                            placeholder="Enter Name" value="{{ old('Name', $testimonial['Name']) }}">
                                        @error('Name')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <textarea name="position" class="form-control @error('position') is-invalid  @enderror" id="position"
                                            placeholder="Enter position">{{ old('position', $testimonial['position']) }}</textarea>
                                        @error('position')
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