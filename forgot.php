<!DOCTYPE html>
<html>
    <head>
        <title>Forgot password</title>
        <link rel="stylesheet" type="text/css" href="instyle.css">
    </head>
    <body>
        <div class="loginbox">
        <img src="image/dribbble.jpg" class="avtar">
        <h1>Retrive Password</h1>
        <form method="post" action="forgotpass.php">
                <input type="text" name="user" placeholder="Enter username" required>
                <br>
                <input type="text" name="sq" placeholder="enter your security question" required>
                <br>
                <input type="submit" name="submit" value="Continue">
        </form>   
        </div>
    </body>
</html>
