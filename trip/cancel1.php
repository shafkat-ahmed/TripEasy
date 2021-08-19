<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Booked Trips</title>
	
</head>
<style>
	table
	{
		border-collapse: collapse;
	}
	th tr{
		    
			width: 1000px;
			height: 200px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 5px;
		    margin-left: 42px;
		}
		td{
			text-align: center;
			border:50px solid;
			border-color: black;
			background-color: black;
			color: white;

		}
		body
		{
			background-color: orange;
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
		
		

</style>
<body>
<form method="Post" action="cancel2.php">	
<?php
$phone=$_SESSION["un"];
$date=date("y-m-d");

 //global $Location = ($Post['Location']);
    
  $result = mysqli_query($conn,"Select * from triplist JOIN spot on triplist.location_id=spot.id and phone='$phone'")
  or die('Failed to query database');
 
 if (!$result) {
 }
 else{
  echo "<table><tr><th>Room</th><th>Hotel</th><th>Location</th><th>Start Date</th><th>End Date</th><th>Cost(TK/Day)</th><th>SelectBox</th></tr>";
		  
			while($row = mysqli_fetch_array($result))
			{
				$count=$row[2];
				$sdate=$row[3];
				$edate=$row[4];
				$tcost=$row[6];
				$location=$row[9];
				$hotel=$row[10];
				$pic=$row[12];
			    echo "<div class='box'>";
				echo "<tr><td>";?><img src="<?php echo $pic;?>" height="200" width="300" ><?php echo"</td><td>".$hotel."</td><td>".$location."<td>".$sdate."</td><td>".$edate."</td><td>".$tcost."</td><td>";?><input type="checkbox" name="Select[]" value="<?php echo $id?>"><?php echo "</td><td>"; ?><input type="submit" name="sub" value='Cancel Trip'><?php echo "</td></tr>";
				echo "</div>";
			}
			echo "</table>";
			
 
    }
?>
</form>
</body>
</html>