<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css">  
</head>
<style type="text/css">
	body
	{
      background-color: #ffc107;
	}
	.content
	{
		    width: 300px;
			height: 200px;
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
			margin-top: 10px;
			position: relative;
			border-radius:25px 25px 25px 25px;
			width: 130px;
			height: 40px;
			border:none;
			outline: none;
			cursor: pointer;
			background: #ffc107;


		}
		input[type="submit"]:hover
		{
			background-color: orange;
		}
</style>
<body>
	<div class="content">
	<form method="Post" action="user.php">
		<br>
		<table align="center">
			<tr>
				<td width="200px" height="50px"><p>Phone Number</p></td>
				<td width="100px" height="50px"><input type="text" name="un" placeholder="Enter username" ></td>
			</tr>
			<tr>
				<td width="200px" height="50px"><p>Password</p></td>
				<td width="100px" height="50px"><input type="password" name="ps" placeholder="Enter Password"></td>
			</tr>
			<tr>
			<td ><input type="submit" name="sub" value ="LOGIN"><input type="submit" name="sub2" value ="Signup"></td> 
			</tr>
		</table>
	</form>
</div>
</body>
</html>