<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Appoint Guide</title>
	<link rel="stylesheet" type="text/css">  
</head>
<style type="text/css">
	body{
		background-color: orange;
	}
	h2
	{
		margin-top: 50px;
	}
	input[type="submit"]
	{
		margin-top: 10px;
	}
	.content {
		    
			width: 300px;
			height: 200px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 100px;
		    margin-left: 400px;
		    text-align: center;
		}
		.yes
		{
			position: relative;
			border-radius:25px 0 0 25px;
			width: 130px;
			height: 40px;
			border:1px solid black;
			outline: none;
			cursor: pointer;
			background: #ffc107;

		}
		.no
		{
			position: relative;
			border-radius:0 25px 25px 0;
			width: 130px;
			height: 40px;
			border:1px solid black;
			outline: none;
			cursor: pointer;
			background: #ffc107;


		}
		.box {
		    
			width: 600px;
			height: 200px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 50px;
		    margin-left: 260px;
		    text-align: center;
		}
</style>
<body>
<div class="content">
	<form method="Post" action="guideq.php">
		<h2>Appoint Guide?</h2>
		<input type="submit" class= "yes" value="Yes" name="y"><input type="submit" class= "no" value="No " name="n">
		<?php
		if($_POST["y"])
		{
			  header("Location:http://localhost/trip/appointg.php");

		}
		elseif ($_POST["n"]) {
			  header("Location:http://localhost/trip/finalappointment.php");
		}
		?>

	</form>
</div>
</body>
</html>