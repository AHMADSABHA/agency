@extends('dashboard.layout.layout')

@section('page-title', 'team')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>team</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">team</li>
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
                                <a href="{{ route('teams.create.view') }}" class="btn btn-dark"><i class="bi bi-person-plus-fill"> Add New</i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" style="width:60%">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                          
                                            <th>image</th>
                                            <th>name</th>
                                            <th>position</th>
                                            <th>discription</th>
                                            <th>youtube</th>
                                            {{-- <th>facebook</th>
                                            <th>twitter</th>
                                            <th>dribbble</th> --}}
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teams as $team )
                                         
                                              
                                          
                                         <tr>
                                         
                                           <td>{{ $team->team_det_id }}</td>
                                           <td>{{ $team->image }}</td>
                                           <td>{{ $team->name }}</td>
                                            <td>{{ $team->position }}</td>
                                            <td>{{ $team->discription }}</td>
                                            <td>{{ $team->youtube }}</td>
                                            {{-- <td>{{ $team->facebook }}</td>
                                            <td>{{ $team->twitter }}</td>
                                            <td>{{ $team->dribbble }}</td> --}}

                                           <td>
                                            <a href="{{ route('teams.edit.view', ['id' => $team->id]) }}"
                                                class="btn btn-outline-warning btn-xs"><i class="bi bi-person-dash-fill"></i></a>
                                             <br />
                                            <form action="{{ route('teams.delete', ['id' => $team->id]) }}" method="POST">
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