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
    echo "unsussessful connection";
}

$question = $_POST['ques'];
$qname = $_POST['nm'];
$qmail = $_POST['mail'];

$sql = "INSERT INTO questionaddition(que,name,email) VALUES ('$question','$qname','$qmail')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header('location:home.php');
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	



?>