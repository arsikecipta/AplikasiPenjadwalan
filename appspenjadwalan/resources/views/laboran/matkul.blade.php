@extends('layouts.master')
@section('title', 'Matakuliah')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Mata Kuliah</h3>
              <div class="box-footer clearfix no-border">
              <a href="/laboran/input_matkul" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Mata Kuliah</a>
            </div>
            @if(session('sukses'))
<div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{session('sukses')}}
</div>
@endif
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <table class="table table-striped table-bordered table-hover" id="dataTable">
  <thead>
  <tr style="text-align:center;" >
      <th scope="col">No.</th>
      <!-- <th scope="col">Kode Jam</th> -->
      <th width="250px" scope="col">Kode Mata kuliah</th>
      <th scope="col" >Nama Mata kuliah</th>
      <th scope="col" >SKS</th>
      <th scope="col" >Semester</th>
      <th scope="col" >Tahun</th>
      <th scope="col" colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($matkul as $m)
 
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
       
      <td>{{$m->kode_mk}}</td>
      <td>{{$m->nama_mk}}</td>
      <td>{{$m->sks}}</td>
      <td>{{$m->semester}}</td>
      <td>{{$m->tahun}}</td>
      <td> <a  href="/laboran/matkul/{{ $m->id }}/edit_matkul" type="button" class="btn btn-primary">Edit</a> </td>
     <td>
     <form action="matkul/{{ $m->id }}" method="post"> 
     @method('delete')
     @csrf
     <button type="submit" class="btn btn-danger">Delete</button>
     </form> 
      </td>
    </tr>
@endforeach
    
  </tbody>
</table>
            </div>
            <!-- /.box-body -->
            <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
        
                </ul>
              </div>
            </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection