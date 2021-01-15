@extends('layouts.master')
@section('title', 'Input Jam')
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

              <h3 class="box-title">Input Jam</h3>
              <!-- tools box -->
          
              <!-- /. tools -->
            </div>
            <div class="box-body">
            <form action="/laboran/jam" method="POST">
              {{csrf_field()}}
                
              <div class="form-group">
                <label for="jam_mulai"> Jam Mulai</label>
                <input class="timepicker form-control" type="text" name="jam_mulai">
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
                <div class="box-footer clearfix" >
                </div> 
              <button type="submit" class="pull-right btn btn-primary" id="sendEmail">Submit
                <i class="fa fa-arrow-circle-right"></i></button>
               </form>
                <a href="/laboran/jam"><button type="submit" class="pull-left btn btn-light" id="sendEmail"><i class="fa fa-arrow-circle-left"></i>&nbspKembali
                </button></a>
               
                
            </div>
            
          </div>

        </section>
                </section>
    <!-- /.content -->
  </div>
@endsection