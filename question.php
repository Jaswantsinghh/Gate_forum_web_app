<!DOCTYPE html>
<html>
    <head>
    
        <mata charset= "utf-8"></mata>
        <title> GATE </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body style="background-color: #7FFF00">
          <br><br><br><br><br><br>
        <div class="container text-center ">
            <h1> GATE QUESTIONS</h1>
            <div class="jumbotron">
                <h3>Add New Question </h3>
                <form method="post" action="addquestion.php">
                    <div class ="form-group">
                       <lable>Question</lable>
                        <input type="text" name="ques" class="form-control" placeholder="Enter your question here" required>
                    </div>
                 <!--   <div class ="form-group">
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
