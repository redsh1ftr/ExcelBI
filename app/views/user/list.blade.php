@extends('layouts.admin')
@section('top_left_1')
<table class="BlueTable">
	<td><div class="f2">Active Employees</div><tr>
@foreach($users as $user)


<td><a class="table_link"{{link_to_route('user_profile', "$user->f_name $user->m_name $user->l_name", 
		json_encode(array(
			'id', 'id' => $user->id,
			'sort' => 'created_at',
			'updown' => 'desc',
		)));}}<tr>
@endforeach
</table>


@stop

@section('top_right_1')

@if(!$deusers->isEmpty())
<table class="BlueTable">
	<td>De-Activated Employees<tr>
@foreach($deusers as $deuser)

	<td>{{$deuser->f_name}} {{$deuser->l_name}}
	<tr>
@endforeach
</table>
@endif
@stop