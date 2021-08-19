<?php
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style type="text/css">
		body {

			background-color:#ffc107;
		}

		.box {
		    
			width: 300px;
			height: 400px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 50px;
		    margin-left: 400px;
		    text-align: right;
		    font-size: 20px;
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
			margin-right: 75px;
			background: #ffc107;


		}
	</style>

</head>
<body >	
<form method="post"  >
    <?php
    $phone=$_SESSION["un"];
    $name="";
    $address="";
    $mail="";
    $pass="";
    $result = mysqli_query($conn,"Select * from user where phone='$phone'")
    or die('Failed to query database');
 
    if (!$result) {
    }
   else{
		  while($row = mysqli_fetch_array($result))
		  {
		  	$name=$row[0];
		  	$address=$row[1];
		  	$mail=$row[2];
		  	$pass=$row[4];
		  }

		}

    ?>
    <div class="box">
	<p>Name :<input type="text" name="n" class="textInput" value=<?php echo $name;?>></p><br>
	<p>Address :<input type="text" name="a" class="textInput" value=<?php echo $address;?>></p><br>
	<p>Mail Address :<input type="text" name="m" class="textInput" value=<?php echo $mail;?>></p><br>
	<p>Password :<input type="Password" name="p" class="textInput" value=<?php echo $pass;?>></p><br>
	<input type="submit" name="sub" value=UPDATE >
    </form>
	<?php
	
	if($_POST["sub"])
	{
		$sql="UPDATE user Set name ='$_POST[n]',address ='$_POST[a]',mail='$_POST[m]',pass='$_POST[p]' Where phone='$phone'";
		$data=mysqli_query($conn,$sql);
		if($data)
		{
			echo "Updated";
		}
        else{
		echo "NOT UPDATED";
	} 
	
	}
	?>
</div>
</body>
</html>
