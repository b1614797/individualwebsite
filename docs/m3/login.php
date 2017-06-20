<?php
    $user = "";
    $pass = "";
    $validated = false;

    if ($_POST)
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
    session_start();
    $_SESSION['login'] = "";
        if($user != "" && $pass != "")
        {
            $conn = @mysql_connect ("mysql.hostinger.co.uk", "u227432795_admin", "multiuser1") or die ("Sorry - unable to connect to MySQL database.");
            $rs = @mysql_select_db ("u227432795_admin", $conn) or die ("error");
            $sql = "SELECT * FROM user WHERE username = '$user' AND password =
            '$pass'";
            $rs = mysql_query($sql,$conn);
            $result = mysql_num_rows($rs);
            if ($result > 0) $validated = true;
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
    }
    else $_SESSION['login'] = "";
?>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>
        <div id="page-wrapper">
            <header>
        <h1>Login Page</h1>
        <p>Please enter your username and password:</p>
        </header>
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td align="right">Username: </td>
                    <td><input size="20" type="text" size="20" maxlength="15" name="username"></td>
                </tr>
                <tr>
                    <td align="right">Password: </td>
                    <td><input size="20" type="password" size="20" maxlength="15" name="password"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td colspan="2" align="left"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        
        <!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
        
    </body>
</html>