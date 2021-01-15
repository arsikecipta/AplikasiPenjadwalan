@extends('layouts.master')
@section('title', 'Edit Mata Kuliah')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-pencil"></i>

              <h3 class="box-title">Edit Mata Kuliah</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="/laboran/matkul/{{ $matkul->id }}" method="post">
              @method('patch')
              @csrf
                <div class="form-group">
                <label for="kode_mk"> Kode Mata Kuliah </label>
                  <input type="text" class="form-control" name="kode_mk" value="{{ $matkul->kode_mk }}" required>
                </div>
                <div class="form-group">
                <label for="nama_mk"> Nama Mata Kuliah  </label>
                  <input type="text" class="form-control" name="nama_mk" value="{{ $matkul->nama_mk }}" required>
                </div>
                <div class="form-group">
                <label for="sks">  SKS</label>
                  <input type="text" class="form-control" name="sks" value="{{ $matkul->sks }}" required>
                </div>
                <div class="form-group">
                <label for="semester"> Semester </label>
                  <input type="text" class="form-control" name="semester" value="{{ $matkul->semester }}" required>
                </div>
                <div class="form-group">
                <label for="tahun"> Tahun </label>
                  <input type="text" class="form-control" name="tahun" value="{{ $matkul->tahun }}" required>
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