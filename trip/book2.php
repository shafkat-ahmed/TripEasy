<?php
 
 include('connection.php');
 error_reporting(0);
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
  
</style>
<body>
</body>
<form method="Post" action="book2.php">
<?php
      $phone=$_SESSION["un"];
      $selected=$_SESSION["id"];
      
    	  if($_POST['sub2'])
     {
      
     	

	if($_POST['date1']>date("Y-m-d") & $_POST['date2']>$_POST['date1'] & $_POST['num']>0)
	{
 //global $Location = ($Post['Location']);
     $date1 = $_POST['date1'];
     $date2=  $_POST['date2'];
     $num=$_POST['num'];
    
  $result = mysqli_query($conn,"Select * from spot where id='$selected'")
  or die('Failed to query database');
 
 if (empty($result)) {
 	echo "hoy nai";
 }
 else{
		  
			while($row = mysqli_fetch_array($result))
			{
				
				$id=$row[0];
				$division=$row[1];
				$location=$row[2];
				$hotel=$row[3];
				$cost=$row[4];
				$pic=$row[5];
				$totalcost=$cost*$num;
				 $result = mysqli_query($conn,"INSERT Into triplist Values('$phone','$id','$num','$date1','$date2','0','$totalcost')")
                 or die('You already have a trip booked.');
                 if(!empty($result))
                 {
                  header("Location:http://localhost/trip/guideq.php");
                 }
                 else
                 {
                 	echo "Resubmit with valid information";
                 }
			  
			}
			
     }
    }

          
   else{
   	echo "Wrong Date Given!";
   }
}
else
{
	echo "goray gondogol";
}
?>
</form>
</html>