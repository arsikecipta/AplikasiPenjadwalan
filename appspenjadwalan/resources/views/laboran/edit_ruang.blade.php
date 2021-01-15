@extends('layouts.master')
@section('title', 'Edit Ruang')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-pencil"></i>

              <h3 class="box-title">Edit Ruang</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="/laboran/ruang/{{ $ruang->id }}" method="post">
              @method('patch')
              @csrf
                <div class="form-group">
                <label for="kode_ruang"> Kode Ruang </label>
                  <input type="text" class="form-control" name="kode_ruang" value="{{ $ruang->kode_ruang }}" required>
                </div>
                <div class="form-group">
                <label for="nama_gedung">  </label>
                  <input type="text" class="form-control" name="nama_gedung" value="{{ $ruang->nama_gedung }}" required>
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