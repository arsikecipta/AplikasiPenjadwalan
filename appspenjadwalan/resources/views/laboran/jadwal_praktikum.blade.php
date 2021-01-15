@extends('layouts.master')
@section('title', 'Jadwal Praktikum')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">JADWAL PRAKTIKUM</h3>
              
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->



              <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
  <thead>
    <tr>
      <th scope="col-2"></th> 
      @foreach ($hari as $h)
      <th scope="col">{{$h->nama_hari}}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>

   @foreach ($data as $j) 
    <tr>
   <td>{{$j->jam_mulai }} - {{$j->jam_berakhir}}</td>
   @foreach ($ksm as $k)
    @if($k->hari=='Senin')     
    @if($j->jam_mulai>=$k->jam_mulai && $j->jam_berakhir <=$k->jam_berakhir)  

    <td>{{$k->kelas}}</td> 
    <td></td> 
    <td></td> 
  @endif
  @elseif($k->hari=='Selasa')   
@if($j->jam_mulai>=$k->jam_mulai && $j->jam_berakhir<=$k->jam_berakhir)  

    <td></td> 
    <td>{{$k->kelas}}</td> 
   
  @endif
  @elseif($k->hari=='Rabu')   
@if($j->jam_mulai>=$k->jam_mulai && $j->jam_berakhir <=$k->jam_berakhir)  
    <td></td> 
    <td></td> 
   <td>{{$k->kelas}}</td> 
  @endif

  @elseif($k->hari=='Kamis')   
@if($j->jam_mulai>=$k->jam_mulai && $j->jam_berakhir <=$k->jam_berakhir)  
    <td>{{$k->kelas}}</td>     
  @endif

  @elseif($k->hari=='Jumat')   
@if($j->jam_mulai>=$k->jam_mulai && $j->jam_berakhir <=$k->jam_berakhir)  
<td></td> 
<td></td>
<td></td> 
<td></td>   
    <td>{{$k->kelas}}</td> 
  @endif
  @elseif($k->hari=='Sabtu')   
@if($j->jam_mulai>=$k->jam_mulai && $j->jam_berakhir<=$k->jam_berakhir)  

    <td>{{$k->kelas}}</td>   
  @endif
  
  @endif
    @endforeach   
   @endforeach
    </tr> 
  

   
    
    
  </tbody>
</table>

            </div>
            <!-- /.box-body -->
            <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection