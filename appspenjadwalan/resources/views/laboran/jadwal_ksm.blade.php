@extends('layouts.master')
@section('title', 'JADWAL KSM')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend') }}/datepicker/dist/css/bootstrap-datepicker.min.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">DATA JADWAL KSM</h3>
              <form class="form-inline my-2 my-lg-"style="margin-top:20px;" action="/laboran/jadwal_ksm" method="GET">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari"> -->
     <label for="date">Tanggal dibuat</label>
      <input class="form-control mr-sm-2 datepicker" type="text" name="tgl" id="datepicker" autocomplete="off">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     
      <button class="btn btn-outline-success pull-right my-2 my-sm-0" type="submit">Search</button>
      <input class="form-control mr-sm-2 pull-right" type="search" placeholder="Search matakuliah" aria-label="Search" name="cari" autocomplete="off"> 
      
    </form>

    <!-- //datepicker -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>



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
              <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover " id="dataTable">
  <thead>
  <tr style="text-align:center;" >
      <th scope="col">No.</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
      <th scope="col">Kelas</th>
      <th scope="col">Ruangan</th>
      <th  scope="col">Kode Matakuliah</th>
      <th  scope="col">Nama Matakuliah</th>
      <th  scope="col">Tanggal dibuat</th>
      <th scope="col" colspan="2">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($ksm as $k)

 <tr>
   <th scope="row">{{ $loop->iteration }}</th>
   <td>{{$k->hari}}</td>
   <td>{{$k->jam_mulai}} - {{$k->jam_berakhir}} </td>
   <td>{{$k->kelas}}</td>
   <td>{{$k->ruangan}}</td>
   <td>{{$k->kode_mk}}</td>
   <td>{{$k->nama_mk}}</td>
   <td>{{$k->created_at}}</td>
   <td> <a  href="/laboran/jadwal_ksm/{{ $k->id }}/edit_ksm" type="button" class="btn btn-primary">Edit</a> </td>
  <td>
  <form action="jadwal_ksm/{{ $k->id }}" method="post"> 
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
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
<script src="{{ asset('frontend') }}/datepicker/js/bootstrap-datepicker.js"></script>
