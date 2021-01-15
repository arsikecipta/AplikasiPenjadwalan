@extends('layouts.master')
@section('title', 'Pengampu')
@section('content')
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  
  </head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="box box-primary">
    <h1>Laravel Bootstrap Timepicker</h1>
    <div style="position: relative">
      <strong>Timepicker:</strong>
      <input class="timepicker form-control" type="text">
    </div>
</div>
<script type="text/javascript">
    $('.timepicker').datetimepicker({
        format: 'HH:mm:ss'
    }); 
</script>  
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              
    </section>
    <!-- /.content -->
  </div>
@endsection