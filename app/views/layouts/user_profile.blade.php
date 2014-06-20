@extends('layouts.master')

<style>

			.profiletable {
				margin:0px;padding:0px;
				width:100%;
				text-align: center;
				box-shadow: 10px 10px 5px #888888;
				border:1px solid #ffffff;
				table-layout: fixed;
				-moz-border-radius-bottomleft:0px;
				-webkit-border-bottom-left-radius:0px;
				border-bottom-left-radius:0px;
				
				-moz-border-radius-bottomright:0px;
				-webkit-border-bottom-right-radius:0px;
				border-bottom-right-radius:0px;
				
				-moz-border-radius-topright:0px;
				-webkit-border-top-right-radius:0px;
				border-top-right-radius:0px;
				
				-moz-border-radius-topleft:0px;
				-webkit-border-top-left-radius:0px;
				border-top-left-radius:0px;
			}.profiletable table{
			    border-collapse: collapse;
			    border-spacing: 0;
				width:100%;
				height:100%;
				margin:0px;padding:0px;
			}.profiletable tr:last-child td:last-child {
				-moz-border-radius-bottomright:0px;
				-webkit-border-bottom-right-radius:0px;
				border-bottom-right-radius:0px;
			}
			.profiletable table tr:first-child td:first-child {
				-moz-border-radius-topleft:0px;
				-webkit-border-top-left-radius:0px;
				border-top-left-radius:0px;
			}
			.profiletable table tr:first-child td:last-child {
				-moz-border-radius-topright:0px;
				-webkit-border-top-right-radius:0px;
				border-top-right-radius:0px;
			}.profiletable tr:last-child td:first-child{
				-moz-border-radius-bottomleft:0px;
				-webkit-border-bottom-left-radius:0px;
				border-bottom-left-radius:0px;
			}.profiletable tr:hover td{
				background-color:#cccccc;
			}
			.profiletable td{
				vertical-align:middle;
				
				background-color:#ffffff;

				border:1px solid #ffffff;
				border-width:0px 1px 1px 0px;
				text-align:center;
				padding:7px;
				font-size:auto;
				font-family:Arial;
				font-weight:normal;
				color:#000000;
			}.profiletable tr:last-child td{
				border-width:0px 1px 0px 0px;

			}.profiletable tr td:last-child{
				border-width:0px 0px 1px 0px;
			}.profiletable tr:last-child td:last-child{
				border-width:0px 0px 0px 0px;
			}
			.profiletable tr:first-child td{
					background:-o-linear-gradient(bottom, #84c1ff 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #84c1ff), color-stop(1, #ffffff) );
				background:-moz-linear-gradient( center top, #84c1ff 5%, #ffffff 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#84c1ff", endColorstr="#ffffff");	background: -o-linear-gradient(top,#84c1ff,ffffff);

				background-color:#84c1ff;
				border:0px solid #ffffff;
				text-align:center;
				border-width:0px 0px 1px 1px;
				font-size:14px;
				font-family:Arial;
				font-weight:bold;
				color:#000000;
			}
			.profiletable tr:first-child:hover td{
				background:-o-linear-gradient(bottom, #84c1ff 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #84c1ff), color-stop(1, #ffffff) );
				background:-moz-linear-gradient( center top, #84c1ff 5%, #ffffff 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#84c1ff", endColorstr="#ffffff");	background: -o-linear-gradient(top,#84c1ff,ffffff);

				background-color:#84c1ff;
			}
			.profiletable tr:first-child td:first-child{
				border-width:0px 0px 1px 0px;
			}
			.profiletable tr:first-child td:last-child{
				border-width:0px 0px 1px 1px;
			}


			.view_image {
				-moz-box-shadow: 0px 0px 0px 0px #ffffff;
				-webkit-box-shadow: 0px 0px 0px 0px #ffffff;
				box-shadow: 0px 0px 0px 0px #ffffff;
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #66adff), color-stop(1, #66adff));
				background:-moz-linear-gradient(top, #66adff 5%, #66adff 100%);
				background:-webkit-linear-gradient(top, #66adff 5%, #66adff 100%);
				background:-o-linear-gradient(top, #66adff 5%, #66adff 100%);
				background:-ms-linear-gradient(top, #66adff 5%, #66adff 100%);
				background:linear-gradient(to bottom, #66adff 5%, #66adff 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#66adff', endColorstr='#66adff',GradientType=0);
				background-color:#66adff;
				-moz-border-radius:28px;
				-webkit-border-radius:28px;
				border-radius:28px;
				
				display:inline-block;
				cursor:pointer;
				color:#000000;
				font-family:Arial;
				font-size:17px;
				padding:8px 1px;
				width: 100%;
				text-align: center;
				text-decoration:none;
			}
			.view_image:hover {
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #000000), color-stop(1, #66adff));
				background:-moz-linear-gradient(top, #ffffff 5%, #66adff 100%);
				background:-webkit-linear-gradient(top, #ffffff 5%, #66adff 100%);
				background:-o-linear-gradient(top, #ffffff 5%, #66adff 100%);
				background:-ms-linear-gradient(top, #ffffff 5%, #66adff 100%);
				background:linear-gradient(to bottom, #ffffff 5%, #66adff 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#66adff',GradientType=0);
				background-color:#000000;
				color:#000000;
			}
			.view_image:active {
				position:relative;
				top:1px;
			}


			.sortable {
				-moz-box-shadow:inset 0px 1px 32px 0px #bee2f9;
				-webkit-box-shadow:inset 0px 1px 32px 0px #bee2f9;
				box-shadow:inset 0px 1px 32px 0px #bee2f9;
				background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #63b8ee), color-stop(1, #468ccf) );
				background:-moz-linear-gradient( center top, #63b8ee 5%, #468ccf 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#63b8ee', endColorstr='#468ccf');
				background-color:#63b8ee;
				-webkit-border-top-left-radius:0px;
				-moz-border-radius-topleft:0px;
				border-top-left-radius:0px;
				-webkit-border-top-right-radius:0px;
				-moz-border-radius-topright:0px;
				border-top-right-radius:0px;
				-webkit-border-bottom-right-radius:0px;
				-moz-border-radius-bottomright:0px;
				border-bottom-right-radius:0px;
				-webkit-border-bottom-left-radius:0px;
				-moz-border-radius-bottomleft:0px;
				border-bottom-left-radius:0px;
				text-indent:0px;
				border:1px solid #3866a3;
				display:inline-block;
				color:#14396a;
				padding: 5px;
				font-family:Arial;
				font-size:20px;
				font-weight:bold;
				font-style:normal;
				height:auto;
				line-height:25px;
				width:auto;
				text-decoration:none;
				text-align:center;
				text-shadow:1px 1px 0px #7cacde;
			}
			.sortable:hover {
				background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #468ccf), color-stop(1, #63b8ee) );
				background:-moz-linear-gradient( center top, #468ccf 5%, #63b8ee 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee');
				background-color:#468ccf;
			}.sortable:active {
				position:relative;
				top:1px;
			}

			.pf1{
				font-size: 18px;
				font-weight: bold;
			}

</style>


<div class="spacebar">


{{-- USER PROFILE SECTION LINKS GO HERE --}}
		



<div class="top_left_1">
	@yield('top_left_1')
	
</div>



<div class="top_right_1">
	@yield('top_right_1')

	@yield('expired_certs')	

</div>












</div>