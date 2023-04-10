<?php
session_start();
include('../control/Log_che.php');
?>
<!DOCTYPE html>
<html>




<body style="background-color:#E5E4E2">
    <div class="header">
        <h1 style="background-color:white">Smart University System </h1>
    </div>



        
            <h2 > Sign In </h2>
            <form action="" method="post" onsubmit="return validateForm()">
                <input type="text" name="username" id="username" placeholder="Email or Id"><?php echo $UserNameError ?>
                <input type="password" name="password" id="password" placeholder="Password"><?php echo $PasswordError ?>

                <input type="submit" id="submit" name=submit value="Log In">
            </form>
    
    <br><br><br><br><br><br>

</body>

</html>