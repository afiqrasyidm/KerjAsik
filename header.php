
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title>Juntos - Charity & Association Template</title>
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- MAIN STYLE -->
    <link href="css/customize.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- START BODY -->
  <body>
	<div id="page">
		<!-- START MAIN CONTAINER -->
		<div id="main-container">
			<!-- START NAVIGATION -->
			<div class="sticky-wrapper">
				<nav id="navigation">
					<div class="container">
						<!-- LOGO GOES HERE -->
						<a href="#" id="logo"><img src="images/logo.png" alt="Logo Image"></a>
						<!-- MENU -->
						<nav>
							<ul id="menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="kumpulanlowongan.php">Pekerjaan Asik</a></li>
								<li><a href="createPostPencariPekerjaAsik.php">Buat Pekerjaan Asik</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			
		<?php
function connectDB(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kerjasik";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	return $conn;
}
?>