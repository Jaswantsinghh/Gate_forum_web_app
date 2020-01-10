<?php session_start(); ?>
<?php if (!isset($_SESSION['username'])) {

    header('location:index.html');
}?>
<!DOCTYPE html>
<html>
    <head>
    
        <mata charset= "utf-8"></mata>
        <title> GATE FORUM </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body style="background-color: #7FFF00">
          <br><br><br><br><br><br>
        <div class="container text-center">
            <h1 style="color: blue;"><u><b> GATE QUESTIONS</b></u></h1>
            <div class="jumbotron" style="background-color: black;">
                <h3 style="color: red;">Add New Question </h3>
                <form method="post" action="addquestion.php">
                    <div class ="form-group">
                       <lable style="color: green;">Question</lable>
                        <input type="text" name="ques" class="form-control" placeholder="Enter your question here" required>
                    </div>
                   <!-- <div class ="form-group">
                        <lable>Your Name</lable>
                        <input type="text" name="nm" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class ="form-group">
                        <lable >Your Email</lable>
                        <input type="email" name="mail" class="form-control" placeholder="Enter your email" required>
                    </div> -->
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
          </div>
        </div>
    </body>
</html>
