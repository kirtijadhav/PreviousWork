<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?>Home Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="body">
    
        <div id="main-wrapper">
            <centre>
                <h2>Home</h2>
                <h3>Welcome 
                    <?php echo $_SESSION['username'] ?>
                </h3>
                <img src="images/loginimage.png" class="loginimage"/>
            </centre>
            
                 
            <form class="myform" action="homepage.php" method="post">
                <input name="logout" type="submit" id="logout_button" value="Log Out"/><br>
            </form>
            <?php
                if(isset($_POST['logout']))
                {
                    session_destroy();
                    header('location:index.php');
                }
            ?>
        </div>
    </body>
</html>

