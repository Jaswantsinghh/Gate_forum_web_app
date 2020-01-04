<?php

session_start();
include 'database.php';
$name = $_POST['user'];
$pass = $_POST['pass'];

$sql = "INSERT INTO signin (username,password)
VALUES ('$name', '$pass')";

$q = "select * from signin where username = '$name' && password = '$pass'";

$result = mysqli_query($conn,$q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username'] = $name;
	header('location:home.php');
	//echo "correct information";
} else {
	header('location:warning.html');
	//echo "incorrect information";
}

?>
