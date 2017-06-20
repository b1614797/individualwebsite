<?php
$user = "";
$pass = "";
$validated = false;

if ($_POST)
{
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
}

session_start();
if($user!=""&&$pass!="")
{
    
    if($user=="jsmith"&&$pass=="memes") $validated = true;
    if($validated)
    {
        $_SESSION['login'] = "OK";
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header('Location: protected.php');
    }
    else
    {
        $_SESSION['login'] = "";
        echo "Invalid username or password.";
        
    }
}

else $_SESSION['login'] = "";

?>

<html>
    <head>
        <title>Login</title>
    </head>
    
    <body>
        <h1>Login Page</h1>
        <p1>Enter Login Details here</p1>
    
        <form action="login.php" method="post">
            <tr>
                <td align="right">Username:</td>
                <td><input type="text" size="20" maxlength="15" name="username"></td>
            </tr>
            <tr>
                <td align="right">Password:</td>
                <td><input type="password" size="20" maxlength="15" name="password"></td>
            </tr>
            <tr>
                <td>  </td>
                <td colspan="2" align="left"><input type="submit" value="Login"></td>
            </tr>
        </form>
    
    </body>

</html>