<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Landing Page</title>
  </head>

  <body style="background-color:#44756C;">
  
  <nav class="navbar-light " style="background-color:#BAC7A7;height:50px; " >
  
   <ul class="nav justify-content-end ">
   <nav class="navbar navbar-expand-lg navbar-light ">
 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <div class="text-center" style="font-size:20px; font-color:#FFFFFF;">
      Login sebagai <a href="{{ url ('/home_kaurlab') }}">Kaurlab!</a>
</div>
    
        </div>
      </li>
    </ul>
  </div>
</nav>

</ul>
</nav>

<body class="bg-gradient-info">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9"  style="margin-top: 1%;">

      <div class="card o-hidden border-0 shadow-lg my-5">
   
        <div class="card-body p-0" >
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block"style="background-color:#84A98C;">
              <center>
                <div style="margin-top: 6rem;">
                  <a href=""><img src="{{ ('img/calendar.svg') }}" width="55%"  ></a>
                  <a href=""><img src="{{ ('img/box.svg') }}" width="55%"style="margin-bottom: 2%;"></a>
                </div>
              </center>
            </div>
            <div class="col-lg-6">
              <div class="p-5">


<div class="text-center">
<br>
<br>
<br>

  <h1 class="h4 text-gray-900 mb-1"><b>- LOGIN LABORAN -</b></h1>
 
</div>

<form class="user" action="/postlogin" method="POST">
{{csrf_field()}}
   <!-- Check Error Message -->
   @if(session('gagal'))
<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{session('gagal')}}
</div>
@endif
  <!-- /Check Error Message -->
 
  
  <div class="form-group" style="padding-top:50px; ">
    <input type="username" class="form-control border" name="username" placeholder="Username" autocomplete="off" >
  </div>
  <div class="form-group">
    <input type="password" class="form-control border " name="password" placeholder="Password" >
  </div>
  
  <button  class="btn btn-primary btn-block" style="background-color:#44756C">LOGIN</button>
</form>

<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>