<?php
session_start();

include 'database.php';
 
$user = $_POST['user'];
$pass = $_POST['pass'];
$name = $_POST['nm'];
$mail = $_POST['email'];
$mob  = $_POST['pn'];
$secu  = $_POST['sq'];

$sql = "INSERT INTO signin (username,password,name,email,mobile,security)
VALUES ('$user', '$pass','$name','$mail','$mob','$secu')";
$q = "select * from signin where username = '$name'";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
	echo "Try any other username";
} else {
	$qy = "insert into signin(username,password,name,email,mobile,security) values ('$user','$pass','$name','$mail','$mob','$secu')";
	mysqli_query($conn,$qy);
	header('location:signin.php');
	 
}
?>
