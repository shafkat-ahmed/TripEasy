<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
	
</head>
<style type="text/css">
	.box{
			width: 700px;
			float: right;
			border:1px solid black;
			border-radius: 25px 25px 25px 25px;
			background-color: white;
		}
		.box ul li{
			width: 120px;
			float: left;
			margin:10px auto;
			text-align: center; 
		}
		.box ul li a{
			text-decoration: none;
			color: darkgray;
		}
		.box ul li:hover{
			background-color: #ffc107;
			border-radius: 25px;
		} 
		.box ul li a:hover{color: white;}
		body
		{
			background-color: orange;
		}
</style>
<body>
<div class="box">
		<ul type= "none">
			<li><a href="http://localhost/trip/profile.php"> Profile</a></li>
			<li><a href="http://localhost/trip/appointg.php"> Appoint Guide</a></li>
			<li><a href="http://localhost/trip/select.php">Home</a></li>
			<li><a href="http://localhost/trip/cancel1.php"> Review Trip </a></li>
			<li><a href="http://localhost/trip/logout.php"> Log Out </a></li>
		</ul>
</div>
<div>
<p>Booking Completed! Check Review Trip For Authentication</p>
</div>
<form method="Post" action="finalappointment2.php">

</form>
</body>
</html>
