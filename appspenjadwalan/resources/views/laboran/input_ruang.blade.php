@extends('layouts.master')
@section('title', 'Input ruang')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-folder"></i>

              <h3 class="box-title">Input Ruang</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
            <form action="/laboran/ruang" method="POST">
              {{csrf_field()}}
                
                <div class="form-group">
                <label for="kode_ruang"> Kode Ruang </label>
                  <input type="text" class="form-control" name="kode_ruang" required>
                </div>
                <div class="form-group">
                <label for="nama_gedung"> Nama gedung  </label>
                  <input type="text" class="form-control" name="nama_gedung"required>
                </div> 
                <div class="box-footer clearfix" >
                </div> 
              <button type="submit" class="pull-right btn btn-primary" id="sendEmail">Submit
                <i class="fa fa-arrow-circle-right"></i></button>
               </form>
                <a href="/laboran/ruang"><button type="submit" class="pull-left btn btn-light" id="sendEmail"><i class="fa fa-arrow-circle-left"></i>&nbspKembali
                </button></a>
               
                
            </div>
            
          </div>

        </section>
                </section>
    <!-- /.content -->
  </div>
@endsection