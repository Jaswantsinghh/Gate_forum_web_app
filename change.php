<!DOCTYPE html>
<html>
    <head>
        <title>Forgot password</title>
        <link rel="stylesheet" type="text/css" href="instyle.css">
        <script language="javascript">
        function check()
{
if(document.passform.cpass.value!=document.passform.npass.value)
  {
    alert("Confirm Password does not matched");
    document.passform.cpass.focus();
    return false;
  } 
   return true;
    }
</script>
    </head>
    <body>
        <div class="loginbox">
        <img src="image/dribbble.jpg" class="avtar">
        <h1>Change Password</h1>
        <form method="post" action="chngpass.php" onSubmit="return check();" name="passform">
                <input type="text" name="user" placeholder="Confirm username" required>
                <br>
                <input type="password" name="npass" placeholder="Enter New Password" required>
                <br>
                <input type="password" name="cpass" placeholder="Confirm Password " required>
                <br>
                <input type="submit" name="submit" value="Change Password">
        </form>   
        </div>
    </body>
</html>
