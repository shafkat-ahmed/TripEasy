<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			font-family: latha;
			color: white;
			background-image:linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65),rgba(0,0,0,.38),rgba(0,0,0,0)),url("trip2.jpg");
			background-size: cover;
			background-repeat:no-repeat;
			background-attachment: fixed;

		}
		.box{
			width: 700px;
			float: right;
			border:1px solid black;
			border-radius: 25px 25px 25px 25px;
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
		.wd{
			width: 250px;
			height: 540px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		}
		.wd h1{
			text-align: center;
			text-transform: uppercase;
			font-weight: 100px;

		}
		.wd h4{
			text-align: justify;
			color:gray;
			font-weight: normal;
		}
		.box2
		{
			position: absolute; 
			top:30%;
			left: 42%;

		}
		
		input
		{
			position: relative;
			display: inline-block;
			font-size: 20px;
			box-sizing: border-box;
			transition: .5s;
		}
		input[type="text"]
		{
			background: white;
			width: 550px;
			height: 40px;
			border:none;
			outline: none;
			padding: 0 25px;
			border-radius: 25px 0 0 25px;
		}
		.s
		{
			position: relative;
			border-radius:0 25px 25px 0;
            left: -5px;
			width: 130px;
			height: 40px;
			border:none;
			outline: none;
			cursor: pointer;
			background: #ffc107;


		}
		.s:hover
		{
			background-color: orange;
		}
		.sub
		{
			position: absolute;
			border-radius:25px 25px 25px 25px;
			width: 130px;
			height: 40px;
			border:none;
			outline: none;
			cursor: pointer;
			background: #ffc107;
            margin-left: 60px;

		}
		.sub:hover
		{
			background-color: orange;
		}


	</style>	
</head>
<body>
	<div class="box">
		<ul type= "none">
			<li><a href="http://localhost/trip/profile.php"> Profile</a></li>
			<li><a href="http://localhost/trip/appointg.php"> Appoint Guide</a></li>
			<li><a href="http://localhost/trip/select.php"> Home</a></li>
			<li><a href="http://localhost/trip/cancel1.php"> Review Trip </a></li>
			<li><a href="http://localhost/trip/logout.php"> Log Out </a></li>
		</ul>
	</div>
	<form method="Post" action="show.php">
	<div class="wd">
		<h1>  Welcome  </h1>
		<h4>Struggling to manage trips with family and friends? Look nowhere else as tripeasy gives you the best deals in the most affordable prices along with special packages to make your headache regarding planning trip go away. Appoint our trip guides if needed for exploring the sights more and make your trip an unforgettable one with tripeasy. </h4>
		<input type="submit" name="sub" class="sub" value="SHOW ALL">

	</div>
</body>
	 

	    <div class="box2">
	        <input type="text" name="search" placeholder="Enter Loaction">
			<input type="submit" name="s" class="s" value="Search">
		</div>
</form>
</html>
