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
<div style = "padding-top: 150px;">
<form style = "text-align:left;width:20%;" method="post" action="search">
@csrf
  <input type = "text" name = "student_no" id = "student_no" placeholder = " Student Number" required/><br>
  <br>
  <button class="btn btn-primary">Search</button>
</form>
</div>
</center>
@isset($students)
  <table style="width:90%">
    <thead>
      <th>Student Number</th>
      <th>Full Names</th>
      <th>Date of Birth</th>
      <th>Address</th>
      <th>Fees Paid</th>
    </thead>
    <tbody>
      @if(count($students) >= 0)
        @foreach($students as $student)
        <tr>
          <td>{{$student->student_no}}</td>
          <td>{{$student->full_name}}</td>
          <td>{{$student->date_of_birth}}</td>
          <td>{{$student->address}}</td>
          <td>{{$fees}}</td>
        </tr>
        @endforeach
      @endif
    </tbody>
  </table>
  @endisset
  <!-- Bootstrap core JavaScript -->
  <script src= {{ asset('js/jquery/jquery.slim.min.js') }}></script>
  <script src= {{ asset('js/bootstrap.bundle.min.js') }}></script>

</body>

</html>
