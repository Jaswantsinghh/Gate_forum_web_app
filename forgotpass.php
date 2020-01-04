<?php 

include 'database.php';
 
$name = $_POST['user'];
$secu  = $_POST['sq'];

$sql = "INSERT INTO signin (username,password)
VALUES ('$name','$secu')";

$q = "select * from signin where username = '$name' && security = '$secu'";

$result = mysqli_query($conn,$q);

$num = mysqli_num_rows($result);

if ($num == 1) {
    header('location:change.php');
    
} else {
    header('location:incorrect.php');  
}

?>
