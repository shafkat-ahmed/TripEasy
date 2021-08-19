<?php
include ('connection.php');
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

<form method="Post" action="logout.php">	
	<?php 
 // to get values passe from form in login.php file
	session_unset();
	session_destroy();
	
		header("Location:http://localhost/trip/index.php");
	?>
</form>
</body>
</html>