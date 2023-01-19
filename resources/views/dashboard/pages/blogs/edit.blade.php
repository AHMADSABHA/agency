@extends('dashboard.layout.layout')

@section('page-title', 'edit blog');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('blogs.list.view') }}">blogs</a></li>
                            <li class="breadcrumb-item active">Create blog</li>
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
                                <h3 class="card-title">edit blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('blogs.update', ['id' => $blog['blog_id']]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="blog_id">blog_id</label>
                                        <input name="blog_id" type="number"
                                            class="form-control @error('blog_id') is-invalid  @enderror" id="blog_id"
                                            placeholder="Enter blog_id" value="{{ old('blog_id', $blog['blog_id']) }}">
                                        @error('blog_id')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="image">Select Image</label>
                                        <div class="custom-file">
                                            <input name="image" type="text"
                                                class="custom-file-input @error('image') is-invalid  @enderror"
                                                id="image"
                                                placeholder="Enter image" value="{{ old('image', $blog['image']) }}">
                                            <label class="custom-file-label" for="image">Choose Image</label>
                                        </div>
                                        @error('image')
                                            <span id="exampleInputEmail1-error" class="error invalid-feedback"
                                                style="display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tag">Tag</label>
                                        <input name="tag" type="text"
                                            class="form-control @error('tag') is-invalid  @enderror" id="tag"
                                            placeholder="Enter tag" value="{{ old('tag', $blog['tag']) }}">
                                        @error('tag')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="date_blog">Project Date</label>
                                        <input name="date_blog" type="date"
                                            class="form-control @error('date_blog') is-invalid  @enderror"
                                            id="date_blog" placeholder="Enter date_blog"
                                            value="{{ old('date_blog', $blog['date_blog']) }}">
                                        @error('date_blog')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input name="title" type="text"
                                            class="form-control @error('title') is-invalid  @enderror" id="title"
                                            placeholder="Enter title" value="{{ old('title', $blog['title']) }}">
                                        @error('title')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="disc">Discription</label>
                                        <textarea name="disc" class="form-control @error('disc') is-invalid  @enderror" id="disc"
                                            placeholder="Enter disc">{{ old('disc', $blog['disc']) }}</textarea>
                                        @error('disc')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_image">Select sub_image</label>
                                        <div class="custom-file">
                                            <input name="sub_image" type="text"
                                                class="custom-file-input @error('sub_image') is-invalid  @enderror"
                                                id="sub_image"
                                                placeholder="Enter sub_image" value="{{ old('sub_image', $blog['sub_image']) }}">
                                            <label class="custom-file-label" for="sub_image">Choose sub_image</label>
                                        </div>
                                        @error('sub_image')
                                            <span id="exampleInputEmail1-error" class="error invalid-feedback"
                                                style="display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title2">Title2</label>
                                        <input name="title2" type="text"
                                            class="form-control @error('title2') is-invalid  @enderror" id="title2"
                                            placeholder="Enter title2" value="{{ old('title2', $blog['title2']) }}">
                                        @error('title2')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="disc2">Discription2</label>
                                        <textarea name="disc2" class="form-control @error('disc2') is-invalid  @enderror" id="disc2"
                                            placeholder="Enter disc2">{{ old('disc2', $blog['disc2']) }}</textarea>
                                        @error('disc2')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="list">list</label>
                                        <textarea name="list" class="form-control @error('list') is-invalid  @enderror" id="list"
                                            placeholder="Enter list">{{ old('list', $blog['list']) }}</textarea>
                                        @error('list')
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