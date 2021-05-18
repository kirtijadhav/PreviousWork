<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?>Registration Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="body">
    
        <div id="main-wrapper">
            <centre>
                <h2>Registration</h2>
                <img src="images/loginimage.png" class="loginimage"/>
            </centre>
            
                 
            <form class="myform" action="register.php" method="post">
                <label><b>Username:</b></label><br>
                <input name="username" type="text" class="inputvalues" placeholder="Enter username" required/><br>
                <label><b>Email-Address:</b></label><br>
                <input name="emailaddress" type="emailaddress" class="inputvalues" placeholder="Enter Email-Address" required/><br>
                <label><b>Password:</b></label><br>
                <input name="password" type="password" class="inputvalues" placeholder="Enter password" required/><br>
                <label><b>Confirm Password:</b></label><br>
                <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
                <input name="submit_button" type="submit" id="signup_button" value="Sign Up"/><br>
                <a href="index.php"> <input type="button" id="back_button" value="<< Back to login"/></a>
            </form>

            <?php
                if(isset($_POST['submit_button']))
                {
                    //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
                    
                    $username = $_POST['username'];
                    $emailaddress = $_POST['emailaddress'];
                    $password = $_POST['password'];
                    $cpassword = $_POST['cpassword'];

                    if($password==$cpassword)
                    {
                        $query= "select * from userinfotable WHERE username='$username'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            // there is alread a user with same username
                            echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
                        }
                        else
                        {
                            
                            $query= "insert into userinfotable values('','$username','$emailaddress','$password')";
                            $query_run = mysqli_query($con,$query);

                            if($query_run)
                            {
                                echo '<script type="text/javascript"> alert("User Registered.. Go to Login") </script>';
                            }
                            else
                            {
                                    echo '<script type="text/javascript"> alert("Error!") </script>';
                            }
                        }

                    }
                    else{
                        echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';
                    }


                }
            ?>

        </div>
    </body>
</html>

