@extends('dashboard.layout.layout')

@section('page-title', 'Edit plan');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit plan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('plans.list.view') }}">plans</a></li>
                            <li class="breadcrumb-item active">Edit plan</li>
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
                                <h3 class="card-title">Edit plan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('plans.update', ['id' => $plan['plan_id']]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                    {{-- <div class="form-group">
                                        <label for="plan_id">plan_id</label>
                                        <input plan_id="plan_id" type="number"
                                            class="form-control @error('plan_id') is-invalid  @enderror" id="plan_id"
                                            placeholder="Enter plan_id" value="{{ old('plan_id', $plan['plan_id']) }}">
                                        @error('plan_id')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div> --}}
                                    <div class="form-group">
                                        <label for="title">title</label>
                                        <textarea name="title" class="form-control @error('title') is-invalid  @enderror" id="title"
                                            placeholder="Enter title">{{ old('title', $plan['title']) }}</textarea>
                                        @error('title')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">price</label>
                                        <input name="price" type="text"
                                            class="form-control @error('price') is-invalid  @enderror" id="price"
                                            placeholder="Enter price" value="{{ old('price', $plan['price']) }}">
                                        @error('price')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="checked">checked</label>
                                        <textarea name="checked" class="form-control @error('checked') is-invalid  @enderror" id="checked"
                                            placeholder="Enter checked">{{ old('checked', $plan['checked']) }}</textarea>
                                        @error('checked')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="hidden">hidden</label>
                                        <textarea name="hidden" class="form-control @error('hidden') is-invalid  @enderror" id="hidden"
                                            placeholder="Enter hidden">{{ old('hidden', $plan['hidden']) }}</textarea>
                                        @error('hidden')
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