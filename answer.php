
<!DOCTYPE html>
<html>
<head>
	<title>GATE FORUM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="#">
</head>
<body style="background-color: #7FFF00">
	 <br><br><br><br><br><br>
        <div class="container">
            <h1  style="text-align: center"> <b>GATE QUESTION FORUM</b></h1>
            <div class="jumbotron">
                <h3 style="text-align: center">ANSWER</h3>
<?php
include 'database.php';
$name = $_POST['id'];

$sql = "SELECT id, que, name, email FROM questionaddition WHERE id = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?> 
        <div class="bg-info">
            <form >
                <br><b>* Question id:</b> <?php echo $row["id"]; ?> 
                <br><b>* Question:</b> <?php echo $row["que"]; ?> 
                <br><b>* Asked by:</b> <?php echo $row["name"]; ?> 
                <br><b>* Email:</b> <?php echo $row["email"]; ?>   <br>
                <br><br>
            </form>
        </div><br><br>
        <?php 
endwhile;
     ?>
       
                <form method="post" action="answeradd.php">
                    <div class ="form-group">
                        <lable >Solution</lable>
                        <input type="text" class="form-control" placeholder="Enter the solution if you know" name="sol" required>
                    </div>
                    <div class ="form-group">
                        <lable>Time Required In Minutes  </lable>
                            <select name="tm" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                    </div>
                    <div class ="form-group">
                        <lable>Difficulty level</lable>
                        <select name="dif" required>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div> 
                    <div class ="form-group">
                        <lable>Your Name</lable>
                        <input type="text" name="nm" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class ="form-group">
                        <lable >Your Email</lable>
                        <input type="email" name="mail" class="form-control" placeholder="Enter your email" required>
                    </div>
                     <input type="hidden" name="id" value="<?php echo $name;?>">
    
                   
                    <button type="submit" class="btn btn-primary">ANSWER</button>
                </form>
 
              </div>
        </div>

     

</body>

</html>
