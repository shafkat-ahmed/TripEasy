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
	.box {
		    
			width: 600px;
			height: 200px;
			background-color: black;
			opacity: 0.9;
			padding: 55px;
			float: left;
			border-radius: 10px;
		    color: white;
		    margin-top: 50px;
		    margin-left: 260px;
		    text-align: center;
		}
		body
		{
			background-color: orange;
		}
</style>
<body>
<form method="Post" action="book2.php">

<?php
$phone=$_SESSION["un"];
if(empty($_POST['Select'])) {
	echo "Did Not Tick Box";
}
else{
    foreach($_POST['Select'] as $selected) {
        $_SESSION["id"]=$selected;
    	?><div class="box"><p>Start trip at: </p><input type="date" name="date1" class="date">
    	  <p>End trip at: </p><input type="date" name="date2" class="date">
    	  <p>Book Rooms: </p><input type="number" name="num">
    	  <input type="submit" name="sub2"></div><?php
    }
}
?>
</form>
</body>
</html>
