@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'update_userDo', 'method' => 'post')) }}



<table class="BlueTable" width="20%"><td>
@if(!$user->active = 1)
	{{Form::checkbox('active', '1')}} De-Activate User
@endif
	<td><a class="table_link"{{link_to_route('user_profile', " Back to $user->f_name's Profile", 
		json_encode(array(
			'id', 'id' => $user->id,
			'sort' => 'created_at',
			'updown' => 'desc',
		)));}}<tr>

	<td>{{ Form::label('f_name', 'First Name:') }}
	<td><input class="inputbox"{{Form::text('f_name', $user->f_name) }}
		<tr>
	<td>{{ Form::label('m_name', 'Middle Name:') }}
	<td><input class="inputbox"{{Form::text('m_name', $user->m_name) }}
		<tr>
	<td>{{ Form::label('l_name', 'Last Name:') }}
	<td><input class="inputbox"{{Form::text('l_name', $user->l_name) }}
		<tr>
	<td>{{ Form::label('street1', 'Street:') }}
	<td><input class="inputbox"{{Form::text('street1', $user->street1) }}
		<tr>
	<td>{{ Form::label('street2', 'Apt/Ste:') }}
	<td><input class="inputbox"{{Form::text('street2', $user->street2) }}
		<tr>
	<td>{{ Form::label('city', 'City:') }}
	<td><input class="inputbox"{{Form::text('city', $user->city) }}
		<tr>
	<td>{{ Form::label('state', 'State:') }}
	<td>{{	Form::text('state', $user->state) }}
		<tr>
	<td>{{ Form::label('zip', 'Zip:') }}
	<td>{{	Form::text('zip', $user->zip) }}
		<tr>
	<td>{{ Form::label('phone', 'Phone') }}
	<td>{{	Form::text('phone', $user->phone) }}
		<tr>
	<td>{{ Form::label('email', 'E-mail:') }}
	<td><input class="inputbox"{{	Form::text('email', $user->email) }}
		<tr>
	<td>{{Form::label('shirt_size', 'Shirt Size')}}
	<td><select name="shirt_size">
	<option selected="{{ "$user->shirt_size" }}"=>{{$user->shirt_size}}
	@foreach($ssize as $ss)
	<option value="{{  "$ss"   }}"=>{{$ss}}
	@endforeach
	</select>  <i>Currently set as {{$user->shirt_size}}</i> <tr>


	<td>{{Form::label('jacket_size', 'Jacket Size')}}
	<td><select name="jacket_size">

	<option selected="{{ "$user->jacket_size" }}"=>{{$user->jacket_size}}
	@foreach($ssize as $ss)
	<option value="{{  "$ss"   }}"=>{{$ss}}
	@endforeach
	</select> <i>Currently set as {{$user->jacket_size}}</i> 
	<tr>
	<td>{{ Form::label('dob', 'Birthday') }}
	<td><input type="text" id="datepicker" name="dob" value="{{Carbon::parse($user->dob)->format('m/d/Y')}}">
		<tr>
	<td>{{ Form::label('hire_date', 'Hire Date')}}
	<td><input type="text" id="datepicker2" name="hire_date" value="{{Carbon::parse($user->hire_date)->format('m/d/Y')}}">
		<tr>
	<td><td>{{Form::submit("Update $user->f_name", array('class' => 'submit'))}}<tr>
	</table>

{{Form::hidden('uid', $user->id) }}



{{ Form::close()}}

@stop