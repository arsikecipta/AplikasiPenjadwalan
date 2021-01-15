@extends('layouts.master')
@section('title', 'Input Pengampu')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-folder"></i>
            
              <h3 class="box-title" >Input Pengampu</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            
            <div class="box-body">
              <form action="/laboran/pengampu" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <label for="semester"> Semester </label>
                <select id="semester" name="semester" class="form-control">
                <option value="Genap" > Genap
                <option value="Ganjil" > Ganjil
                </select>
                </div>
                <div class="form-group">
                <label for="matkul"> Matakuliah  </label>
                  <input type="text" class="form-control" name="matkul" required>
                </div>
                <div class="form-group">
                <label for="semester"> Semester </label>
                <select id="semester" name="semester" class="form-control">
                <option value="SI-41-01" > SI-41-01
                <option value="SI-41-02" > SI-41-02
                <option value="SI-41-03" > SI-41-03
                <option value="SI-41-04" > SI-41-04
                <option value="SI-41-05" > SI-41-05
                <option value="SI-41-06" > SI-41-06
                <option value="SI-41-07" > SI-41-07
                <option value="SI-41-08" > SI-41-08
                <option value="SI-41-INT" > SI-41-INT
                </select>
                </div>
                <div class="form-group">
                <label for="semester"> Semester </label>
                <select id="semester" name="semester" class="form-control">
                <option value="2019-2020" > 2019 - 2020
                <option value="2020-2021" > 2020 - 2021
                </select>
                </div>
                <div class="box-footer clearfix" >
                </div> 
                <button type="submit" class="pull-right btn btn-primary" id="sendEmail">Submit
                <i class="fa fa-arrow-circle-right"></i></button>
               </form>
                <a href="/laboran/hari"><button type="submit" class="pull-left btn btn-light" id="sendEmail"><i class="fa fa-arrow-circle-left"></i>&nbspKembali
              </a>
            </div>
           
          </div>

        </section>
                </section>
    <!-- /.content -->
  </div>
@endsection