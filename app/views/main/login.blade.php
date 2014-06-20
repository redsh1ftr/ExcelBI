<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excel WebTools</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.login {
			margin-left:45%;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
		<img src='http://www.precisemaintenance.com/ExcelBI/images/lologo.png'><br>


<div class="login">
{{ Form::open(array('route' => 'login', 'method' => 'post')) }}
			
<table>
<td><td>{{ $errors->first('email') }}<tr>
<td><td>{{ $errors->first('password') }}<tr>
 <td> Username:<td>{{ Form::text('username') }}<tr>
  <td>Password: <td>{{ Form::password('password') }}<tr>


 <td>  <td>{{ Form::submit ('Log In') }}
  </table>
    {{ Form::close() }}
</div>
</body>
</html>