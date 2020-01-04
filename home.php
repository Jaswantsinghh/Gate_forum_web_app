<?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>GATE FORUM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-color: #7FFF00">
	<nav class="navbar navbar-inverse" >
        <div class="container-fluid">
            <ul class="nav navbar-nav bg-info" style="float:right">
                <li><a href="question.php"><b>ASK QUESTION</b></a></li>
            </ul>
        </div>
    </nav>
     <br><br><br><br><br><br>
        <div class="container">
            <h1  style="text-align: center"> <b><u>GATE QUESTION FORUM</u></b></h1>
            <div class="jumbotron">
                <h3 style="text-align: center"><b><i><u>Questions & Answers</u></i></b></h3>
                <?php
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

$sql = "SELECT id, que, name, email FROM questionaddition";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?>
                <br><br>
        <div class="bg-info" style="border: 5px solid blue; padding: 10px;">
            <form method="post" action="answer.php">
                <br><b> Question id:</b> <?php echo $row["id"]; ?> 
                <br><b> Question:</b> <?php echo $row["que"]; ?> 
                <br><b> Asked by:</b> <?php echo $row["name"]; ?> 
                <br><b> Email:</b> <?php echo $row["email"]; ?>   <br>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/><br>
                <button type="submit" class="btn btn-primary btn-small" >ANSWER</button><br><br>
            </form>
        </div>
        <?php
        $queid = $row["id"];
        $ql = "SELECT * FROM answers WHERE qid = '$queid'";
$resul = $conn->query($ql);

if ($resul->num_rows > 0) {
    // output data of each row
    while($ro = $resul->fetch_assoc()) {
        echo "<div class=\"bg-danger tabcontent\" style=\"border: 5px solid red; padding: 10px; margin-left: 15px;\">";
        echo "<form>";
        echo "<br><b> Answer id:</b> ". $ro["id"] . "<br><b> Answer:</b> ". $ro["answer"] . "<br><b> Time required(mins):</b> " . $ro ["timerq"] . "<br><b> Difficlty Level:</b> ". $ro["diff"] ."<br><b> Answered by:</b> " . $ro["name"] . "<br><b> Email:</b> " . $ro["email"] ."<br>" ;
        echo "<br></form></div>";
    }
} else {
    echo "<div class=\"bg-danger tabcontent\" style=\"border: 5px solid red; padding: 10px; margin-left: 15px;\"><i>yet no answer</i></div>";
}
     
endwhile;
     ?><br><br>
                
        <div class="container-fluid">
            <ul class="nav navbar-nav " style="float:right; background: yellow;">
                <li>USER: <?php echo $_SESSION['username']; ?></li>
                <li><a href="logout.php"><b>LOGOUT</b></a></li>
            </ul>
        </div>
        </div>
    </div>
</body>
</html>