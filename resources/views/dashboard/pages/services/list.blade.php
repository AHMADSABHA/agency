@extends('dashboard.layout.layout')

@section('page-title', 'Services')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
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
                        <div class="container-fluid  " style="background-color: white">
                            <div class="row">
                                <div class="col-lg-4">
                                    <center><i class='fas fa-search' style='font-size:16px'></i></center>
                                </div>
                              <div class="col-lg-8" > 
                                    <input class="form-control" id="myInput"  type="text" placeholder="Type here to search" style=" width:60% ">
                                </div>
                            </div>
                           
                           
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('services.create.view') }}" class="btn btn-dark"><i class="bi bi-person-plus-fill"> Add New</i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" style="width: 85%"  >
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>icon</th>
                                            <th>title</th>
                                            <th>list</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable" >
                                        @foreach ($services as $item ) 
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->icon }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->list }}</td>
                                            <td>
                                                <a href="{{ route('services.edit.view', ['id' => $item->id]) }}"
                                                    class="btn btn-outline-warning btn-xs "><i class="bi bi-person-dash-fill"></i></a>
                                                <br />
                                                <form action="{{ route('services.delete', ['id' => $item->id]) }}" method="POST" class="delete"   >
                                                    @csrf
                                                    @method('DELETE')
                                                   
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-xs "><i class="bi bi-person-x-fill"></i></button>
                                                                                              
                                                        

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
                                    {{ $services->links('pagination::bootstrap-4') }} 
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
@section('js')
@if (session('done')=='ok')
<script>
Swal.fire(
    'Deleted!',
    'Your service has been deleted.',
    'success'
  )
</script>
@endif
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
                                                   
    $('.delete').submit(function(e){
        e.preventDefault();
        Swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to revert this!",
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it! '
   }).then((result) => {
     if (result.value) {
      this.submit();
     }
   });
});
</script> 
<script type="text/javascript" >
    $(document).ready
</script> 

    <script type="text/javascript">
    $(document).ready(function(){
        $("#myInput").on("keyup",function(){
var value= $(this).val().toLowerCase();
$("#myTable tr").filter(function(){
$(this).toggle($(this).text().toLowerCase().indexOf(
    value
)>-1);
});
        });
    });
    </script>
@endsection 