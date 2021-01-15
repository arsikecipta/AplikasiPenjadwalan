@extends('layouts.master')
@section('title', 'Input Generate')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Input Generate</h3>
              
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <form action="/laboran/input_generate_jadwal/submit" method="GET">
              {{csrf_field()}}
              
                <div class="form-group">
                <label for="semester"> Semester </label>
                <select id="semester" name="semester" class="form-control">
                <option value="Genap" > Genap
                <option value="Ganjil" > Ganjil
                </select>
                </div>
                <div class="form-group">
                <label for="th_akademik"> Tahun Akademik </label>
                <select id="th_akademik" name="th_akademik" class="form-control">
                <option value="2019-2020" > 2019 - 2020
                <option value="2020-2021" > 2020 - 2021
                </select>
                </div>
                <div class="form-group">
                <label for="kromosom"> Jumlah Kromosom</label>
                  <input type="text" class="form-control" name="kromosom"  id="kromosom"required>
                </div>
                <div class="form-group">
                <label for="crossover"> Probabilitas CrossOver </label>
                  <input type="text" class="form-control" name="crossover" id="crossover" required>
                </div>
                <div class="form-group">
                <label for="mutasi"> Probabilitas Mutasi</label>
                  <input type="text" class="form-control" name="mutasi" id="mutasi"required>
                </div>
                <div class="form-group">
                <label for="generasi"> Jumlah Generasi </label>
                  <input type="text" class="form-control" name="generasi" id="generasi" required>
                </div>
                
                <div class="box-footer clearfix" >
                </div> 
                <button type="submit" class="pull-right btn btn-primary" id="sendEmail">Proses
                <i class="fa fa-arrow-circle-right"></i></button>
               </form>
                <a href="/laboran/input"><button type="submit" class="pull-left btn btn-light" id="sendEmail"><i class="fa fa-arrow-circle-left"></i>&nbspKembali
              </a>
            </div>
           
          </div>
             
    </section>
    <!-- /.content -->
  </div>
@endsection