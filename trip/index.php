<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	
</head>
<style type="text/css">
	body
	{
		background-color: #ffc107;
	}
	.content
	{
		    width: 300px;
			height: 100px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 110px;
		    margin-left: 400px;
		    text-align: center;
		    text-transform: uppercase;
	}
	input[type="submit"]
		{
			margin-top: 20px;
			position: relative;
			border-radius:25px 25px 25px 25px;
			width: 130px;
			height: 40px;
			border:none;
			outline: none;
			cursor: pointer;
			background: #ffc107;
			text-transform: uppercase;



		}
		input[type="submit"]:hover
		{
			background-color: orange;
		}
</style>
<body>
	<div class="content">
	<form method="Post">
		<br>
		
			
				<input type="submit" name="user" value="Login as user">
			
				<input type="submit" name="guide" value="Login as guide">
			
	</form>
</div>
<?php
if ($_POST["user"])
{
	header("Location:http://localhost/trip/ulogin.php");
}
else if($_POST["guide"])
{
	header("Location:http://localhost/trip/glogin.php");
}
?>
</body>
</html>