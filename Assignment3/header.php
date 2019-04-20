<?php
if (!isset($_SESSION)) { session_start(); }
$id="";
if( (array_key_exists("id",$_SESSION))) // if the session is no  set then start to 
{
     $id=$_SESSION['id'];
	 
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assignment</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/header.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		
	
		
	</head>
	<body>
	
		<div class="container-fluid top">
			<div class="row">
				<div class="col-md-3">
					<div class="logoback">
						<a href="home.php">
						<img class="logo" src="images/MR.png">
						</a>
					</div>
				</div>
				<div class="col-md-9">
					<nav class="my-nav navbar navbar-expand-md navbar-primary  ">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
				<span class="fa fa-bars"></span>
			</button>

  <!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link headlink" href="home.php">Home</a>
									</li>
									<li class=" nav-item">
										<a class="nav-link headlink" href="about.php">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link headlink" href="notice.php">Notice Board</a>
									</li>
									<li class="nav-item">
										<a class="nav-link headlink" href="academics.php">Academics</a>
									</li>
									<li class=" nav-item">
										<a class="nav-link headlink"  href=<?php if($id=='99.99.99.999') { echo "'admin.php'";} else if(!($id=='')) { echo "'profile.php'";} else{echo "'loginpage.php'";}?>>My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link headlink" href="contact.php">Contacts</a>
									</li>
									
								  </ul>
							
			</div>
		</nav>
				</div>
				
			</div>
		</div>

		
		<script src="js/home.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
