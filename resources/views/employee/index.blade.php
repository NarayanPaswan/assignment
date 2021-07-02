@extends('layouts.master')
@section('title', 'Employee')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<?php //dd($users);?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    Employee</h3>
                	<div class="card-tools"><a href="{{ url('add_employee')}}"><button type="button" class="btn btn-block btn-primary btn-flat"><i class="fas fa-plus"></i> Add New</button></a></div>
               

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 @if( session('success'))
     <div class="alert alert-success pt10 pb10 mt10 mb10">
        {{ session('success') }}
     </div>
    @endif
    @if( session('error'))
     <div class="alert alert-danger mt10 mb10  pt10 pb10">
        {{ session('error') }}
     </div>
    @endif
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>Sl No</th>
                      <th>Employee Id</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th >Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($employees as $employee)
                  <tr >
                      <td>{{ $loop->index + 1 }}</td>
                    <td>{{$employee->employee_id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->designation}}</td>
                    <td>
                      <a href="{{url('view_employee/')}}/{{$employee->id}}" class="btn btn-primary btn-xs" style="display: inline-block;">
                     View
                    </a>
                      <a href="{{url('edit_employee/')}}/{{$employee->id}}" class="btn btn-info btn-xs" style="display: inline-block;">
                     Edit
                    </a>
                        <a title="Delete Comment" href="delete_employee/{{$employee->id}}" onclick="return ConfirmDelete()" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span>
                            <i class="fa fa-trash"></i>
                        </a>

                      </td>

                  </tr>
                  @endforeach
                 
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>

<script>


    //    delete commande
    function ConfirmDelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
        $(".alert").slideUp(500);
    });
</script>

@endsection