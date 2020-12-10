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
        <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email</strong>
                            <textarea class="form-control" style="height:50px" name="email"
                                placeholder="description">{{$user->email}}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Password</strong>
                            <input type="text" name="password" class="form-control" placeholder=""
                            value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Confirm Password</strong>
                            <input type="text" name="" class="form-control" placeholder=""
                            value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

        </form>
</div>
@stop