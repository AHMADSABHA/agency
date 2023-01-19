@extends('dashboard.layout.layout')

@section('page-title', 'project')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>project</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">project</li>
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
                                <a href="{{ route('projects.create.view') }}" class="btn btn-dark"><i class="bi bi-person-plus-fill"> Add New</i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" style=" width: 80%" >
                                    <thead>
                                       
                                        <tr>
                                            
                                            <th style="width: 10px">#</th>
                                            <th style="width:50px">cover_image</th>
                                            <th>title</th>
                                            <th>subtitle</th>
                                            {{-- <th>client</th>
                                            <th>location</th>
                                            <th >project_url</th> --}}
                                            {{-- <th style="display:none">description</th>
                                            <th style="display:none">title2</th>
                                            <th style="display:none">description2</th> --}}
                                            {{-- <th  style="width:10%">image</th> --}}
                                            <th>project_date</th>
                                            {{-- <th style="display: none">title3</th>
                                            <th style="display: none">disc3</th> --}}
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project )
                                            
                                         <tr>
                                           
                                           <td style="width: 10px">{{ $project->project_id }}</td>
                                           {{-- <td style="width:50px">{{ $project->cover_image }}</td> --}}
                                           <td>{{ $project->title }}</td>
                                           <td>{{ $project->subtitle }}</td>
                                           {{-- <td>{{ $project->client }}</td>
                                           <td>{{ $project->location }}</td>
                                           <td >{{ $project->project_url }}</td> --}}
                                           {{-- <td style="display:none">{{ $project->description }}</td>
                                           <td style="display:none" >{{ $project->title2 }}</td>
                                           <td style="display:none">{{ $project->description2 }}</td> --}}
                                           <td style="width:10%">{{ $project->image }}</td>
                                           <td>{{ $project->project_date }}</td>
                                            {{-- <td style="display: none">{{ $project->title3 }}</td>
                                            <td style="display: none">{{ $project->disc3 }}</td> --}}

                                           <td>
                                            <a href="{{ route('projects.edit.view', ['id' => $project->project_id]) }}"
                                                class="btn btn-outline-warning btn-xs"><i class="bi bi-person-dash-fill"></i></a>
                                             <br />
                                            <form action="{{ route('projects.delete', ['id' => $project->project_id]) }}" method="POST">
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