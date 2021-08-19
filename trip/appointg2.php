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
			
		}
		tr{
		    
			width: 500px;
			height: 10px;
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
			border:10px solid;
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
<form method="Post" action="finalappointment.php">
<?php
    $phone=$_SESSION["un"];
    $lid=$_SESSION["id"];
     if(isset($_POST["search"]))
     {
     	if($_POST["s"])
     	{
     		$location=$_POST["search"];
     		$result = mysqli_query($conn,"Select * from guide where location='$location' and available='1'")
            or die('Failed to query database');
 
 if (empty($result)) { 
 	"Sorry, No Guide Currently Available On That Area.";
 }
 else{
  echo "<table>";
		  
			while($row = mysqli_fetch_array($result))
			{
				$id=$row[0];
				$name=$row[1];
				$phone=$row[2];
				$location=$row[4];
				$cost=$row[6];
				
			    echo "<div class='box'>";
				echo "<tr><td>".$name."</td><td>".$phone."</td><td>".$location."</td><td>".$cost."</td><td>";?><input type="checkbox" name="Select[]" value="<?php echo $id?>"><?php echo "</td><td>"; ?><input type="submit" class="book" name="sub"><?php echo "</td></tr>";
				echo "</div>";
			
			}
		echo "</table>";	
 
    }
  }
   
}


?>
</form>
</body>
</html>
