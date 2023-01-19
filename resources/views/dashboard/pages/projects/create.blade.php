@extends('dashboard.layout.layout')

@section('page-title', 'Create project');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create project</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('projects.list.view') }}">projects</a></li>
                            <li class="breadcrumb-item active">Create project</li>
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
                                <h3 class="card-title">Create project</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="project_id">project_id</label>
                                        <input name="project_id" type="number"
                                            class="form-control @error('project_id') is-invalid  @enderror" id="project_id"
                                            placeholder="Enter project_id" value="{{ old('project_id') }}">
                                        @error('project_id')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="cover_image">Select cover_image</label>
                                        <div class="custom-file">
                                            <input name="cover_image" type="file"
                                                class="custom-file-input @error('cover_image') is-invalid  @enderror"
                                                id="cover_image"
                                                placeholder="Enter cover_image" value="{{ old('cover_image') }}">
                                            <label class="custom-file-label" for="cover_image">Choose cover_image</label>
                                        </div>
                                        @error('cover_image')
                                            <span id="exampleInputEmail1-error" class="error invalid-feedback"
                                                style="display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input name="title" type="text"
                                            class="form-control @error('title') is-invalid  @enderror" id="title"
                                            placeholder="Enter title" value="{{ old('title') }}">
                                        @error('title')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle">Subtitle</label>
                                        <input name="subtitle" type="text"
                                            class="form-control @error('subtitle') is-invalid  @enderror" id="subtitle"
                                            placeholder="Enter subtitle" value="{{ old('subtitle') }}">
                                        @error('subtitle')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="client">client</label>
                                        <textarea name="client" class="form-control @error('client') is-invalid  @enderror" id="client"
                                            placeholder="Enter client">{{ old('client') }}</textarea>
                                        @error('client')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input name="location" type="text"
                                            class="form-control @error('location') is-invalid  @enderror" id="location"
                                            placeholder="Enter location" value="{{ old('location') }}">
                                        @error('location')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="project_url">project_url</label>
                                        <textarea name="project_url" class="form-control @error('project_url') is-invalid  @enderror" id="project_url"
                                            placeholder="Enter project_url">{{ old('project_url') }}</textarea>
                                        @error('project_url')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid  @enderror" id="description"
                                            placeholder="Enter description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title2">title2</label>
                                        <input name="title2" type="text"
                                            class="form-control @error('title2') is-invalid  @enderror" id="title2"
                                            placeholder="Enter title2" value="{{ old('title2') }}">
                                        @error('title2')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="description2">description2</label>
                                        <textarea name="description2" class="form-control @error('description2') is-invalid  @enderror" id="description2"
                                            placeholder="Enter description2">{{ old('description2') }}</textarea>
                                        @error('description2')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Select image</label>
                                        <div class="custom-file">
                                            <input name="image" type="file"
                                                class="custom-file-input @error('image') is-invalid  @enderror"
                                                id="image"
                                                placeholder="Enter image" value="{{ old('image') }}">
                                            <label class="custom-file-label" for="image">Choose image</label>
                                        </div>
                                        @error('image')
                                            <span id="exampleInputEmail1-error" class="error invalid-feedback"
                                                style="display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="project_date">Project Date</label>
                                        <input name="project_date" type="date"
                                            class="form-control @error('project_date') is-invalid  @enderror"
                                            id="project_date" placeholder="Enter project_date"
                                            value="{{ old('project_date') }}">
                                        @error('project_date')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="title3">title3</label>
                                        <input name="title3" type="text"
                                            class="form-control @error('title3') is-invalid  @enderror" id="title3"
                                            placeholder="Enter title3" value="{{ old('title3') }}">
                                        @error('title3')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="disc3">disc3</label>
                                        <textarea name="disc3" class="form-control @error('disc3') is-invalid  @enderror" id="disc3"
                                            placeholder="Enter disc3">{{ old('disc3') }}</textarea>
                                        @error('disc3')
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