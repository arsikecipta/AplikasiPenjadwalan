@extends('layouts.master')
@section('title', 'Edit Profile')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-pencil"></i>

              <h3 class="box-title">Edit Profile</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                <label for="email"> Email </label>
                  <input type="email" class="form-control" name="email"required>
                </div>
                <div class="form-group">
                <label for="nama_lengkap"> Nama Lengkap </label>
                  <input type="text" class="form-control" name="nama_lengkap" required>
                </div>
                <div class="form-group">
                <label for="username"> Username </label>
                  <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                <label for="password"> Password </label>
                  <input type="password" class="form-control" name="password" required>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-primary" id="sendEmail">Submit
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>

        </section>
                </section>
    <!-- /.content -->
  </div>
@endsection