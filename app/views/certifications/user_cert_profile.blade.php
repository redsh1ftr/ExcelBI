@extends('layouts.admin')
@section('top_left_1')
<?php 

	$years = str_replace('addyears', 'Years', CertMain::where('id', '=', $cert->cert_id)->pluck('term_'));
	$termlength = str_replace('addmonths', 'Months', $years);	
?>

<table class="BlueTable" width=50%>
	
{{ Form::open(array('route' => 'user_cert_update', 'files' => true, 'method' => 'post')) }}
<td><td><a class="table_link"{{link_to_route('user_profile', "Go back to $user->f_name $user->m_name $user->l_name", 
		json_encode(array(
			'id', 'id' => $user->id,
			'sort' => 'created_at',
			'updown' => 'desc',
		)));}}<tr>



<td>Qualification<td>{{CertMain::where('id', '=', $cert->cert_id)->pluck('name') }} {{CertMain::where('id', '=', $cert->cert_id)->pluck('type') }} 
(Valid for {{CertMain::where('id', '=', $cert->cert_id)->pluck('term')}} {{$termlength}}) <tr>
<td>Received<td><input type="text" id="datepicker" name="cert_recd" value={{Carbon::parse($cert->cert_recd)->format('m/d/Y')}}><tr> 
<td>Expires	<td><input type="text" id="datepicker2" name="cert_exp" value={{Carbon::parse($cert->cert_exp)->format('m/d/Y')}}><tr>
<td>Reminder Date:<td><input type="text" id="datepicker3" name="reminder" value={{Carbon::parse($cert->reminder)->format('m/d/Y')}}><tr>
<td>Certificate Image:<td>{{ Form::file('certificate') }}<tr>

	
<td><td><input class="submit"{{Form::submit('Update Qualification')}}
{{Form::hidden('cert_id', $cert->id)}}


</table>


{{Form::close()}}



@stop

@section('top_right_1')
@if($cert->certificate)
<img src="//www.precisemaintenance.com/ExcelBI/public/uploads/{{$cert->certificate}}">
@endif

@stop