<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gatelogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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