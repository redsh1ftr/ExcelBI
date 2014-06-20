@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'make_cert', 'method' => 'post')) }}

<table class="BlueTable" width="80%"><td><td><tr>


	<td>Qualification Type:
	<td>{{Form::select('type', array('License' => 'License', 'Certificate' => 'Certificate'))}}<tr>

	<td>{{ Form::label('name', 'Name:') }}
	<td><input class="inputbox"{{	Form::text('name') }}
		<tr>
	<td>Valid for:
	<td>{{ Form::select('term', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10') )}}
		{{ Form::select('term_', array('addmonths' => 'Months', 'addyears' => 'Years') )}}
		<tr>
	<td>Reminder:
	<td>{{ Form::select('reminder_term', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10') )}}
		{{ Form::select('reminder_term_', array('subdays' => 'Days', 'subweeks' => 'Weeks', 'submonths' => 'Months') )}} before expiration.
		<tr>


	<td>{{ Form::label('desc', 'Description:')}}
	<td> <input class="inputarea"{{ Form::textarea('desc')}}<tr>
	<td>
	<td><input class="submit"{{ Form::submit('Add Qualification')}}<tr>
</table>



<br>



{{ Form::close()}}

@stop

@section('top_right_1')

<h2> Update Current Qualifications below:<h2>


<table class="BlueTable_Fixed" style = "table-layout:fixed">
<tr>
<th><div class= "f2">Licenses</th><tr>
@foreach($lics as $cert)
<?php 

	$years = str_replace('addyears', 'Year', $cert->term_);
	$termlength = str_replace('addmonths', 'Month', $years);	
?>
	<td><a class="table_link"{{link_to_route('cert_profileShow', str_limit($cert->name, $limit = 40), $cert->id, array('id' => $cert->id))}}<td> <p class="disp_button">Valid for {{$cert->term}} {{Str::plural($termlength, $count = $cert->term)}}</p><tr>

@endforeach
</table>

<br><br>


<table class="BlueTable_Fixed" style = "table-layout:fixed">
<tr>
<th><div class="f2">Certificates</th><tr>
@foreach($certs as $cert)
<?php 

	$years = str_replace('addyears', 'Year', $cert->term_);
	$termlength = str_replace('addmonths', 'Month', $years);	
?>
	<td><a class="table_link"{{link_to_route('cert_profileShow', str_limit($cert->name, $limit = 40), $cert->id, array('id' => $cert->id))}}<td><p class="disp_button">Valid for {{$cert->term}} {{Str::plural($termlength, $count = $cert->term)}}</p><tr>																																				
@endforeach
</table>


@stop