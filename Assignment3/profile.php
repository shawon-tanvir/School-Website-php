<?php
require 'db.php';
session_start();
$id=$_SESSION['id'];
$class='';
$term='';

$first_name= $_SESSION['first_name'];
$last_name=$_SESSION['last_name'];




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
		<link type="text/css" rel="stylesheet" href="css/profile.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
	</head>
	<body>
		<div class="parallax">
		<?php
			include 'header.php';
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<div style="float:right;">
							<h6 style="display:inline-block;font-weight:bold;">Logged In As </h6>
							<label style="font-weight:bold;display:inline-block; color:blue;"><?php echo $first_name." ".$last_name; ?></label>
							<form style="display:inline-block;" class="signUpContainer" method="post" autocomplete="off">
								<button type="submit" class="btn btn-info btn-sm "name="logout">Log Out</button>
							</form>	
						</div>
				</div>
				
			</div>
			<br><br>
			<div class="row">
				
				
				<div class="col-md-8">
					<br>
					<h4 style="display:inline-block;float:left;font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">Examination Results</h4>
					<br>
					<hr>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<form style="margin-top:32px;" method="post" autocomplete="off">
								<div class="form-inline">
								  <label style="color:#AE04CC;font-weight:bold;" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2"for="sel1">Class:</label>
								  <select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" name="class">
									<option>Play Group</option>
									<option>Nursery</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								  </select>
								  <label style="color:#AE04CC;font-weight:bold;" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2"for="sel1">Term:</label>
								    <select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" name="term">
									
										<option>1</option>
										<option>2</option>
										<option>3</option>

									</select>
									<div style="text-align:centre; margin-top:10px;margin-bottom:10px;" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
									<button  type="submit" class="form-control btn btn-success btn-sm "name="show">Show</button>
									</div>
								</div>
								</form>
							</div>
							
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<table width='100%' border='4'color='blue'>
											<tr>
											<th>Subject</th>
											<th>Marks</th>
											<th>Grades</th>
											</tr>
								<?php
									if ($_SERVER['REQUEST_METHOD'] == 'POST') 
									{
										if (isset($_POST['show'])) { 
											$class=$_POST['class'];
											$term=$_POST['term'];
										
											require 'db.php';
											
											$result = $mysqli->query("SELECT * FROM result where class='$class' and term='$term' and id='$id'");

											

											while($row = mysqli_fetch_array($result))
											{
											echo "<tr>";
											echo "<td>" . $row['subject'] . "</td>";
											echo "<td>" . $row['marks'] . "</td>";
											echo "<td>" . $row['grade'] . "</td>";
											echo "</tr>";
											}
											
										}
									}
									

									

								?>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 problock">
					<br>
					<br>
					<div class="imgblock">
						<?php $result = $mysqli->query("SELECT * FROM StudentInfo WHERE id='$id'") or die($mysqli->error);
								$user = $result->fetch_assoc(); 
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $user['image'] ).'"/>';?>
						
					</div>
					<br><br>
					<div>
						<h5 style="display:inline-block;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">Student ID : </h5>
						<label style="font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;"><?php echo $id ?></label>
					</div>
					<br>
					<div>
						<h5 style="display:inline-block;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">Name : </h5>
						<label style="font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;"><?php echo $user['name'] ?></label>
					</div>
					<br>
					<div>
						<h5 style="display:inline-block;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">Date of Birth : </h5>
						<label style="font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;"><?php echo $user['dob'] ?></label>
					</div>
					<br>
					<div>
						<h5 style="display:inline-block;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">Sex : </h5>
						<label style="font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;"><?php if($user['sex']==1) echo "Male"; else echo "Female"; ?></label>
					</div>
					<br>
					<div>
						<h5 style="display:inline-block;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;">Class : </h5>
						<label style="font-weight:bold;font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;"><?php echo $user['class']; ?></label>
					</div>
					<br><br>
				</div>
			</div>
		</div>
		
		
		
		<?php
			include 'footer.php';
		?>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
