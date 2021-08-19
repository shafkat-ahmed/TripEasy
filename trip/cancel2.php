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
			float: left;
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
			<li><a href="http://localhost/trip/select.php"> Home</a></li>
			<li><a href="http://localhost/trip/cancel1.php"> Review Trip </a></li>
			<li><a href="http://localhost/trip/logout.php"> Log Out </a></li>
		</ul>
</div>
<form method="Post" action="cancel2.php">

<?php
$phone=$_SESSION["un"];
$date=date("y-m-d");
$cdate=date('Y-m-d', strtotime($date. ' + 3 days'));
if(empty($_POST['Select'])) {
	echo "Did Not Tick Box Or No Bookings To delete";
}
else{

    foreach($_POST['Select'] as $selected) {
        $_SESSION["id"]=$selected;
        $result2=mysqli_query($conn,"SELECT * from triplist WHERE phone='$phone'") or die("could not query database");
        if(empty($result2))
        {
        	echo "No trips booked to show";
        }
        else{
        $row=mysqli_fetch_array($result2);
        if(strtotime($row['sdate'])>strtotime($cdate))
        {
    	$result=mysqli_query($conn,"DELETE from triplist WHERE phone='$phone'") or die("could not query database");
    	if(!empty($result))
    	{
    		echo "Booking cancelled successfully";
    	}
    	else
    	{
    		echo "pera";
    	}
        }
        else
        {
        	echo "Sorry. You must cancel booking atleast 3 days before the appointed day";
        }
    }
}
}
?>
</form>
</body>
</html>
