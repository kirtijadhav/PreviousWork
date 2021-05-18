<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?>Login Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="body">
    
       <div id="main-wrapper">
            <centre>
                <h2>Login</h2>
                <img src="images/loginimage.png" class="loginimage"/>
            </centre>
            
                 
            <form class="myform" action="index.php" method="post">
                <label><b>Username:</b></label><br>
                <input name="username" type="text" class="inputvalues" placeholder="Enter username" required/><br>
                <label><b>Password:</b></label><br>
                <input name="password" type="password" class="inputvalues" placeholder="Enter password" required/><br>
                <input name="login" type="submit" id="login_button" value="Login"/><br>
                <a href="register.php"><input type="button" id="register_button" value="Register"/></a>
            </form>
            <?php 
                if(isset($_POST['login']))
                {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $query="select * from userinfotable WHERE username='$username' AND password='$password'";

                    $query_run = mysqli_query($con,$query);
                    if(mysqli_num_rows($query_run)>0)
                    {
                        //valid
                        $_SESSION['username']= $username; 
                        header('location:homepage.php');
                    }
                    else{
                        //invalid
                        echo '<script type="text/javascript"> alert("invalid credentials") </script>';
                    }
                } 
            ?>
        </div>
    </body>
</html>

