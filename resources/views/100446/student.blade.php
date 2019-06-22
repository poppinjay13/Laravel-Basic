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
<form style = "text-align:left;width:20%;" method="POST" action="students">
@csrf
Full Names:<br>
  <input type = "text" name = "full_name" id = "full_name" placeholder = " Full Names" required/><br>
  <br>
Date of Birth:<br>
  <input type = "date" name = "dob" id = "dob" placeholder = " Date of Birth" required/><br>
  <br>
Home Address:<br>
  <input type = "text" name = "address" id = "address" placeholder = " Address" required/><br>
  <br>
  <input type="submit" class="btn btn-primary" value="Create New Student" />
</form>
</div>
</center>
<br>
<hr>
<br>
<center>
<h2>Existing Students</h2><br><br>
<table style="width:90%;">
<tr>
<td>Student Number</td>
<td>Student Name</td>
<td>Date of Birth</td>
<td>Address</td>
</tr>
@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->full_name }}</td>
<td>{{ $student->date_of_birth }}</td>
<td>{{ $student->address }}</td>
</tr>
@endforeach
</table>
</center>
  <!-- Bootstrap core JavaScript -->
  <script src= "{{ asset('js/jquery/jquery.slim.min.js') }}"></script>
  <script src= "{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
