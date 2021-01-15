@extends('layouts.master')
@section('title', 'Edit Hari')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-pencil"></i>

              <h3 class="box-title">Edit Hari</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="/laboran/hari/{{ $hari->id }}" method="post">
              @method('patch')
              @csrf
               
                <div class="form-group">
                <label for="nama_hari"> Nama Hari </label>
                  <input type="text" class="form-control" name="nama_hari" value="{{ $hari->nama_hari }}" required>
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