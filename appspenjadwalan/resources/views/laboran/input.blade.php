@extends('layouts.master')
@section('title', 'Input')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INPUT
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row"style="margin-left:100px; margin-right:100px;margin-top:150px;">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" >
            <div class="inner"style="height:100px;">
            <h2>INPUT HARI</h2>


           
            </div>
            <div class="icon">
            <i class="fa fa-calendar"></i>
            </div>
            <a href="{{ url ('laboran/hari') }}" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner"style="height:100px;">
              <h2>INPUT JAM</h2>

              
            </div>
            <div class="icon">
            <i class="fa fa-bell-o"></i>
            </div>
            <a href="{{ url ('laboran/jam') }}" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner"style="height:100px;">
            <h2>INPUT JADWAL</h2>

              
            </div>
            <div class="icon">
              <i class="fa fa-files-o"></i>
            </div>
            <a href="{{ url ('laboran/input_jadwal') }}" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner"style="height:100px;">
              <h2>INPUT KELAS</h2>

              
            </div>
            <div class="icon">
            <i class="fa fa-folder"></i>
            </div>
            <a href="{{ url ('laboran/kelas') }}" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner"style="height:100px;">
              <h2>INPUT RUANG</h2>

              
            </div>
            <div class="icon">
            <i class="fa fa-folder"></i>
            </div>
            <a href="{{ url ('laboran/ruang') }}" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner"style="height:100px;">
              <h2>INPUT MATKUL</h2>

              
            </div>
            <div class="icon">
            <i class="fa fa-folder"></i>
            </div>
            <a href="{{ url ('laboran/matkul') }}" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
        <!-- ./col -->
      </div>
      
      <!-- /.row -->
      <!-- Main row -->
      
    </section>
    <!-- /.content -->
  </div>
@endsection