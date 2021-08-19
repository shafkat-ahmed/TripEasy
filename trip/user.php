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

	
	<?php 
 // to get values passe from form in login.php file
	if($_POST['sub2'])
	{
		header("Location:http://localhost/trip/register.php");
	}
	else
	{
 $phone = "";

if(isset($_POST['un'])){
    $phone = $_POST['un'];
}
 $password = "";
if(isset($_POST['ps'])){
    $password = $_POST['ps'];
 }
 // to prevent mysql injection
 $phone = stripcslashes($phone);
 $password = stripcslashes($password);
 $phone = mysqli_real_escape_string($conn,$phone);
 $password = mysqli_real_escape_string($conn,$password);

 //connect to the server select database

 // Query the database for user
 $result = mysqli_query($conn,"Select * from user where phone = '$phone' and pass = '$password'")
  or die('Failed to query database');
 $row = mysqli_fetch_array($result);
 if ( (!empty($row))&&($row['phone'] == $phone && $row['pass'] == $password) ) {
 	//echo "<tr>form action= update.php method=post>";	  
		  
				
				$name=$row[0];
				$loc=$row[1];
				
				
                $_SESSION["un"] = $phone;
                header("Location:http://localhost/trip/select.php");
               
				

 } else {
     echo "Failed to login!Try again";
       header("Location:http://localhost/trip/ulogin.php");
}
}

?>

</body>
</html>