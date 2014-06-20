@extends('layouts.user_profile')

@section('top_left_1')

<table class="profiletable">
<td><a class="view_image"{{link_to_route('user_updateShow', 'UPDATE USER INFORMATION', $user->id)}}<br>
	<a class="view_image"{{ link_to_route('make_user_certShow', "Add Qualifications to $user->f_name $user->l_name", $user->id, array('id' => $user->id));}}
<td><div class="pf1">{{$user->f_name}} {{$user->m_name}} {{$user->l_name}}<br>
</div><tr>


<td>Address:<td>

@if($user->street2)
	{{$user->street1}}, {{$user->street2}}
@else
	{{$user->street1}}
@endif
	 {{$user->city}} {{$user->state}}, {{$user->zip}}<tr>





	<td>Hire Date:<td>{{Carbon::parse($user->hire_date)->format('D, M d Y')}}<tr>
	<td>Birthday:<td>{{Carbon::parse($user->dob)->format('D, M d Y')}}<tr>
	<td>Phone:


{{-- Phone Number Logic --}}

		<?php 
		$phonenum = $user->phone;
			if(strlen($phonenum) == 7){
				$phonedash = preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phonenum);
			}elseif(strlen($phonenum) == 10){
				$phonedash = preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phonenum);
			}else{
				$phonedash = $user->phone;
			}

		?>

	<td>{{$phonedash}}<tr>


@if($user->email)
	<td><td><a class="view_image" href="mailto:{{$user->email}}">Send an Email</a><tr>
		

@endif
<td>Shirt Size<td>{{$user->shirt_size}}<tr>
<td>Jacket Size<td>{{$user->jacket_size}}<tr>

</table>


@stop



@section('top_right_1')

@if(!$lic->isEmpty())
<table class="profiletable" align="center" width="100%" border="1">

		<th><div class="pf1">Active Licenses</div></th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'asc')))}} 
			Received
			<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'desc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'desc')))}}
			Expires 
		<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'asc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'asc')))}} 
			Reminder
			 <a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'desc')))}}</th>
		<th></th></tr>
	
@foreach($lic as $cert)

		<td><a class="view_image"{{ link_to_route('user_certShow', Str::limit(CertMain::where('id', '=', $cert->cert_id)->pluck('name'), $limit = 24), $cert->id) }} 
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) <a target="_blank" class="view_image"{{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View File')}}@endif<tr>

@endforeach
</table>
@endif


@if(!$certs->isEmpty())
<br>
<table class="profiletable" align="center" width="100%" border="1">

		<th><div class="pf1">Active Certifications</div></th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'asc')))}} 
			Received
			<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'desc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'desc')))}}
			Expires 
		<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'asc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'asc')))}} 
			Reminder
			 <a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'desc')))}}</th>
		<th></th></tr>
	
@foreach($certs as $cert)

		<td><a class="view_image"{{ link_to_route('user_certShow', Str::limit(CertMain::where('id', '=', $cert->cert_id)->pluck('name'), $limit = 24), $cert->id) }} 
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) <a target="_blank" class="view_image"{{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View File')}}@endif<tr>

@endforeach
</table>

@endif

@stop

@section('expired_certs')


@if(!$exp_lic->isEmpty())

<br>
<table class="profiletable" align="center" width="100%" border="1">
		<th><div class="pf1">Expired Licenses</div></th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'asc')))}} 
			Received
			<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'desc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'desc')))}}
			Expired
		<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'asc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'asc')))}} 
			Reminder
			 <a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'desc')))}}</th>
		<th></th></tr>
	
@foreach($exp_lic as $cert)

		<td><a class="view_image"{{ link_to_route('user_certShow', str_limit(CertMain::where('id', '=', $cert->cert_id)->pluck('name'), $limit = 24), $cert->id) }} 
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) <a target="_blank" class="view_image"{{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View File')}}@endif<tr>

@endforeach
</table>
@endif

@if(!$exp_certs->isEmpty())

<br>
<table class="profiletable" align="center" width="100%" border="1">
		<th><div class="pf1">Expired Certifications</div></th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'asc')))}} 
			Received
			<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'desc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'desc')))}}
			Expired
		<a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'asc')))}}</th>


		<th><a class="sortable"{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'asc')))}} 
			Reminder
			 <a class="sortable"{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'desc')))}}</th>
		<th></th></tr>
	
@foreach($exp_certs as $cert)
		<td><a class="view_image"{{ link_to_route('user_certShow', str_limit(CertMain::where('id', '=', $cert->cert_id)->pluck('name'), $limit = 24), $cert->id) }} 
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) <a target="_blank" class="view_image"{{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View File')}}@endif<tr>

@endforeach
</table>
@endif


@stop
