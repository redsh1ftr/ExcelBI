<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{$pagetitle}}</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker2").datepicker();
    $( "#datepicker3").datepicker();
    $( "#datepicker4").datepicker();
  });
  </script>

	<style>


		body {
			width:99.5%;
			height: 900px;
			background-color: #92c7ff;
			margin-top:0%;
			left: 0%;
			top:0%;
			font-family:'Lato', sans-serif;
			text-align:left;
			color: #100;
		}
		

		.inputbox    {
			width:80%;
			display:block;
			border: 1px solid #999;
			height: 25px;
			}

		.inputarea    {
			width:80%;
			display:block;
			border: 1px solid #999;
			height: 280px;


			}

		.topbar{
			position: absolute;
			margin-left:1px;
			background-color: #92c7ff;
			margin-top:0px;
			width: 99.8%;
			height:35px;
			left: 0%;
			top:0%;
		}

		.disp_button {
				-moz-box-shadow: 0px 0px 0px 0px #ffffff;
				-webkit-box-shadow: 0px 0px 0px 0px #ffffff;
				box-shadow: 0px 0px 0px 0px #ffffff;
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #66adff), color-stop(1, #66adff));
				background:-moz-linear-gradient(top, #9ccdff 5%, #9ccdff 100%);
				background:-webkit-linear-gradient(top, #9ccdff 5%, #9ccdff 100%);
				background:-o-linear-gradient(top, #9ccdff 5%, #9ccdff 100%);
				background:-ms-linear-gradient(top, #9ccdff 5%, #9ccdff 100%);
				background:linear-gradient(to bottom, #9ccdff 5%, #9ccdff 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#66adff', endColorstr='#66adff',GradientType=0);
				background-color:#9ccdff;
				-moz-border-radius:28px;
				-webkit-border-radius:28px;
				border-radius:28px;
				display:inline-block;
				color:#000000;
				font-family:Arial;
				font-size:17px;
				padding:8px 1px;
				width: 170px;
				text-align: center;
				text-decoration:none;
			}





			.table_link {
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
			.table_link:hover {
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
			.table_link:active {
				position:relative;
				top:1px;
			}




			.submit {
				-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
				-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
				box-shadow:inset 0px 1px 0px 0px #ffffff;
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
				background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
				background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
				background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
				background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
				background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
				background-color:#ededed;
				-moz-border-radius:6px;
				-webkit-border-radius:6px;
				border-radius:6px;
				border:1px solid #dcdcdc;
				display:inline-block;
				cursor:pointer;
				width: 80%;
				color:#000000;
				font-family:arial;
				font-size:18px;
				font-weight:bold;
				padding:6px 12px;
				text-decoration:none;
				text-shadow:0px 1px 0px #ffffff;
			}
			.submit:hover {
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
				background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
				background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
				background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
				background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
				background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
				background-color:#dfdfdf;
			}
			.submit:active {
				position:relative;
				top:1px;
			}




		.spacebar{
			position: absolute;	
			margin-top: 20px;
			margin-left:-8px;
			background-image:url('http://www.precisemaintenance.com/ExcelBI/public/uploads/TXVpJ5UMLkVTOHJL3xZJRg7Rck5HriN3As8SJRkpsCdkKssDy5mpzN9AqYKSCqlOH78CG4gHMsOce9NgJhsXPb7GSaXrIamTiGpoD6O0Uwcsx7kgeJwEfisVA4RQ.png');
			text-align:left;
			width: 99.8%;
			
		}

		.toolbar{
			position: absolute;	
			margin-left:-8px;
			margin-top: 40px;
			background-image:url('http://www.precisemaintenance.com/ExcelBI/public/uploads/TXVpJ5UMLkVTOHJL3xZJRg7Rck5HriN3As8SJRkpsCdkKssDy5mpzN9AqYKSCqlOH78CG4gHMsOce9NgJhsXPb7GSaXrIamTiGpoD6O0Uwcsx7kgeJwEfisVA4RQ.png');
			text-align:left;
			width: 99.8%;
			height:35px;
		}

		.left_half{
			position: relative;	
			float: left;
			margin-left: 4px;
			margin-top: 1%;
			background-color:#92c7ff;
			text-align:left;
			width: 49%;
			height:900px;
			overflow: scroll;
		}

		.right_half{
			position: relative;	
			float: right;
			margin-left: 4px;
			margin-top: 1%;
			background-color:#92c7ff;
			text-align:left;
			width: 49%;
			height:900px;
			overflow: scroll;
		}

		.employee_profile{
			position: relative;	
			float: left;
			margin-left: 4px;
			margin-top: 1%;
			background-color:#92c7ff;
			text-align:left;
			width: 100%;
			height:700px;
			overflow: scroll;
		}

		.top_left_1{
			position: relative;	
			float: left;
			margin-left: 4px;
			margin-top: 1%;
			background-color:#92c7ff;
			text-align:left;
			width: 39%;
			height: 100%;
		}

		.top_right_1{
			position: relative;	
			width: 45%;
			height:900px;
			overflow: scroll;
			float:right;
			margin-top:1%;
			margin-left: 4px;
			background-color:#92c7ff;
			text-align:left;
			
		}


		.f1{
			text-align:left;
			font-size: 24px;
		}

		.f2{
			text-align: center;
			font-size: 24px;
			font-weight: bold;
		}

		.f7{
			text-align: center;
			font-size: 30px;
			font-family: Impact;
		}

			.button {
			   border-top: 1px solid #96d1f8;
			   background: #65a9d7;
			   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			   background: -o-linear-gradient(top, #3e779d, #65a9d7);
			   padding: 13px 26px;
			   -webkit-border-radius: 8px;
			   -moz-border-radius: 8px;
			   border-radius: 8px;
			   color: #ffffff;
			   font-size: 20px;
			   font-family: arial;
			   text-decoration: none;
			   vertical-align: middle;
			   }
			.button:hover {
			   border-top-color: #28597a;
			   background: #28597a;
			   color: #ffffff;
			   }
			.button:active {
			   border-top-color: #1b435e;
			   background: #1b435e;
			   }


			.BlueTable {
				margin:0px;padding:0px;
				width:100%;
				text-align: center;
				box-shadow: 10px 10px 5px #888888;

				border:1px solid #ffffff;
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
			}.BlueTable table{
			    border-collapse: collapse;
			        border-spacing: 0;
				width:100%;
				height:100%;
				margin:0px;padding:0px;
			}.BlueTable tr:last-child td:last-child {
				-moz-border-radius-bottomright:0px;
				-webkit-border-bottom-right-radius:0px;
				border-bottom-right-radius:0px;
			}
			.BlueTable table tr:first-child td:first-child {
				-moz-border-radius-topleft:0px;
				-webkit-border-top-left-radius:0px;
				border-top-left-radius:0px;
			}
			.BlueTable table tr:first-child td:last-child {
				-moz-border-radius-topright:0px;
				-webkit-border-top-right-radius:0px;
				border-top-right-radius:0px;
			}.BlueTable tr:last-child td:first-child{
				-moz-border-radius-bottomleft:0px;
				-webkit-border-bottom-left-radius:0px;
				border-bottom-left-radius:0px;
			}.BlueTable tr:hover td{
				background-color:#cccccc;
			}

			.BlueTable td{
				vertical-align:middle;
			

				background-color:#ffffff;
				border:1px solid #ffffff;
				border-width:0px 1px 1px 0px;
				text-align:left;
				padding:7px;
				font-size:16px;
				font-family:Arial;
				font-weight:normal;
				color:#000000;
			}.BlueTable tr:last-child td{
				border-width:0px 1px 0px 0px;

			}.BlueTable tr td:last-child{
				border-width:0px 0px 1px 0px;
			}.BlueTable tr:last-child td:last-child{
				border-width:0px 0px 0px 0px;
			}
			.BlueTable tr:first-child td{
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
			.BlueTable tr:first-child:hover td{
				background:-o-linear-gradient(bottom, #84c1ff 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #84c1ff), color-stop(1, #ffffff) );
				background:-moz-linear-gradient( center top, #84c1ff 5%, #ffffff 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#84c1ff", endColorstr="#ffffff");	background: -o-linear-gradient(top,#84c1ff,ffffff);

				background-color:#84c1ff;
			}
			.BlueTable tr:first-child td:first-child{
				border-width:0px 0px 1px 0px;
			}
			.BlueTable tr:first-child td:last-child{
				border-width:0px 0px 1px 1px;
			}

						

			.BlueTable_fixed {
				margin:0px;padding:0px;
				width:100%;
				text-align: center;
				box-shadow: 10px 10px 5px #888888;
				table-layout: fixed;
				border:1px solid #ffffff;
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
			}.BlueTable_fixed table{
			    border-collapse: collapse;
			        border-spacing: 0;
				width:100%;
				height:100%;
				margin:0px;padding:0px;
			}.BlueTable_fixed tr:last-child td:last-child {
				-moz-border-radius-bottomright:0px;
				-webkit-border-bottom-right-radius:0px;
				border-bottom-right-radius:0px;
			}
			.BlueTable_fixed table tr:first-child td:first-child {
				-moz-border-radius-topleft:0px;
				-webkit-border-top-left-radius:0px;
				border-top-left-radius:0px;
			}
			.BlueTable_fixed table tr:first-child td:last-child {
				-moz-border-radius-topright:0px;
				-webkit-border-top-right-radius:0px;
				border-top-right-radius:0px;
			}.BlueTable_fixed tr:last-child td:first-child{
				-moz-border-radius-bottomleft:0px;
				-webkit-border-bottom-left-radius:0px;
				border-bottom-left-radius:0px;
			}.BlueTable_fixed tr:hover td{
				background-color:#cccccc;
			}

	

			.BlueTable_fixed td{
				vertical-align:middle;
				width:100%;

				background-color:#ffffff;
				border:1px solid #ffffff;
				border-width:0px 1px 1px 0px;
				text-align:left;
				padding:7px;
				font-size:16px;
				font-family:Arial;
				font-weight:normal;
				color:#000000;
			}.BlueTable_fixed tr:last-child td{
				border-width:0px 1px 0px 0px;

			}.BlueTable_fixed tr td:last-child{
				border-width:0px 0px 1px 0px;
			}.BlueTable_fixed tr:last-child td:last-child{
				border-width:0px 0px 0px 0px;
			}
			.BlueTable_fixed tr:first-child td{
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
			.BlueTable_fixed tr:first-child:hover td{
				background:-o-linear-gradient(bottom, #84c1ff 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #84c1ff), color-stop(1, #ffffff) );
				background:-moz-linear-gradient( center top, #84c1ff 5%, #ffffff 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#84c1ff", endColorstr="#ffffff");	background: -o-linear-gradient(top,#84c1ff,ffffff);

				background-color:#84c1ff;
			}
			.BlueTable_fixed tr:first-child td:first-child{
				border-width:0px 0px 1px 0px;
			}
			.BlueTable_fixed tr:first-child td:last-child{
				border-width:0px 0px 1px 1px;
			}






			.BaseTable {
				margin:0px;padding:0px;
				width:100%;
				-moz-border-radius-bottomleft:9px;
				-webkit-border-bottom-left-radius:9px;
				border-bottom-left-radius:9px;
				
				-moz-border-radius-bottomright:9px;
				-webkit-border-bottom-right-radius:9px;
				border-bottom-right-radius:9px;
				
				-moz-border-radius-topright:9px;
				-webkit-border-top-right-radius:9px;
				border-top-right-radius:9px;
				
				-moz-border-radius-topleft:9px;
				-webkit-border-top-left-radius:9px;
				border-top-left-radius:9px;
			}.BaseTable table{
			    border-collapse: collapse;
			    border-spacing: 0;
				width:100%;
				height:100%;
				margin:0px;padding:0px;
			}.BaseTable tr:last-child td:last-child {
				-moz-border-radius-bottomright:9px;
				-webkit-border-bottom-right-radius:9px;
				border-bottom-right-radius:9px;
			}
			.BaseTable table tr:first-child td:first-child {
				-moz-border-radius-topleft:9px;
				-webkit-border-top-left-radius:9px;
				border-top-left-radius:9px;
			}
			.BaseTable table tr:first-child td:last-child {
				-moz-border-radius-topright:9px;
				-webkit-border-top-right-radius:9px;
				border-top-right-radius:9px;
			}.BaseTable tr:last-child td:first-child{
				-moz-border-radius-bottomleft:9px;
				-webkit-border-bottom-left-radius:9px;
				border-bottom-left-radius:9px;
			}.BaseTable tr:hover td{
				background-color:#ffffff;
					

			}
			.BaseTable td{
				vertical-align:left;
				
				background-color:#9fcdfc;

				border-width:0px 1px 1px 0px;
				text-align:left;
				padding:1px;
				font-size:14px;
				font-family:Arial;
				font-weight:normal;
				color:#000000;
			}.BaseTable tr:last-child td{
				border-width:0px 1px 0px 0px;
			}.BaseTable tr td:last-child{
				border-width:0px 0px 1px 0px;
			}.BaseTable tr:last-child td:last-child{
				border-width:0px 0px 0px 0px;
			}



				background-color:#a5d2ff;
			}
			.BaseTable tr:first-child td:first-child{
				border-width:0px 0px 1px 0px;
			}
			.BaseTable tr:first-child td:last-child{
				border-width:0px 0px 1px 1px;
			}




		a, a:visited {
			text-decoration:none;
		}

		h1 {

			font-size: 32px;
			margin: 16px 0 0 0;
			margin-left: 15px;
		}

		h2 {

			font-size: 24px;
			margin: 16px 0 0 0;
			margin-left: 15px;
		}

		h3 {
			font-size: 18px;
			margin:16px 0 0 0;
			margin-left: 15px;
		}
		h4 {
			font-size:14px;
			margin:16px 0 0 0;
			margin-left: 15px;
		}

		h5 {
			font-size:24px;
			text-align:"center";
		}
	</style>
</head>
<div class="topbar">


	
{{-- ALL THE TOP BAR LINKS GO HERE --}}

		<a class="button" href={{ URL::route('user_list')}}> Employee List</a>
		<a class="button" href={{ URL::route('make_user')}}>Add Employee</a>
		<a class="button" href={{ URL::route('make_cert')}}>Qualifications</a>
		<a class="button" {{link_to_route('logout', 'Log Out')}}
</div>

</html>