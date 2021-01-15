@extends('layouts.master')
@section('title', 'Edit jadwal')
@section('content')
<head>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-folder"></i>

              <h3 class="box-title">Edit Jadwal</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
            <form action="/laboran/jadwal_ksm/{{ $ksm->id }}" method="post">
              @method('patch')
              @csrf
              <div class="form-group ">
              
              <label for="hari" > Hari </label>
              <select id="hari" name="hari" class="form-control">
              @foreach($hari as $h)
            
              <option value="{{$h->nama_hari}}"> {{$h->nama_hari}}
             
              @endforeach
              </select>
              </div>
     
              <div class="form-group">
              <label for="jam_mulai"> Jam Mulai</label>
              <input class="timepicker form-control" type="text" name="jam_mulai" >
              <script type="text/javascript">
              $('.timepicker').datetimepicker({
               format: 'HH:mm'
               }); 
              </script>  
              </div>
              <div class="form-group">
              <label for="jam_berakhir"> Jam Berakhir</label>
              <input class="timepicker form-control" type="text" name="jam_berakhir">
              <script type="text/javascript">
              $('.timepicker').datetimepicker({
               format: 'HH:mm'
               }); 
              </script>  
              </div>

            
           
            <div class="form-group">
              <label for="kelas"> Kelas </label>
              <select id="kelas" name="kelas" class="form-control">
              @foreach($kelas as $k)
              <option value="{{$k->kelas}}" > {{$k->kelas}}
              @endforeach
              </select>
              </div>
              <div class="form-group">
              <label for="ruang"> Ruang </label>
              <select id="kode_ruang" name="kode_ruang" class="form-control">
              @foreach($ruang as $r)
              <option value="{{$r->kode_ruang}}" > {{$r->kode_ruang}}
              @endforeach
              </select>
              </div>
              <div class="form-group">
              <label for="kode_mk"> Kode Mata kuliah </label>
              <select id="kode_mk" name="kode_mk" class="form-control">
              @foreach($matkul as $m)
              <option value="{{$m->kode_mk}}" > {{$m->kode_mk}}
              @endforeach
              </select>
              </div>
              <div class="form-group">
              <label for="nama_mk"> Nama Mata kuliah </label>
              <select id="nama_mk" name="nama_mk" class="form-control">
              @foreach($matkul as $m)
              <option value="{{$m->nama_mk}}" > {{$m->nama_mk}}
              @endforeach
              </select>
              </div>
              <div class="form-group">
              <label for="sks"> SKS </label>
              <select id="sks" name="sks" class="form-control">
              <option value="2" > 2
              <option value="3" > 3
              <option value="4" > 4
              
              </select>
              </div>
              <div class="form-group">
              <label for="semester"> Semester </label>
              <select id="semester" name="semester" class="form-control">
              <option value="Genap" > Genap
              <option value="Ganjil" > Ganjil
              </select>
              </div>
              <div class="form-group">
              <label for="tahun"> Tahun </label>
              <select id="tahun" name="tahun" class="form-control">
              <option value="2019 - 2020" > 2019 - 2020
              <option value="2020 - 2021" > 2020 - 2021
              </select>
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