@extends('layouts.admin')
@section('top_left_1')

<?php 

	$years = str_replace('addyears', 'Years', $certs->term_);
	$termlength = str_replace('addmonths', 'Months', $years);	
?>

{{ Form::open(array('route' => 'update_certDo', 'method' => 'post')) }}

<table class="BlueTable"><td><td>Currently: <i>{{$certs->name}} {{$certs->type}} Valid for {{$certs->term}} {{ $termlength }}<i><tr>
	<td>{{ Form::label('name', 'Qualification Name:') }}
	<td><input class="inputbox"{{	Form::text('name', $certs->name) }}
		<tr>
	<td>Valid for:
	<td>{{ Form::select('term', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10') )}}
		{{ Form::select('term_', array('addmonths' => 'Months', 'addyears' => 'Years'), $certs->term_ )}}
		<tr>
	<td>Reminder:
	<td>{{ Form::select('reminder_term', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'))}}
		{{ Form::select('reminder_term_', array('subdays' => 'Days', 'subweeks' => 'Weeks', 'submonths' => 'Months'), $certs->reminder_term_ )}} before expiration.
		<tr>


	<td>{{ Form::label('desc', 'Description:')}}
	<td>{{ Form::textarea('desc', $certs->desc)}}<tr>
		{{ Form::hidden('cert_id', $certs->id)}}
<td><td><input class="submit"{{ Form::submit('Update Qualification')}}

</table>


<br>

{{ Form::close()}}

@stop