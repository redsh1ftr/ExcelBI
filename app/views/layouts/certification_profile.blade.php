@extends('layouts.master')
<div class="toolbar">
	<table width="50%">

{{-- CERTIFICATE LINKS GO HERE --}}
		
		<td>{{link_to_route('cert_listShow', 'Certification List')}}
		<td>{{link_to_route('cert_historyShow', 'Certification History')}}	
	
	</table>

<hr>	


<div class="top_left_1">
	@yield('top_left_1')
</div>

<div class="top_right_1">
	@yield('top_right_1')
</div>











</div>