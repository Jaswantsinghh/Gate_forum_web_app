<?php
session_start();

include 'database.php';
 
$name = $_POST['user'];
$pass = $_POST['pass'];
$mob  = $_POST['pn'];
$secu  = $_POST['sq'];

$sql = "INSERT INTO signin (username,password,mobile,security)
VALUES ('$name', '$pass','$mob','$secu')";
$q = "select * from signin where username = '$name'";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
	echo "Try any other username";
} else {
	$qy = "insert into signin(username,password,mobile,security) values ('$name','$pass','$mob','$secu')";
	mysqli_query($conn,$qy);
	header('location:signin.php');
	 
}
?>
