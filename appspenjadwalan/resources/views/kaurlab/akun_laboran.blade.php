@extends('layouts.master')
@section('title', 'Akun Laboran')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-folder"></i>

              <h3 class="box-title">Akun Laboran</h3>
              <!-- tools box -->
              @if(session('sukses'))
<div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{session('sukses')}}
</div>
@endif   
              <!-- /. tools -->
            </div>
            <div class="box-body">
            <form action="/kaurlab/akun_laboran" method="POST">
              {{csrf_field()}}
                <div class="form-group">
                <label for="email"> Email </label>
                  <input type="email" class="form-control" name="email"required>
                </div>
                <!-- <div class="form-group">
                <label for="nama_lengkap"> Nama Lengkap </label>
                  <input type="text" class="form-control" name="nama_lengkap" required>
                </div> -->
                <div class="form-group">
                <label for="username"> Username </label>
                  <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                <label for="password"> Password </label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-primary" id="sendEmail">Submit
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
              </form>
            </div>
           
          </div>

        </section>
                </section>
    <!-- /.content -->
  </div>
@endsection