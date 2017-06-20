<html>
    <head>
        <title>Insert User</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>
        <div id="page-wrapper">
        <h1>User Creation</h1>
        <?php
            session_start();
        
            if($_SESSION['login'] != "OK")
            {
                header('Location: login.php');
                exit();
            }
        
            $new_user = $_POST["new_username"];
            $new_pass = $_POST["new_password"];
            $conn = @mysql_connect ("mysql.hostinger.co.uk", "u227432795_admin", "multiuser1")
            or die ("Sorry - unable to connect to MySQL database.");
        
            $rs = @mysql_select_db ("u227432795_admin", $conn) or die ("error");
            $sql = "INSERT INTO user (username, password) VALUES ('$new_user', '$new_pass')";
            mysql_query($sql,$conn) or die ("User creation failed.");
            echo "<p>User created successfully.</p>";
            echo "<p>Return to <a href='protected.php'>application</a> or <a
            href='login.php'>log out</a></p>";
        ?>
        <p><a href="../index.html">Return to Homepage</a></p>
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