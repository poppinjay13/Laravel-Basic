<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>100446 - HOME</title>

  <!-- Bootstrap core CSS -->
  <link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet">

</head>

<body>

  <!-- Navigation -->

  <!-- Page Content -->
<center>
<div style = "padding-top: 250px;">
<form style = "text-align:left;width:20%;">
Full Names:<br>
  <input type = "text" name = "full_name" id = "full_name" placeholder = " Full Names" /><br>
  <br>
Date of Birth:<br>
  <input type = "date" name = "dob" id = "dob" placeholder = " Date of Birth" /><br>
  <br>
Home Address:<br>
  <input type = "text" name = "address" id = "address" placeholder = " Address" /><br>
</form>
</div>
</center>
  <!-- Bootstrap core JavaScript -->
  <script src= {{ asset('js/jquery/jquery.slim.min.js') }}></script>
  <script src= {{ asset('js/bootstrap.bundle.min.js') }}></script>

</body>

</html>
