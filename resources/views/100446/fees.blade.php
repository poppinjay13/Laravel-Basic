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
Student's Admission Number:<br>
  <input type = "text" name = "student_no" id = "student_no" placeholder = " Student Number" required/><br>
  <br>
Payment Amount in Ksh:<br>
  <input type = "text" name = "amount" id = "amount" placeholder = " Amount Paid" required/><br>
  <br>
  <input type = "hidden" name = "date" id = "date" value = "date" /><br>
</form>
</div>
</center>
  <!-- Bootstrap core JavaScript -->
  <script src= {{ asset('js/jquery/jquery.slim.min.js') }}></script>
  <script src= {{ asset('js/bootstrap.bundle.min.js') }}></script>

</body>

</html>
