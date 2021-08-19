<?php
 
 include('connection.php');
 error_reporting();
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		tr{
		    
			width: 600px;
			height: 30px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 10px;
		    
		}
		td{
			text-align: center;
			border:20px solid;
			border-color: black;

		}
		
		.book
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
	    body
	    {
	    	background-color: orange;
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
		.search
		{
			position: relative;
			border-radius:0 25px 25px 0;
            left: -5px;
			width: 130px;
			height: 40px;
			border:none;
			outline: none;
			cursor: pointer;
			background: black;
            color:white;

		}
		input[type="submit"]:hover
		{
			background-color: #ffc107;
		}
		a
		{
			text-decoration: none;
			color :white;
		}
		a:hover
		{
			color:yellow;
		}


	</style>	
</head>
<body>
<form method="Post" action="appointg2.php">
	    <div class="box2">
	        <input type="text" name="search" placeholder="Enter Loaction">
			<input type="submit" name="s" class ="search" value="Search">
		</div>
</form>
</body>
</html>
