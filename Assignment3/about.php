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
		<link type="text/css" rel="stylesheet" href="css/about.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		
	
		
	</head>
	<body>
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
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
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
										<a class="nav-link" href="academics.php">Academics</a>
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
		
		<div class="back">
			
				 <img class="d-block w-100" style="opacity:.8;width:100%;heught:100%;"src="images/12.jpg"  alt="First">
			
			
		
		</div>
		<br>
		<div class="container tag">
			<div class="container">
			<div class="row">
				<div class= "col-md-12">
					<a style="display:inline-block; color:black;" href="home.php">
					<h4> Home</h4></a>
					<h4 style="display:inline-block;"> / </h4>
					<a style="display:inline-block;color:black;"href="about.php">
					<h4> About </h4></a>
				</div>
			</div>
		</div>
			<hr>
		</div>
		<br><br>
		<div class="container topback">
			<div class="row">
				<div class= "col-sm-8">
					<p class="prinsp12">Our school is committed to developing ethical person of action.</p>
					<p class="prinsp1">Through academic, civic, team and individual pathways, our girls develop valuable leadership skills. Performing local and global community service enables girls to experience the diversity of the world around them in real life
					situations and creates the foundations of knowledge they will carry with them into the next phase of their lives.</p>
				</div>
				<div class="col-sm-4" style="border-style:outset;">
					
						<h5> Establishment:	2008</h5><br>
						<h5> EIIN: 5055837</h5><br>
				
						<h5> Scholarship: Available</h5>

				</div>
			</div>
			
		</div>
		
		<br>
		
		
		<div class="backabout">
			<div class="container">
				<div class="row">
					<div class= "col-md-12">
						<h2 style="margin-top:5%;color:blue;"> Mission </h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 prinsp">
					
						<p class="prinsp1">The mission of our school is to foster the national development process through the creation of a centre of excellence in baasic education that is responsive to society's needs,
						and able to develop creative leaders. It actively contributes to learning and the creation of knowledge.
						</p>
					</div>
				<div class="col-md-6 prin">
					<img class="principal" src="images/about_back.jpg"></img>
				</div>
				</div>
			
			</div>
		</div>
		<div class="backabout1">
			<div class="container">
				<div class="row">
					<div class= "col-md-12">
						<h2 style="margin-top:5%;color:blue;"> Goal </h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 prinsp">
					
						<p class="prinsp1">The goal of the University is to provide an excellent broad-based education with a focus on mental development for students, 
						in order to equip them with the knowledge and skills necessary for leading the country in its quest for development. Along with this, the School provides an environment for teacher development to ensure a dynamic teaching environment. 
						Teachers will be provided with an environment
						in which they can further their teaching-learning abilities and contribute to the creation of new knowledge by developing and using their skills.
						</p>
					</div>
				<div class="col-md-6 prin">
					<img class="principal" src="images/scholar.jpg"></img>
				</div>
				</div>
			
			</div>
		</div>
		
		<?php
			include 'footer.php';
		?>
		
		
	
		
 <script src="js/home.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/about.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

