@extends('layouts.adminlte')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Existing Users</h3>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }} </td>
                  <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                  <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">  
                      @csrf
                      @method('DELETE')
                        <button type="submit" title="delete">
                        </button>
                    </form>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
            <!-- /.box-header -->
            <!-- form start -->
            
          </div>
          <!-- /.box -->

          
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @stop