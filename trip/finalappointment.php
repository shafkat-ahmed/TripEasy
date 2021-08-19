<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
	
</head>
<style type="text/css">
	.box{
			width: 700px;
			float: right;
			border:1px solid black;
			border-radius: 25px 25px 25px 25px;
			background-color: white;
		}
		.box ul li{
			width: 120px;
			float: left;
			margin:10px auto;
			text-align: center; 
		}
		.box ul li a{
			text-decoration: none;
			color: darkgray;
		}
		.box ul li:hover{
			background-color: #ffc107;
			border-radius: 25px;
		} 
		.box ul li a:hover{color: white;}
		body
		{
			background-color: orange;
		}
</style>
<body>
<div class="box">
		<ul type= "none">
			<li><a href="http://localhost/trip/profile.php"> Profile</a></li>
			<li><a href="http://localhost/trip/appointg.php"> Appoint Guide</a></li>
			<li><a href="http://localhost/trip/select.php">Home</a></li>
			<li><a href="http://localhost/trip/cancel1.php"> Review Trip </a></li>
			<li><a href="http://localhost/trip/logout.php"> Log Out </a></li>
		</ul>
</div>
<form method="Post" action="finalappointment.php">

<?php
$phone=$_SESSION["un"];
$lid=$_SESSION["id"];
$date1= date("y-m-d");
$date2= date("y-m-d");
$sdate= date("y-m-d");
$edate= date("y-m-d");
if($_POST['sub'])
{
if(empty($_POST['Select'])) {
	echo "Did Not Tick Box";
}
else{
    foreach($_POST['Select'] as $gselected) {
        $_SESSION["gid"]=$gselected;
    	$result = mysqli_query($conn,"Select * from triplist where phone='$phone'")
  or die('Failed to query database');
		  while ($row = mysqli_fetch_array($result))
		  {
				$sdate=$row[3];
				$edate=$row[4];
				$totalcost=$row[6];
			}
			$result = mysqli_query($conn,"Select * from triplist where guideid='$gselected'")
  or die('Failed to query database');
		  while ($row = mysqli_fetch_array($result))
		   {
				$date1=$row[3];
				$date2=$row[4];
				
			}
			if(($date2>=$sdate& $sdate>=$date1) | ($date2>=$edate& $edate>=$date1)  )
			{
				echo "Select another guide";

			}
			else
			{

				$sql="UPDATE triplist SET guideid='$gselected' WHERE phone='$phone' and location_id='$lid'";
                $data= mysqli_query($conn,$sql);
                if($data){
        	    echo "BOOKING PROCEDURE COMPLETED!!
        	    Check Review Trip for Authentication.";
       
                }
           else{
        	echo "data not inserted  ";
            }
		}

}
}
}
?>
</form>
</body>
</html>
