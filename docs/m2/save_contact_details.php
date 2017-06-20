<html>
    <head>
		<title>Contact Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">Your Contact Details</h1>
					<nav id="nav">
						<ul>
							<li><a href="../index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Layouts</a>
								<ul>
									<li><a href="generic.html">Generic</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="elements.html">Elements</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>
    <body>
        
        <section id="main" class="container">
            <h1>My Contact Details</h1>
        <p>The contact details you submitted are shown below:</p>
        <table>
            <tr>
                <td align="right">Last name: </td>
                <td>
                    <?php echo $_POST["lastname"]; ?>
                </td>
            </tr>
            <tr>
                <td align="right">First name: </td>
                <td>
                    <?php echo $_POST["firstname"]; ?>
                </td>
            </tr>
            <tr>
                <td align="right">Address 01: </td>
                <td>
                    <?php echo $_POST["address01"]; ?>
                </td>
            </tr>
            <tr>
                <td align="right">Address 02: </td>
                <td>
                    <?php echo $_POST["address02"]; ?>
                </td>
            </tr>
            <tr>
                <td align="right">Town / city: </td>
                <td>
                    <?php echo $_POST["town"]; ?>
                </td>
            </tr>
            <tr>
                <td align="right">Post code: </td>
                <td>
                    <?php echo $_POST["postcode"]; ?>
                </td>
            </tr>
            <tr>
                <td align="right">Telephone: </td>
                <td>
                    <?php echo $_POST["telephone"]; ?>
                </td>
            </tr>
            <tr>
                <td align="right">E-mail: </td>
                <td>
                    <?php echo $_POST["email"]; ?>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <a href="edit_contact_details.php">Edit text</a>
                </td>
            </tr>
                <td>  </td>
                <td>
                    <a href="../index.html">Return to Homepage</a>
                </td>
        </table>
        </section>
        
        
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
        <?php
            $myFile=fopen("mydata.txt","w") or exit("Can’t open file!");
            // Write each line of text into the text file file
            fwrite($myFile, $_POST["lastname"]."\r\n");
            fwrite($myFile, $_POST["firstname"]."\r\n");
            fwrite($myFile, $_POST["address01"]."\r\n");
            fwrite($myFile, $_POST["address02"]."\r\n");
            fwrite($myFile, $_POST["town"]."\r\n");
            fwrite($myFile, $_POST["postcode"]."\r\n");
            fwrite($myFile, $_POST["telephone"]."\r\n");
            fwrite($myFile, $_POST["email"]."\r\n");
            fclose($myFile);
        ?>
        
        
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