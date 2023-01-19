@extends('dashboard.layout.layout')

@section('page-title', 'plan')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>plan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">plan</li>
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
                                <a href="{{ route('plans.create.view') }}" class="btn btn-dark"><i class="bi bi-person-plus-fill"> Add New</i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" style="width: 80%">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                           
                                            <th>title</th>
                                            <th>price</th>
                                            <th>checked</th>
                                            <th>hidden</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plans as $plan )
                                            
                                         <tr>
                                            
                                           <td>{{ $plan->plan_id }}</td>
                                           <td>{{ $plan->title }}</td>
                                           <td>{{ $plan->price }}</td>
                                            <td>{{ $plan->checked }}</td>
                                            <td>{{ $plan->hidden }}</td>

                                           <td>
                                            <a href="{{ route('plans.edit.view', ['id' => $plan->plan_id]) }}"
                                                class="btn btn-outline-warning btn-xs"><i class="bi bi-person-dash-fill"></i></a>
                                             <br />
                                            <form action="{{ route('plans.delete', ['id' => $plan->plan_id]) }}" method="POST">
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