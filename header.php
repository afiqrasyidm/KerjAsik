
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
   
   
    
   
   <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDgxQoGWlSuoQ8lkYMM9x_r55ASnOVzFuc" async="" defer="defer" type="text/javascript"></script>
   
   <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

   
   
   
   <!-- PAGE TITLE -->
    <title>KerjAsik</title>
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="js/login-register.js"></script>
	
	
    <!-- KALAU MAU KUTAK-KATIK JS DI FILE INI YA -->

	<script src="js/personal.js"></script>
	
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	
    <!-- MAIN STYLE -->
    <link href="css/customize.css" rel="stylesheet" media="screen">
    
	<link href="css/login-register.css" rel="stylesheet" media="screen">
    
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
								<?php
								session_start();
								if(isset($_SESSION["userlogin"]) and $_SESSION["user_id"] == "1"){
									echo "<li><a href='addPekerjaanasik.php'>Buat Pekerjaan Asik</a></li>";
								}
								?>
								<!--<li><a href="addPekerjaanasik.php">Buat Pekerjaan Asik</a></li>-->
								
								<li><a href="bantuan.php">Bantuan</a></li>
				
				
							
							
							
							
									
									<?php
										$username="";
										if(isset($_SESSION["userlogin"])){
											
											
											$logout = "logout";
											$url = "index.php?logout=true";
											$username = $_SESSION["userlogin"];
											 echo "
										
										
										
												  <li class='dropdown'>
													  <a class='dropdown-toggle' data-toggle='dropdown' href='#'> Halo ".$username."
													  <span class='caret'></span></a>
													  <ul class='dropdown-menu' id='dm'>
														<li ><a href='profil.php'  style='color:black;'  >Profil</a></li>
														<li><a href =".$url." style='color:black;' >Logout </a></li>
													  </ul>
													</li>
												";
										
										
										
										
										
										
										}
										else{
											$href = "javascript:void(0)";
											$dataToggle = "modal";
											$onClick ="openLoginModal()";
											echo "<li><a data-toggle=".$dataToggle." href=".$href." onclick=".$onClick.">Masuk</a></li>";
											
										
										
											
											
										}
										
									
									?>
									<?php 
										if(isset($_GET["logout"])){
											if($_GET['logout'] == 'true'){
												header("Location: index.php");
											
												session_destroy(); 
											}
										}
											
									?>
					
												
							
							   <li class="dropdown">
								  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Daftar
								  <span class="caret"></span></a>
								  <ul class="dropdown-menu" id="dm">
									<li ><a data-toggle="modal" href="javascript:void(0)" style="color:black;"   onclick="openRegisterPemberiBeasiswaModal();" >Pekerja Asik</a></li>
									<li><a id="dm2"  data-toggle="modal" href="javascript:void(0)" style="color:black;" onclick="openRegisterPencariBeasiswaModal();" >Pencari Pekerja Asik</a></li>
								  </ul>
								</li>
							
							
							
							
							
							
							
							
							
							</ul>
						</nav>
					</div>
				</nav>
			
			
			
			</div>
	
			
		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Masuk melalui</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
								<?php include 'login.php';?>
                             </div>
                        </div>

						 <?php include 'registerPekerjaAsik.php';?>      
						 <?php include 'registerPencariPekerjaAsik.php';?>      
                    </div>
    		      </div>
		      </div>
		  </div>
			
	
	</div>
			
			
