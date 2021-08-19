<?php
 
 include('connection.php');
 error_reporting();
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		table
		{
			border-collapse: collapse;
			margin-left: 200px;
		}
		th tr {
		    
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
			border:30px solid;
			border-color: black;
			border-spacing: 50px;
			background-color: black;
			color: white;

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
<form method="Post" action="finalappointment.php">
<?php
    $phone=$_SESSION["phone"];
    $id=$_SESSION["id"];
    $date= date("y-m-d");
     	if($_POST["sub"])
     	{
     		$result = mysqli_query($conn,"Select * from triplist JOIN user on triplist.phone=user.phone and guideid='$id'")
            or die('Failed to query database');
 
 if (empty($result)) { 
 	"Sorry, No Guide Currently Available On That Area.";
 }
 else{
  echo "<table><tr><th>Name</th><th>Address</th><th>Phone</th><th>Mail</th><th>Start Date</th><th>End Date</th></tr>";
		  
			while($row = mysqli_fetch_array($result))
			{
				$phone=$row[0];
				$sdate=$row[3];
				$edate=$row[4];
				$name=$row[7];
				$address=$row[8];
				$mail=$row[9];
				
			    echo "<div class='box'>";
				echo "<tr><td>".$name."</td><td>".$address."</td><td>".$phone."</td><td>".$mail."</td><td>".$sdate."</td><td>".$edate."</td></tr>";
				echo "</div>";
			
			}
		echo "</table>";	
 
    }
  }
   
?>
</form>
</body>
</html>
