@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'make_user_cert', 'files' => true, 'method' => 'post')) }}

{{ Form::hidden('uid', $id)}}
<table class="BlueTable">

<td><td><a class="table_link"{{link_to_route('user_profile', "Return to $user->f_name's Profile", 
		json_encode(array(
			'id', 'id' => $user->id,
			'sort' => 'created_at',
			'updown' => 'desc',
		)));}}<tr>
<td>{{ Form::label('cert_id', 'Choose Qualification:')}}
<td><select name="cert_id">


@foreach($cert_list as $cert)

<?php 

	$years = str_replace('addyears', 'Years', $cert->term_);
	$termlength = str_replace('addmonths', 'Months', $years);	
?>

<option value="{{  "$cert->id"   }}"=>{{ str_limit($cert->name, $limit = 40) }} {{$cert->type}} ({{$cert->term}} {{$termlength}})
@endforeach
</select><tr>

<td>Certificate Received:<td><input type="text" id="datepicker" name="cert_recd"><tr>
<td>Certificate Image:<td>{{ Form::file('certificate') }}<tr>
<td><td><input class="submit"{{Form::submit("Add to $user->f_name $user->l_name")}}
</table><br><br>

{{Form::hidden('id', $user->id)}}
{{Form::hidden('type', $cert->type)}}

{{Form::close()}}

@stop


@section('top_right_1')

@if(!$user_certs->isEmpty())

<h1>Previously Added Qualifications for {{$user->f_name}} {{$user->l_name}}

<table class="BlueTable" align="center" width="100%" border="1">

		<th>Qualification</th>
		<th>Type</th>

		<th>Received</th>


		<th>Expires</th>


		<th>Reminder</th>
		<th>Image</th></tr>

@foreach($user_certs as $cert)

		<td><a class="table_link"{{ link_to_route('user_certShow', CertMain::where('id', '=', $cert->cert_id)->pluck('name'), $cert->id) }} 
		<td>{{ $cert->type}}
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) <a class="table_link" target="_blank"{{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View Image')}}@endif<tr height="100%">

@endforeach
</table>

@endif
@stop