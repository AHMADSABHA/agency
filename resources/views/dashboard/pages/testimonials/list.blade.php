@extends('dashboard.layout.layout')

@section('page-title', 'Testimonial')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('testimonials.create.view') }}" class="btn btn-outline-dark"><i class="bi bi-person-plus-fill"> Add New</i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" style="width:95%">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>icon</th>
                                            <th>description</th>
                                            <th>Name</th>
                                            <th>position</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $testimonail )
                                            
                                         <tr>
                                            <td>{{ $testimonail->id }}.</td>
                                           <td>{{ $testimonail->icon }}</td>
                                           <td>{{ $testimonail->discription }}</td>
                                           <td>{{ $testimonail->Name }}</td>
                                            <td>{{ $testimonail->position }}</td>

                                           <td>
                                            <a href="{{ route('testimonials.edit.view', ['id' => $testimonail->id]) }}"
                                                class="btn btn-outline-warning btn-xs " > <i class="bi bi-person-dash-fill"></i></a>
                                             <br />
                                            <form action="{{ route('testimonials.delete', ['id' => $testimonail->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-xs"><i class="bi bi-person-x-fill"></i></button>
                                            </form>
                                          </td>
                                         </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {{    $testimonials->links('pagination::bootstrap-4') }} 
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection