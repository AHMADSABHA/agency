@extends('dashboard.layout.layout')

@section('page-title', 'Working Module Section');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Working Module Action</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sections</li>
                            <li class="breadcrumb-item active">Working Module Action</li>
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
                                <h3 class="card-title">Working Module Section</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('section.workmodule.action') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="icon">Icon</label>
                                        <input name="icon" type="file"
                                            class="form-control @error('icon') is-invalid  @enderror" id="icon"
                                            placeholder="Enter icon" value="{{ old('icon') }}">
                                        @error('icon')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="step">Step</label>
                                        <input name="step" type="text"
                                            class="form-control @error('step') is-invalid  @enderror" id="step"
                                            placeholder="Enter step" value="{{ old('step', $sectionData['step']) }}">
                                        @error('step')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input name="title" type="text"
                                            class="form-control @error('title') is-invalid  @enderror" id="title"
                                            placeholder="Enter title" value="{{ old('title', $sectionData['title']) }}">
                                        @error('title')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle">Subtitle</label>
                                        <input name="subtitle" type="text"
                                            class="form-control @error('subtitle') is-invalid  @enderror" id="subtitle"
                                            placeholder="Enter subtitle" value="{{ old('subtitle', $sectionData['subtitle']) }}">
                                        @error('subtitle')
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