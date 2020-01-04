<?php
include 'database.php';
include 'forgot.php';
        $name = $_POST['user'];
        $newpassword = $_POST['npass'];

        $sql=mysqli_query($conn,"UPDATE signin SET password = '$newpassword' WHERE username='$name'");
        if($sql)
        {
        echo '<h1 style="top:16%;right:50%;" >Congratulations You have successfully changed your password</h1>';
        echo "<script>location.href='signin.php'</script>";
       }
       else
        {
        echo "<script>location.href='incorrect.php'</script>";
       }
?>
