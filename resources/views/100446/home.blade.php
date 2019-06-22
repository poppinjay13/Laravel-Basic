<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>

    <div id="main">
        <center>
        <table style="height: 90vh;">
        	<tbody>
        		<tr>
        			<td><a href="students" type="button" class="btn btn-primary btn-lg">Register User</a></td>
        			<td><a href="fees" type="button" class="btn btn-primary btn-lg">Pay Fees</a></td>
        		</tr>
        	</tbody>
        </table>
        </center>

    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
</body>
</html>
