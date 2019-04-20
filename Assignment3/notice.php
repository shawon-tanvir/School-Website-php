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
		<link type="text/css" rel="stylesheet" href="css/notice.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
	</head>
	<body>
		<div class="parallax">
		<?php
			include 'header.php';
		?>
		
		

		<div class="noticeblock">
		
		<div class="container">
			<br><br><br>
		
			<div class="row">
				<div class="col-md-2">
					
				</div>
				<div class="col-md-8 board">
				<br>
				<h3 style="font-weight:bold;color:black;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;color:black;">Notice Board</h3>
				<br>
			<?php
				require 'db.php';
	
				$result= $mysqli->query( "SELECT description, filename FROM notice ORDER BY ID desc limit 25" ) 
				or die("SELECT Error: ".mysql_error()); 

				
				while ($row = mysqli_fetch_array($result)){ 
				$files_field= $row['filename'];
				$files_show= "Uploads/files/$files_field";
				$descriptionvalue= $row['description'];
				
				
				
				
				echo "<div><a style='font-size:20px;font-weight:bold;color:blue;'href='$files_show'>$descriptionvalue</a></div>";
				echo "<br>";
				}
			?>	
				<br>
				<br>
				
				
				
				</div>
				
			</div>
			<br>
			<br>
			<br>
			<br>
			
		</div>
		</div>
		</div>
		
		<?php
			include 'footer.php';
		?>
		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
