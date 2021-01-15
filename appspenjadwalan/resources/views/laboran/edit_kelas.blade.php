@extends('layouts.master')
@section('title', 'Edit Kelas')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-pencil"></i>

              <h3 class="box-title">Edit Kelas</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="/laboran/kelas/{{ $kelas->id }}" method="post">
              @method('patch')
              @csrf
                <div class="form-group">
                <label for="kelas"> Kelas </label>
                  <input type="text" class="form-control" name="kelas" value="{{ $kelas->kelas }}" required>
                </div>
                <div class="form-group">
                <label for="angkatan"> Angkatan </label>
                  <input type="text" class="form-control" name="angkatan" value="{{ $kelas->angkatan }}" required>
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