@extends('layouts.qual_list')
@section('top_left_1')




<table class="BlueTable">
<th><div class= "f2">License</div><th><tr>
@foreach($lics as $cert)
<?php 

	$years = str_replace('addyears', 'Year', $cert->term_);
	$termlength = str_replace('addmonths', 'Month', $years);	
?>
	<td><a class="table_link"{{link_to_route('cert_profileShow', str_limit($cert->name, $limit = 40), $cert->id, array('id' => $cert->id))}}<td>Valid for {{$cert->term}} {{Str::plural($termlength, $count = $cert->term)}}<tr>

@endforeach
</table>
@stop


@section('top_right_1')

<table class="BlueTable">
<td><div class="f2">Certificates</div><tr>
@foreach($certs as $cert)
<?php 

	$years = str_replace('addyears', 'Year', $cert->term_);
	$termlength = str_replace('addmonths', 'Month', $years);	
?>
	<td><a class="table_link"{{link_to_route('cert_profileShow', str_limit($cert->name, $limit = 40), $cert->id, array('id' => $cert->id))}}<td>Valid for {{$cert->term}} {{Str::plural($termlength, $count = $cert->term)}}<tr>																																				
@endforeach
</table>


@stop