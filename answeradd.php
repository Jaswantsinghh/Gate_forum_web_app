<?php

include 'database.php';
$name = $_POST['id'];
$ans = $_POST['sol'];
$time = $_POST['tm'];
$di = $_POST['dif'];
$aname = $_POST['nm'];
$amail = $_POST['mail'];

$sql = "INSERT INTO answers(qid,answer,timerq,diff,name,email) VALUES ('$name','$ans','$time','$di','$aname','$amail')";

if ($conn->query($sql) === TRUE) {
   // $last_id = $conn->insert_id;
    header('location:home.php');
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	




?>
