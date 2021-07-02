@extends('layouts.master')
@section('title', 'View')
@section('content')
        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">View</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Employee</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
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
        <div class="card-header">
          <h3 class="card-title">View </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <a href="{{url('employee')}}" title="Go Back"><button type="button" class="btn btn-default" >
                <i class="fa fa-arrow-left"></i>Back
              </button></a>
          </div>
        </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Employee Id</label>
                  <input type="text" name="employee_id" value="{{$viewEmployee->employee_id}}" placeholder="Employee Id" class="form-control" readonly>

                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" value="{{$viewEmployee->name}}" placeholder="Name" class="form-control" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Designation</label>
                  <input type="text" name="designation" value="{{$viewEmployee->designation}}" placeholder="Designation" class="form-control" readonly>
                </div>
              </div>

              <!-- /.col -->
            </div>
            <!-- /.row -->

          </div>
          <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <!-- /.content -->
</div>
@endsection