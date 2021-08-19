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
			height: 150px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 130px;
		    margin-left: 400px;
		    text-align: center;
		    text-transform: uppercase;
	}
	input[type="submit"]
		{
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
	<form method="Post" action="guide.php">
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
			<td ><input type="submit" name="sub" value ="LOGIN"></td> 
			</tr>
		</table>
	</form>
</div>
</body>
</html>