@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'make_user', 'method' => 'post')) }}



<table class="BlueTable" width="20%"><td><td><div class="f2">New Employee</div><tr>

	<td>{{ Form::label('f_name', 'First Name:') }}
	<td><input class="inputbox"{{Form::text('f_name') }}
		<tr>
	<td>{{ Form::label('m_name', 'Middle Name:') }}
	<td><input class="inputbox"{{Form::text('m_name') }}
		<tr>
	<td>{{ Form::label('l_name', 'Last Name:') }}
	<td><input class="inputbox"{{Form::text('l_name') }}
		<tr>
	<td>{{ Form::label('street1', 'Street:') }}
	<td><input class="inputbox"{{Form::text('street1') }}
		<tr>
	<td>{{ Form::label('street2', 'Apt/Ste:') }}
	<td><input class="inputbox"{{Form::text('street2') }}
		<tr>
	<td>{{ Form::label('city', 'City:') }}
	<td><input class="inputbox"{{Form::text('city') }}
		<tr>
	<td>{{ Form::label('state', 'State:') }}
	<td>{{	Form::text('state') }}
		<tr>
	<td>{{ Form::label('zip', 'Zip:') }}
	<td>{{	Form::text('zip') }}
		<tr>
	<td>{{ Form::label('phone', 'Phone') }}
	<td>{{	Form::text('phone') }}
		<tr>
	<td>{{ Form::label('email', 'E-mail:') }}
	<td><input class="inputbox"{{Form::text('email') }}
		<tr>

	<td>{{Form::label('shirt_size', 'Shirt Size')}}
	<td><select name="shirt_size">

	@foreach($ssize as $ss)
	<option value="{{  "$ss"   }}"=>{{$ss}}
	@endforeach
	</select><tr>


	<td>{{Form::label('jacket_size', 'Jacket Size')}}
	<td><select name="jacket_size">


	@foreach($ssize as $ss)
	<option value="{{  "$ss"   }}"=>{{$ss}}
	@endforeach
	</select><tr>



	<td>{{ Form::label('dob', 'Birthday') }}
	<td><input type="text" id="datepicker" name="dob">
		<tr>
	<td>{{ Form::label('hire_date', 'Hire Date')}}
	<td><input type="text" id="datepicker2" name="hire_date">
		<tr>
	<td>
	<td><input class="submit"{{ Form::submit('Add Employee')}}<tr>

</table>



{{ Form::close()}}

@stop