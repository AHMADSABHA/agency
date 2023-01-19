@extends('dashboard.layout.layout')

@section('page-title', 'blog')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">blog</li>
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
                                <a href="{{ route('blogs.create.view') }}" class="btn btn-dark"><i class="bi bi-person-plus-fill"> Add New</i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" style="width: 70%">
                                    <thead>
                                        <tr>
                                           
                                            <th style="width: 10px">#</th>
                                            {{-- <th style="width:20px">image</th> --}}
                                            {{-- <th>tag</th> --}}
                                            {{-- <th>date_blog</th> --}}
                                            {{-- <th>title</th> --}}
                                            {{-- <th>disc</th> --}}
                                            <th style="width:20px">sub_image</th>
                                            {{-- <th>title2</th> --}}
                                            {{-- <th>disc2</th> --}}
                                            <th>list</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog )
                                            
                                         <tr>
                                            {{-- <td>{{ $blog->id }}.</td> --}}
                                           <td>{{ $blog->blog_id }}</td>
                                           {{-- <td style="width:20px">{{ $blog->image }}</td> --}}
                                           {{-- <td>{{ $blog->tag }}</td> --}}
                                            {{-- <td>{{ $blog->date_blog }}</td> --}}
                                            {{-- <td>{{ $blog->title }}</td> --}}
                                            {{-- <td>{{ $blog->disc }}</td> --}}
                                            <td style="width:20px">{{ $blog->sub_image }}</td>
                                            {{-- <td>{{ $blog->title2 }}</td> --}}
                                            {{-- <td>{{ $blog->disc2 }}</td> --}}
                                            <td style="width:20px">{{ $blog->list }}</td>

                                           <td>
                                            <a href="{{ route('blogs.edit.view', ['id'=>$blog->blog_id]) }}"
                                                class="btn btn-outline-warning btn-xs"><i class="bi bi-person-dash-fill"></i></a>
                                             <br />
                                            <form action="{{ route('blogs.delete', ['id'=>$blog->blog_id]) }}" method="POST">
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
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
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