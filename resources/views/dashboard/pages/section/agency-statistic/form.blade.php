@extends('dashboard.layout.layout')

@section('page-title', 'Agency Statistic Section');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Agency Statistic Action</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sections</li>
                            <li class="breadcrumb-item active">Agency Statistic Action</li>
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
                                <h3 class="card-title">Agency Statistic Section</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('section.agencystatistic.action') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="number">Number</label>
                                        <input name="number" type="text"
                                            class="form-control @error('number') is-invalid  @enderror" id="number"
                                            placeholder="Enter number" value="{{ old('number', $sectionData['number']) }}">
                                        @error('number')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="extinsion">extinsion</label>
                                        <input name="extinsion" type="text"
                                            class="form-control @error('extinsion') is-invalid  @enderror" id="extinsion"
                                            placeholder="Enter extinsion" value="{{ old('extinsion', $sectionData['extinsion']) }}">
                                        @error('extinsion')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="type">Type</label>
                                        <input name="type" type="text"
                                            class="form-control @error('type') is-invalid  @enderror" id="type"
                                            placeholder="Enter type" value="{{ old('type', $sectionData['type']) }}">
                                        @error('type')
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