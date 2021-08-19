<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	body
	{
      background-color: #ffc107;
	}
	.box
	{
		    width: 300px;
			height: 100px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 150px;
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
			background-color: lime;
		}
</style>
<body>
<div class="box">
<form method="Post" action="guidep.php">
	<?php 
 // to get values passe from form in login.php file
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
 $result = mysqli_query($conn,"Select * from guide where phone = '$phone' and pass = '$password'")
  or die('Failed to query database');
 $row = mysqli_fetch_array($result);
 if ( !($row['phone'] == $phone && $row['pass'] == $password) ) {
 	//echo "<tr>form action= update.php method=post>";
     echo "Failed to login!";
               
				

 } else {
     
      echo "Login success! Welcome ".$row['name'];		  
		        $_SESSION["id"]=$row[0];
                $_SESSION["phone"] = $phone;
                
            }
            ?>
                <p>See All Appoinments?</p>
                <input type="submit" name="sub" value="Show All">

</form>
</div>
</body>
</html>