@extends('dashboard.layout.layout')

@section('page-title', 'new admin Profile');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile Information</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                                <h3 class="card-title">new Profile </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('new-profile.action') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid  @enderror" id="name"
                                            placeholder="Enter name" value="">

                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input name="email" type="text"
                                            class="form-control @error('email') is-invalid  @enderror" id="email"
                                            placeholder="Enter email" value="">

                                    </div>
                                    <div class="form-group">
                                        <label for="password">New password</label>
                                        <input name="password" type="text"
                                            class="form-control @error('password') is-invalid  @enderror"
                                            id="password" placeholder="Enter new_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="repeat_password">Retype password</label>
                                        <input name="repeat_password" type="text"
                                            class="form-control @error('repeat_password') is-invalid  @enderror"
                                            id="repeat_password" placeholder="Enter repeat_password">
                                    </div>
                                    <div class="form-group" style="width:5%">
                                        <label for="is_super_admin">is_super_admin</label>
                                        <input name="is_super_admin" type="radio"
                                            class="form-control @error('is_super_admin') is-invalid  @enderror"
                                            id="is_super_admin" value="1" >yes
                                            <input name="is_super_admin" type="radio"
                                            class="form-control @error('is_super_admin') is-invalid  @enderror"
                                            id="is_super_admin" value="0" >NO
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
