@extends('layouts.master')
@section('title', 'Hari')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Hari</h3>
              <div class="box-footer clearfix no-border">
              <a href="/laboran/input_hari" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Hari</a>
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
    <tr>
      <th scope="col">No</th>
      <!-- <th scope="col">Kode Hari</th> -->
      <th scope="col">Nama Hari</th>
      <th scope="col" colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($hari as $h)
 
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <!-- <td>{{$h->kode_hari}}</td> -->
      <td>{{$h->nama_hari}}</td>
      <td> <a  href="/laboran/hari/{{ $h->id }}/edit_hari" type="button" class="btn btn-primary">Edit</a> </td>
     <td>
     <form action="hari/{{ $h->id }}" method="post"> 
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
        {{ $hari->links() }}
               
             
                </ul>
              </div>
            </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection