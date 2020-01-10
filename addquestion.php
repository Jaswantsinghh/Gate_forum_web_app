<?php session_start(); ?>
<?php

include 'database.php';

$u = $_SESSION['username'];

$sql = "SELECT name, email FROM signin WHERE username = '$u'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) {
        	$qname = $row["name"];
			$qmail = $row["email"];

        }


$question = $_POST['ques'];
//$qname = $_POST['nm'];
//$qmail = $_POST['mail'];

$sql = "INSERT INTO questionaddition(que,name,email) VALUES ('$question','$qname','$qmail')";

if ($conn->query($sql) === TRUE) {
   // $last_id = $conn->insert_id;
    header('location:home.php');
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	



?>
