<?php
    session_start();
    if($_SESSION['login'] != "OK")
    {
        header('Location: login.php');
        exit();
    }
?>

<html>
    <head>
        <title>Logged in</title>
    </head>

    <body>
        <h1>Protected (nearly) Web page</h1>
        
        <?php
        
            echo "<p>You have successfully logged in!</p>";
            echo "<p>Your username is:";
            echo $_SESSION['username'];
            echo "<br/>";
            echo "Your Password is: ";
            echo $_SESSION['password'];
            echo "</p>";
        
        ?>
    
    
    </body>


</html>