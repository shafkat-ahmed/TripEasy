<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	
</head>
<style type="text/css">
	body
	{
      background-color: #ffc107;
	}
	table
	{
      border-spacing: 20px;
	}
	.content
	{
		    width: 300px;
			height: 290px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 70px;
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
	

 
<form method="Post" action="register.php" class="content">
	
	<table>
		
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" class="textInput"></td>
		</tr>
		<tr>
		
			<td>Location:</td>
			<td><input type="text" name="address" class="textInput"></td>
		</tr>
		<tr>
		
			<td>Mail Address:</td>
			<td><input type="text" name="mail" class="textInput"></td>
		</tr>
		<tr>
		
			<td>Phone Number:</td>
			<td><input type="text" name="phone" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="Password" name="pass" class="textInput"></td>
		</tr>
			<td></td>
		</tr>
	</table>
	   <input type="submit" name="register_btn" class="Register" value="Register">
</form>
<?php
if($_POST['register_btn']){

 //global $Location = ($Post['Location']);
     $Name = $_POST['name'];
     $Location=$_POST['address'];
     $Mail = $_POST['mail'];
     $Phone=$_POST['phone'];
     $Password=$_POST['pass'];
     $_SESSION["un"]=$Phone;
  
        $sql="INSERT Into user Values ('$Name','$Location','$Mail','$Phone','$Password')";
        $data= mysqli_query($conn,$sql);
        if($data){
        	header("Location:http://localhost/trip/select.php");
       
        }
        else{
        	echo "data not inserted  ";
        }
    }
?>
</body>
</html>
