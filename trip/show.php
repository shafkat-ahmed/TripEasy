<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
	
</head>
<style>
	tr{
		    
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
			border:20px solid;
			border-color: black;

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
<form method="Post" action="book.php">	
<?php
$phone=$_SESSION["un"];
if($_POST['sub'])
{
	
  $result = mysqli_query($conn,"Select * from spot")
  or die('Failed to query database');
 
 if (!$result) {
 }
 else{
  echo "<table>";
		  
			while($row = mysqli_fetch_array($result))
			{
				$id=$row[0];
				$division=$row[1];
				$location=$row[2];
				$hotel=$row[3];
				$cost=$row[4];
				$pic=$row[5];
			    echo "<div class='box'>";
				echo "<tr><td>";?><img src="<?php echo $pic;?>" height="200" width="300" ><?php echo"</td><td>".$division."</td><td>".$location."<td>".$hotel."</td><td>".$cost."</td><td>";?><input type="checkbox" name="Select[]" value="<?php echo $id?>"><?php echo "</td><td>"; ?><input type="submit" name="sub" value='Book Trip'><?php echo "</td></tr>";
				echo "</div>";
			}
			
 
    }
 }

else if($_POST['s'])
{
	if(isset($_POST['search']))
	{
 //global $Location = ($Post['Location']);
     $location = $_POST['search'];
    
  $result = mysqli_query($conn,"Select * from spot where location='$location'")
  or die('Failed to query database');
 
 if (!$result) {
 }
 else{
  echo "<table>";
		  
			while($row = mysqli_fetch_array($result))
			{
				$id=$row[0];
				$division=$row[1];
				$location=$row[2];
				$hotel=$row[3];
				$cost=$row[4];
				$pic=$row[5];
			    echo "<div class='box'>";
				echo "<tr><td>";?><img src="<?php echo $pic;?>" height="200" width="300" ><?php echo"</td><td>".$division."</td><td>".$location."<td>".$hotel."</td><td>".$cost."</td><td>";?><input type="checkbox" name="Select[]" value="<?php echo $id?>"><?php echo "</td><td>"; ?><input type="submit" name="sub" value='Book Trip'><?php echo "</td></tr>";
				echo "</div>";
			}
			
 
    }
  }
}
?>
</form>
</body>
</html>