<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>

<center>
<div style = "padding-top: 20px;">
<form style = "text-align:left;width:20%;" action="fees" method="post">
@csrf
Student's Admission Number:<br>
  <input type = "text" name = "student_no" id = "student_no" placeholder = " Student Number" required/><br>
  <br>
Payment Amount in Ksh:<br>
  <input type = "text" name = "amount" id = "amount" placeholder = " Amount Paid" required/><br>
  <br>
  <button class="btn btn-primary">Submit Transaction</button>
</form>
</div>
</center>
<br>
<hr>
<br>
<center>
<h2>Fee Transactions</h2>
<br>
<table style="width:40%;">
<tr>
<td>Student Number</td>
<td>Amount</td>
<td>Date</td>
</tr>
@foreach ($fees as $payment)
<tr>
<td>{{ $payment->student_no }}</td>
<td>{{ $payment->amount }}</td>
<td>{{ $payment->created_at }}</td>
</tr>
@endforeach
</table>
</center>
  <!-- Bootstrap core JavaScript -->
  <script src= {{ asset('js/jquery/jquery.slim.min.js') }}></script>
  <script src= {{ asset('js/bootstrap.bundle.min.js') }}></script>

</body>

</html>
