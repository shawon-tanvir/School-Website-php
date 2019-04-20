<?php
require 'db.php';
session_start();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if (isset($_POST['logout'])) { 
			 
				session_destroy();
				header("location: home.php");
				
			}
		}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assignment</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/academics.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
	</head>
	<body>
		<?php
			include 'header.php';
		?>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="margin:0 !important;padding:0 !important;">
					<img class="d-block w-100" style="opacity:.8;width:100%;heught:100%;margin:0 !important;padding:0 !important;"src="images/emailback.jpg"  alt="First">
				<div>
			</div>
		<div>
		<br>
		<div class="container">
			
			<?php
				require 'db.php';
									
				
			?>	
			
			<div class="row">
				<div class="col-md-12">
					<h1 style="font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;font-weight:bold;color:#5F5E6B; font-size:35px;; float:left;">Our Informaton</h1>
					<br>
					
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<h1 style="color:#5F5E6B; font-size:35px;; float:right;">Principal</h1>
					<br>
					<hr >
				</div>
			</div>
			<br>
			<div class="row">
				
					
							<?php
								$result = $mysqli->query("SELECT * FROM academicsinfo where catagory='principal'");
								while($row = mysqli_fetch_array($result))
					{
								echo "<div class='col-md-4'>";
											echo "<div class='profileblock'>";
												
												echo "<div class='imgblock'>";
												
													 echo '<img class="rounded imgprin" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
												echo "</div>";
												
												echo "<div class='name'>";
													echo "<br>";
													echo "<h5>". $row['name']."</h5>";
													echo "<h6> Contact No :". $row['phone']."</h5>";
													echo "<h6> Email : ". $row['email']."</h5>";
													echo "<h6> Subject : ". $row['subject']."</h5>";
													echo "<br>";
												echo "</div>";
												
								
											echo "</div>";
											echo "<br>";
										echo "</div>";
										
								}
							?>
					
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1 style="color:#5F5E6B; font-size:35px;; float:right;">Teachers</h1>
					<br>
					<hr >
				</div>
			</div>
			<br>
			<div class="row">
				<?php
					$result = $mysqli->query("SELECT * FROM academicsinfo where catagory='teacher'");
					while($row = mysqli_fetch_array($result))
					{
					echo "<div class='col-md-4'>";
								echo "<div class='profileblock'>";
									
									echo "<div class='imgblock'>";
									
										 echo '<img class="rounded imgprin" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
									echo "</div>";
									
									echo "<div class='name'>";
										echo "<br>";
										echo "<h5>". $row['name']."</h5>";
										echo "<h6> Contact No :". $row['phone']."</h5>";
										echo "<h6> Email : ". $row['email']."</h5>";
										echo "<h6> Subject : ". $row['subject']."</h5>";
										echo "<br>";
									echo "</div>";
									
					
								echo "</div>";
								echo "<br>";
							echo "</div>";
							
					}
					
					?>
			</div>
			
			
			<div class="row">
				<div class="col-md-12">
					<h1 style="color:#5F5E6B; font-size:35px;; float:right;">Officials</h1>
					<br>
					<hr >
				</div>
			</div>
			<br>
			<div class="row">
				<?php
					$result = $mysqli->query("SELECT * FROM academicsinfo where catagory='officials'");
					while($row = mysqli_fetch_array($result))
					{
					echo "<div class='col-md-4'>";
								echo "<div class='profileblock'>";
									
									echo "<div class='imgblock'>";
									
										 echo '<img class="rounded imgprin" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
									echo "</div>";
									
									echo "<div class='name'>";
										echo "<br>";
										echo "<h5>". $row['name']."</h5>";
										echo "<h6> Contact No :". $row['phone']."</h5>";
										echo "<h6> Email : ". $row['email']."</h5>";
										echo "<h6> Designation : ". $row['subject']."</h5>";
										echo "<br>";
									echo "</div>";
									
					
								echo "</div>";
								echo "<br>";
							echo "</div>";
							
					}
					
					?>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<h1 style="color:#5F5E6B; font-size:35px;; float:right;">Librarian</h1>
					<br>
					<hr >
				</div>
			</div>
			<br>
			<div class="row">
				<?php
					$result = $mysqli->query("SELECT * FROM academicsinfo where catagory='librarian'");
					while($row = mysqli_fetch_array($result))
					{
					echo "<div class='col-md-4'>";
								echo "<div class='profileblock'>";
									
									echo "<div class='imgblock'>";
									
										 echo '<img class="rounded imgprin" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
									echo "</div>";
									
									echo "<div class='name'>";
										echo "<br>";
										echo "<h5>". $row['name']."</h5>";
										echo "<h6> Contact No :". $row['phone']."</h5>";
										echo "<h6> Email : ". $row['email']."</h5>";
										echo "<h6> Designation : ". $row['subject']."</h5>";
										echo "<br>";
									echo "</div>";
									
					
								echo "</div>";
								echo "<br>";
							echo "</div>";
							
					}
					
					?>
			</div>
			
			
		</div>
		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<?php
			include 'footer.php';
		?>
	</body>
</html>
