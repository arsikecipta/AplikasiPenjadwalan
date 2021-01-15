@extends('layouts.master')
@section('title', 'Input Mata Kuliah')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-folder"></i>

              <h3 class="box-title">Input Mata Kuliah</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
            <form action="/laboran/matkul" method="POST">
              {{csrf_field()}}
                
                <div class="form-group">
                <label for="kode_mk"> Kode Mata Kuliah </label>
                  <input type="text" class="form-control" name="kode_mk" required>
                </div>
                <div class="form-group">
                <label for="nama_mk"> Nama Mata Kuliah  </label>
                  <input type="text" class="form-control" name="nama_mk"required>
                </div>
                <div class="form-group">
                <label for="sks"> SKS </label>
                  <input type="text" class="form-control" name="sks"required>
                </div>
                <div class="form-group">
                <label for="semester"> Semester  </label>
                  <input type="text" class="form-control" name="semester"required>
                </div>
                <div class="form-group">
                <label for="tahun"> Tahun  </label>
                  <input type="text" class="form-control" name="tahun"required>
                </div> 
                <div class="box-footer clearfix" >
                </div> 
              <button type="submit" class="pull-right btn btn-primary" id="sendEmail">Submit
                <i class="fa fa-arrow-circle-right"></i></button>
               </form>
                <a href="/laboran/matkul"><button type="submit" class="pull-left btn btn-light" id="sendEmail"><i class="fa fa-arrow-circle-left"></i>&nbspKembali
                </button></a>
               
                
            </div>
            
          </div>

        </section>
                </section>
    <!-- /.content -->
  </div>
@endsection