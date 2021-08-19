<?php
$servername = "localhost";
$username = "root";
$password = "";

$mysqli_db='trip';
// Create connection
$conn = new mysqli($servername, $username, $password, $mysqli_db);
//mysqli_select_db($mysqli_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo " Connected successfully  ";
?>