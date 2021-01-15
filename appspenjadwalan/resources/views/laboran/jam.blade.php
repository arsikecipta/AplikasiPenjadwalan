@extends('layouts.master')
@section('title', 'JAM')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">JAM</h3>
              <div class="box-footer clearfix no-border">
              <a href="/laboran/input_jam" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Jam</a>
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
      <th width="250px" scope="col">Jam Mulai</th>
      <th width="250px" scope="col">Jam Berkahir</th>
      <th width="250px" scope="col">Rentang</th>
      <th scope="col" colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($jam as $j)
 
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
       
      <td>{{$j->jam_mulai}}</td>
      <td>{{$j->jam_berakhir}}</td>
      <td>{{$j->rentang}}</td>
      <td> <a  href="/laboran/jam/{{ $j->id }}/edit_jam" type="button" class="btn btn-primary">Edit</a> </td>
     <td>
     <form action="jam/{{ $j->id }}" method="post"> 
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
                {{ $jam->links() }}
                </ul>
              </div>
            </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection