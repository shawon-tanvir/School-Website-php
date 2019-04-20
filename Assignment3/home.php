<?php
if (!isset($_SESSION)) { session_start(); }
$id="";

if( (array_key_exists("id",$_SESSION))) // if the session is no  set then start to 
{
     $id=$_SESSION['id'];
	 
}
require 'db.php';
$result1 = $mysqli->query("SELECT * FROM carousel WHERE number='1'") or die($mysqli->error);
$user1 = $result1->fetch_assoc();
$result2 = $mysqli->query("SELECT * FROM carousel WHERE number='2'") or die($mysqli->error);
$user2 = $result2->fetch_assoc();
$result3 = $mysqli->query("SELECT * FROM carousel WHERE number='3'") or die($mysqli->error);
$user3 = $result3->fetch_assoc();
$result4 = $mysqli->query("SELECT * FROM carousel WHERE number='4'") or die($mysqli->error);
$user4 = $result4->fetch_assoc();
$result5 = $mysqli->query("SELECT * FROM carousel WHERE number='5'") or die($mysqli->error);
$user5 = $result5->fetch_assoc();
$result6 = $mysqli->query("SELECT * FROM carousel WHERE number='6'") or die($mysqli->error);
$user6 = $result6->fetch_assoc();

?>
<!DOCTYPE html>

