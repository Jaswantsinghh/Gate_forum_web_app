<?php
session_start();

header('location:signin.php');

include("database.php");

$name = $_POST['user'];
$pass = $_POST['pass'];

$sql = "INSERT INTO signin (username,password)
VALUES ('$name', '$pass')";

$q = "select * from signin where username = '$name' && password = '$pass'";

$result = mysqli_query($conn,$q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Try any other username or password";
} else {
	$qy = "insert into signin(username,password) values ('$name','$pass')";
	mysqli_query($conn,$qy);
	 
}

?>
