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
  <tr style="text-align:center;" >
      <th scope="col"></th>
      <th scope="col">Senin</th>
      <th  scope="col">Selasa</th>
      <th scope="col">Rabu</th>
      <th  scope="col">Kamis</th>
      <th scope="col">Jumat</th>
      <th  scope="col">Sabtu</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th >06.00 - 06.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    
      

    </tr>
    <tr>
      <th >06.30 -  07.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
   
    </tr>
    <tr>
      <th>07.00 - 07.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
   
    </tr>
    <tr>
      <th>07.30 - 08.00</th>
      
      <td ></td>
   
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>08.00 - 08.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>09.00 - 09.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <th>09.30 - 10.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>10.00 - 10.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>10.30 - 11.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th>11.00 - 11.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>11.30 - 12.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>12.00 - 12.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th>12.30 - 13.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th>13.00 - 13.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr><tr>
      <th>13.30 - 14.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr><tr>
      <th>14.00 - 14.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr><tr>
      <th>15.00 - 15.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    </tr><tr>
      <th>15.30 - 16.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    
    </tr>
    </tr><tr>
      <th>16.00 - 16.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    
    </tr>
    </tr><tr>
      <th>16.30 - 17.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    
    </tr>
    </tr><tr>
      <th>17.00 - 17.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    </tr><tr>
      <th>17.30 - 18.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th>18.00 - 18.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>18.30 - 19.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
    <tr>
      <th>19.00 - 19.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th>19.30 - 20.00</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <tr>
      <th>20.00 - 20.30</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
   
    </tr>
  </tbody>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-success" id="sendEmail">Download Jadwal
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
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