<html>
	<head>
		<title>Assignment</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/home.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		
	
		
	</head>
	<body>
		
		<div class="top">
			
				
					<div class="logoback">
						<a href="home.php">
						<img class="logo" src="images/MR.png">
						</a>
					</div>
		</div>
		
					<nav class="my-nav navbar navbar-expand-md navbar-primary ">
					<div class="clearfix">
			<button class="navbar-toggler navbutton" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
				<span class="fa fa-bars"></span>
			</button>
			</div>

  <!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="home.php">Home</a>
									</li>
									<li class=" nav-item">
										<a class="nav-link" href="about.php">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="notice.php">Notice Board</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href='academics.php'>Academics</a>
									</li>
									<li class=" nav-item">
										<a class="nav-link" href=<?php if($id=='99.99.99.999') { echo "'admin.php'";} else if(!($id=='')) { echo "'profile.php'";} else{echo "'loginpage.php'";}?>>My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.php">Contacts</a>
									</li>
									
								  </ul>
							
			</div>
		</nav>
				
		
		<div id="carouselExampleControls" class="my-carousel carousel slide"  data-ride="carousel" data-interval="3000">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleControls" data-slide-to="1"></li>
				<li data-target="#carouselExampleControls" data-slide-to="2"></li>
				<li data-target="#carouselExampleControls" data-slide-to="4"></li>
			</ul>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active" id ="slider">
					<!-- Indicators-->
					 <?php echo '<img class="d-block w-100" style="opacity:.8;"  alt="First" src="data:image/jpeg;base64,'.base64_encode( $user3['image'] ).'"/>';?>
				</div>

				<div class="carousel-item" id="slider">
					<!-- Indicators-->   
					<?php echo '<img class="d-block w-100" style="opacity:.8;"  alt="First" src="data:image/jpeg;base64,'.base64_encode( $user2['image'] ).'"/>';?>
					
				</div>

				<div class="carousel-item" id="slider">
					 <!-- Indicators--> 
					
					 <?php echo '<img class="d-block w-100" style="opacity:.8;"  alt="First" src="data:image/jpeg;base64,'.base64_encode( $user1['image'] ).'"/>';?>

				</div>

				<div class="carousel-item" id="slider">
					<!-- Indicators-->  
					<?php echo '<img class="d-block w-100" style="opacity:.8;"  alt="First" src="data:image/jpeg;base64,'.base64_encode( $user4['image'] ).'"/>';?>
				</div>


			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev butt" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" style="color:blue;" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-chevron-right"style="color:blue;" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
		<div class="parallax">
		<br>
		
		<br>
		<br>
		<div class="container">
			<div class="row">
			
				<div class="col-md-4">
					<div class="hoverbox" style="cursor: pointer;" onclick="window.location=<?php if($id=='99.99.99.999'){ echo "'http://localhost/assignment3/admin.php'";} else if(!($id=='')) { echo "'http://localhost/assignment3/profile.php'";} else{echo "'http://localhost/assignment3/loginpage.php'";}?>;">		
						<div class="imagebox">
						<img style="height:100% !important;width:100% !important;"src="images\profilehover.png" alt="Avatar" class="image" style="width:100%">
						</div>
						<br>
						<div style="text-align:center;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;font-weight:bold;">
							<h4>My Profile</h4>
							<br>
						</div>
					</div>
				</div>
			
				<div class="col-md-4">
					<div class="hoverbox" style="cursor: pointer;" onclick="window.location='http://localhost/assignment3/notice.php';">	
						<div class="imagebox">
						<img style="height:100% !important;width:100% !important;"src="images\noticehover.png" alt="Avatar2" class="image" style="width:100%">
						</div>
						<br>
						<div style="text-align:center;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;font-weight:bold;">
							<h4>Notice Board</h4>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class=" hoverbox" style="cursor: pointer;" onclick="window.location='http://localhost/assignment3/about.php';">	
						<div class="imagebox">
						<img style="height:100% !important;width:100% !important;"src="images\schoolhover.jpg" alt="Avatar2" class="image" style="width:100%">
						</div>
						<br>
						<div style="text-align:center;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;font-weight:bold;">
							<h4>About Us</h4>
							<br>
						</div>
					</div>
				</div>
			
			</div>
		</div>
		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="funtop" style="	font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;color:black;">Founder's Message</h1>
					<hr >
				</div>
			</div>
		</div>
		<br><br>
		<div class="container" style="border:1px solid purple;">
			
			<div class="row">
				<div class="col-md-6 prin">
					 <?php echo '<img class="principal" src="data:image/jpeg;base64,'.base64_encode( $user5['image'] ).'"/>';?>
				</div>
				<div class="col-md-6 prinsp">
					<h5 class="prinsp1head">I feel privileged to lead such an exciting and vibrant school, which offers great opportunities for the young people of Bangladesh.</h5>
					<p class="prinsp1">We offer our students the best possible opportunities to become confident, thoughtful young people who are prepared for any future challenges, 
					in an exciting and increasingly global world.
					At MR, we are very proud of our caring, inclusive ethos where we set high standards and expectations for our students to achieve and behave their very best. 
					</p>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="funtop" style="	font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;color:black;  text-align:right;">Principal's Message</h1>
					
					<hr >
				</div>
			</div>
		</div>
		<br><br>
		<div class="container" style="border:1px solid purple;">
			<div class="row">
				
				<div class="col-md-6 prinsp">
					<h5 class="prinsp1head" >Welcome to the website of M.R International Academy. If you are already a member of our school community, 
					I trust that you find our website to be a rich and useful source of information about our great school. .</h5>
					<p class="prinsp1">If, on the other hand, this is your first introduction to our school, 
					I hope that it is the beginning of a new and lasting relationship with our community.
					 
					A MR education strives to develop young people of purpose, responsibility, resilience, compassion and innovation.
					</p>
				</div>
				<div class="col-md-6 prin">
				
					 <?php echo '<img class="principal" src="data:image/jpeg;base64,'.base64_encode( $user6['image'] ).'"/>';?>
				</div>
			</div>
		</div>
		
		<br><br><br>
		<div class="tourpart">
			<br>
			<div class="container">
				<div class="row">
					
					<div class="col-md-8 videopart">
						<iframe class="youtube" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.youtube.com/embed/PiY-X4J8SOs?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"><div><small><a href="https://youtubeembedcode.com/en">https://youtubeembedcode.com/en</a></small></div><div><small><a href="https://promocode.com.ph/">https://promocode.com.ph/</a></small></div><div><small><a href="https://youtubeembedcode.com/en">https://youtubeembedcode.com/en</a></small></div><div><small><a href="https://promocode.com.ph/">www://promocode.com.ph/</a></small></div><div><small><a href="https://youtubeembedcode.com/en">Learn More</a></small></div><div><small><a href="https://promocode.com.ph/">https://promocode.com.ph/</a></small></div></iframe>
					</div>
					<div class="col-md-4 writingpart">
						<h1 class="takeatour2" style="font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">Here Comes<h1>
						
						<h2 class="takeatour" style="font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">A Tour<h2>
						<h2 class="takeatour2" style="font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">of Our School<h2>
					</div>
				</div>
				
			</div>
			
			
		</div>
		<br><br><br>
		
		
		<?php
			include 'footer.php';
		?>
		</div>
		<script src="js/home.js"></script>
		<script src="js/jquery.min.js"></script>
		
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	
		
		
	</body>
</html>
