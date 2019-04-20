<?php
require 'db.php';

if (!isset($_SESSION)) { session_start(); }
$id="";
if( (array_key_exists("id",$_SESSION))) // if the session is no  set then start to 
{
     $id=$_SESSION['id'];
	 
}


$name= '';

$tmp_name= '';

$submitbutton= '';

$position= ''; 

$fileextension= '';

$fileextension= '';

$description= '';

$path='';
$error='';


$employee_image ='';
$employee_name ='';
$employee_phone ='';
$employee_email ='';
$employee_catagory ='';
$employee_subject ='';
$employee_error ='';
$employee_previous ='';


$student_image ='';
$student_name ='';
$student_phone ='';
$student_email ='';
$student_catagory ='';
$student_subject ='';
$student_error ='';
$student_previous ='';

$result_id ='';
$result_class ='';
$result_term ='';
$result_subject ='';
$result_marks ='';
$result_grade ='';
$result_error ='';


$carousel_image ='';
$carousel_chooser ='';
$carousel_error ='';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if (isset($_POST['logout'])) { 
			 
				session_destroy();
				header("location: home.php");
				
			}
		}

?>
<?php 
					if(isset($_POST['result_submit'])){
						$result_id =$_POST['result_id'];
						$result_class =$_POST['result_class'];
						$result_term =$_POST['result_term'];
						$result_subject =$_POST['result_subject'];
						$result_marks =$_POST['result_marks'];
						$result_grade =$_POST['result_grade'];
						
						if(!empty($result_id) && !empty($result_class) && !empty($result_term) && !empty($result_subject) && !empty($result_marks) && !empty($result_grade)){
							$mysqli->query("INSERT INTO result VALUES ('$result_id','$result_class','$result_term','$result_subject','$result_marks','$result_grade')");
							$result_error='<p><label class="text-danger">Result Inserted.</label></p>';
						}
						else{
							$result_error='<p><label class="text-danger">Fill Up all the fields.</label></p>';
		
						}
						
					}
					if(isset($_POST['insert_employee'])){
						$employee_image =addslashes(file_get_contents($_FILES["image"]["tmp_name"])); ;
						$employee_name =$_POST['name'];
						$employee_phone =$_POST['phone'];
						$employee_email =$_POST['email'];
						$employee_catagory =$_POST['catagory'];
						$employee_subject =$_POST['subject'];
						if(!empty($employee_image) && !empty($employee_name) && !empty($employee_phone) && !empty($employee_email) && !empty($employee_catagory) && !empty($employee_subject)){
							$mysqli->query("INSERT INTO academicsinfo VALUES ('$employee_image','$employee_name','$employee_phone','$employee_email','$employee_catagory','$employee_subject')");
							$employee_error='<p><label class="text-danger">Employee Inserted.</label></p>';
						}
						else{
							$employee_error='<p><label class="text-danger">Fill Up all the fields.</label></p>';
		
						}
						
					}
					if(isset($_POST['update_employee'])){
						$employee_image =addslashes(file_get_contents($_FILES["image"]["tmp_name"])); ;
						$employee_name =$_POST['name'];
						$employee_phone =$_POST['phone'];
						$employee_email =$_POST['email'];
						$employee_catagory =$_POST['catagory'];
						$employee_subject =$_POST['subject'];
						$employee_previous =$_POST['previous'];
						if(!empty($employee_image) && !empty($employee_name) && !empty($employee_phone) && !empty($employee_email) && !empty($employee_catagory) && !empty($employee_subject)  && !empty($employee_previous)){
							$searchquery=$mysqli->query("select * from academicsinfo where name='$employee_previous'");
							
							
							if($searchquery->num_rows == 0) {
								 $employee_error='<p><label class="text-danger">There is no such name in database.</label></p>';
							} else {
								$mysqli->query("Update academicsinfo set image='$employee_image',name='$employee_name',phone='$employee_phone',email='$employee_email',catagory='$employee_catagory',subject='$employee_subject' where name='$employee_previous'");
								$employee_error='<p><label class="text-danger">Employee Updated.</label></p>';
							}
							
						}
						else{
							$employee_error='<p><label class="text-danger">Fill Up all the fields.</label></p>';
		
						}
						
					}
					
					if(isset($_POST['delete_employee'])){
						
						$employee_previous =$_POST['previous'];
						if(!empty($employee_previous)){
							$searchquery=$mysqli->query("select * from academicsinfo where name='$employee_previous'");
							
							
							if($searchquery->num_rows == 0) {
								 $employee_error='<p><label class="text-danger">There is no such name in database.</label></p>';
							} else {
								$mysqli->query("Delete from academicsinfo where name='$employee_previous'");
								$employee_error='<p><label class="text-danger">Employee Deleted.</label></p>';
							}
							
						}
						else{
							$employee_error='<p><label class="text-danger">Fill Up the Previous Name field.</label></p>';
		
						}
						
					}
					
					
					if(isset($_POST['insert_student'])){
						$student_image =addslashes(file_get_contents($_FILES["student_image"]["tmp_name"])); ;
						$student_name =$_POST['student_name'];
						$student_phone =$_POST['student_phone'];
						$student_email =$_POST['student_email'];
						$student_catagory =$_POST['student_catagory'];
						$student_subject =$_POST['student_subject'];
						
						if(!empty($student_image) && !empty($student_name) && !empty($student_phone) && !empty($student_email) && !empty($student_subject)){
							$mysqli->query("INSERT INTO studentinfo VALUES ('$student_phone','$student_name','$student_email','$student_catagory','$student_subject','$student_image')");
							$student_error='<p><label class="text-danger">Student Inserted.</label></p>';
						}
						else{
							$student_error='<p><label class="text-danger">Fill Up all the fields.</label></p>';
		
						}
						
					}
					if(isset($_POST['update_student'])){
						$student_image =addslashes(file_get_contents($_FILES["student_image"]["tmp_name"])); ;
						$student_name =$_POST['student_name'];
						$student_phone =$_POST['student_phone'];
						$student_email =$_POST['student_email'];
						$student_catagory =$_POST['student_catagory'];
						$student_subject =$_POST['student_subject'];
						$student_previous =$_POST['student_previous'];
						
						if(!empty($student_image) && !empty($student_name) && !empty($student_phone) && !empty($student_email) && !empty($student_catagory) && !empty($student_subject) && !empty($student_previous)){
							$student_searchquery=$mysqli->query("select * from studentinfo where id='$student_previous'");
							
							
							if($student_searchquery->num_rows == 0) {
								 $student_error='<p><label class="text-danger">There is no such name in database.</label></p>';
							} else {
								$mysqli->query("Update studentinfo set image='$student_image',name='$student_name',id='$student_phone',dob='$student_email',sex='$student_catagory',class='$employee_subject' where id='$student_previous'");
								$student_error='<p><label class="text-danger">Student info Updated.</label></p>';
							}
						}
						else{
							$student_error='<p><label class="text-danger">Fill Up all the fields.</label></p>';
		
						}
						
					}
					
					if(isset($_POST['delete_student'])){
						
						$student_previous =$_POST['student_previous'];
						if(!empty($student_previous)){
							$student_searchquery=$mysqli->query("select * from studentinfo where id='$student_previous'");
							
							
							if($student_searchquery->num_rows == 0) {
								 $student_error='<p><label class="text-danger">There is no such name in database.</label></p>';
							} else {
								$mysqli->query("Delete from studentinfo where id='$student_previous'");
								$student_error='<p><label class="text-danger">Student Deleted.</label></p>';
							}
							
						}
						else{
							$estudent_error='<p><label class="text-danger">Fill Up the Previous Name field.</label></p>';
		
						}
						
					}
					
					if(isset($_POST['submit'])){
						
						$name= $_FILES['file']['name'];

						$tmp_name= $_FILES['file']['tmp_name'];

						$submitbutton= $_POST['submit'];

						$position= strpos($name, "."); 

						$fileextension= substr($name, $position + 1);

						$fileextension= strtolower($fileextension);

						$description= $_POST['description_entered'];

						if (isset($name)) {

						$path= 'Uploads/files/';

						if (!empty($name)){
						if (move_uploaded_file($tmp_name, $path.$name)) {
						$error="Uploaded";

						}
						}
						}
						
						if(!empty($description)){
							$mysqli->query("INSERT INTO notice (description, filename) VALUES ('$description', '$name')");
						}
						else
							$error="Add a description";
					}
					
					
					
						
						if(isset($_POST['carousel_submit'])){
						$carousel_image =addslashes(file_get_contents($_FILES["carousel_image"]["tmp_name"])); ;
						$carousel_chooser =$_POST['carousel_chooser'];
						
						if( !empty($carousel_image) && !empty($carousel_chooser)){
							$mysqli->query("update carousel set image='$carousel_image' where number='$carousel_chooser'");
							$carousel_error='<p><label class="text-danger">Image Updated.</label></p>';
						}
						else{
							$carousel_error='<p><label class="text-danger">Fill Up all the fields.</label></p>';
		
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
		<link type="text/css" rel="stylesheet" href="css/admin.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
	</head>
	<body>
		<div class="parallax">
		<br><br>
		<div class="container">
			
		<div class="container">
			<div class="row" style="display:block;margin:auto;text-align:center;">
				<div class="col-md-12">
					<h3 style="font-weight:bold;">Admin Panel</h3>
				</div>
			
			</div>
			<div class="row" style="text-align:center;">
				
				<div class="col-md-12">
		<nav class="admin-nav navbar navbar-expand-md navbar-primary ">
					
			<button class="navbar-toggler navbutton" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
				<span class="fa fa-bars"></span>
			</button>
			

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
		</div>
		</div>
			
			<div class="row" style="margin:auto;">
			<div class="col-md-12">
			<form  method='post' enctype="multipart/form-data">
					
						
					<input style="float:right;" type="submit" name="logoutadmin" value="Log Out" class="btn btn-success"/>
					<?php
						if(isset($_POST['logoutadmin'])){
							session_destroy();
							header("location: home.php");
						}
					?>
					

			</form>
			</div>
		</div>
		
		</div>
		
		
		
		
		
		<div class="container">
			
			
			
			<br>
			<div class="row">
				<div class="col-md-6" style="border-style:solid;margin-right:10px;margin-left:-10px;">
				<br><br>
					<h4 align="center" style="font-weight:bold;">Upload Notices</h4>
					<?php
						if(!$error==""){
							echo "<h5 style='color:green;'>".$error."</h5>";
						}
					?>
					<br>
					<form  method='post' enctype="multipart/form-data">
					<h5 style="display:inline-block;margin-right:10px;">Enter Description</h5><input type="text" name="description_entered"/><br><br>
					<input type="file"  name="file"/><br><br>
						
					<input type="submit" name="submit" value="Upload" class="btn btn-info"/>
					

					</form>
				</div>
				<div class="col-md-6" style="border-style:solid; ">
					<br>
					 <h3 align="center">Message Box</h3>  
					<br />  
					<?php
						
						require 'db.php';
						$pit='';
						$result='';
						$chap=0;
						$messagenum=$mysqli->query("SELECT count(*) as conrow FROM messege where seen=0");
						while ($row = $messagenum->fetch_assoc()) {
							
						
						if($row['conrow']>0){
							echo '<h2><label class="" style="font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;font-weight:bold;color:blue;float:right;font-size:25px;">'.$row['conrow'].' new message</label></h2><br><br>';
						}
						else
							echo '<p><label class=""  style="font-family: Comic Sans MS, cursive, sans-serif; font-style: italic;font-weight:bold;color:blue;float:right;font-size:25px;">No new message</label></p><br><br>';
						}
						
						
						if(isset($_POST['left'])){
							if($_SESSION['idcheck']>0){
								$_SESSION['idcheck']--;
								$_SESSION['pagecheck'] =1;
								
							}
							
							if($_SESSION['idcheck']<=0){
								$_SESSION['alwaysshow']=0;
								$_SESSION['pagecheck'] =1;
								echo '<p><label class="text-danger">No more Messege.</label></p>';
							}
							else{
							
							$_SESSION['alwaysshow']=1;
											
											
						}
						}
						
						
						if(isset($_POST['right'])){
							
							if($_SESSION['idcheck']<=$_SESSION['lastidcheck']){
								$_SESSION['idcheck']++;
								$_SESSION['pagecheck'] =1;
							}
							
							if($_SESSION['idcheck']>$_SESSION['lastidcheck']){
								$_SESSION['alwaysshow']=0;
								echo '<p><label class="text-danger">No more Messege.</label></p>';
								$_SESSION['pagecheck'] =1;
							}
							else{
							
							
							$_SESSION['alwaysshow']=1;
											
											
						}
						}
											$messagenum=$mysqli->query("SELECT count(*) as conrow FROM messege where seen=0");
											while ($row = $messagenum->fetch_assoc()) {
												
											
											if($row['conrow']>0 && $_SESSION['pagecheck'] ==1){
												$result = $mysqli->query("SELECT * FROM messege order by mid desc limit 1");
											
											
											if(!empty($result)){		
																		
											while($row = mysqli_fetch_array($result))
											{
											$_SESSION['idcheck']=$row['mid'];
											$_SESSION['lastidcheck']=$row['mid'];
											$kit=$row['mid'];
											$chap=1; 
											
											$mysqli->query("Update messege set seen=1 where mid='$kit'");
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Name: </h6><h6 style='display:inline-block;'>  ".$row['firstname']." ".$row['lastname']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Email-ID:</h6><h6 style='display:inline-block;'> ".$row['email']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Phone Number:</h6><h6 style='display:inline-block;'> ".$row['phone']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Message:</h6><br>";
											echo "<div style='border-style: solid;border-color:red;'>";
											echo "<h6 style='display:inline-block;margin-left:10px;'><br> ".$row['messege']."</h6><br><br>";
											echo "</div>";
											}
											}
											}
											}
											if($row['conrow']>0||$_SESSION['pagecheck'] ==0 && $_SESSION['alwaysshow']==0){
											$result = $mysqli->query("SELECT * FROM messege order by mid desc limit 1");
											
											
											if(!empty($result)){		
																		
											while($row = mysqli_fetch_array($result))
											{
											$_SESSION['idcheck']=$row['mid'];
											$_SESSION['lastidcheck']=$row['mid'];
											$kit=$row['mid'];
											
											$mysqli->query("Update messege set seen=1 where mid='$kit'");
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Name: </h6><h6 style='display:inline-block;'>  ".$row['firstname']." ".$row['lastname']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Email-ID:</h6><h6 style='display:inline-block;'> ".$row['email']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Phone Number:</h6><h6 style='display:inline-block;'> ".$row['phone']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Message:</h6><br>";
											echo "<div style='border-style: solid;border-color:red;'>";
											echo "<h6 style='display:inline-block;margin-left:10px;'><br> ".$row['messege']."</h6><br><br>";
											echo "</div>";
											}
											}
											}
											if($_SESSION['alwaysshow']==1 && $chap==0){
											$_SESSION['pagecheck'] =1;
											$pit=$_SESSION['idcheck'];
											$result = $mysqli->query("SELECT * FROM messege where mid='$pit'");
							
											
											if(!empty($result)){		
																		
											while($row = mysqli_fetch_array($result))
											{
											$_SESSION['idcheck']=$row['mid'];
											$kit=$row['mid'];
											
											$mysqli->query("Update messege set seen=1 where mid='$kit'");
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Name: </h6><h6 style='display:inline-block;'>  ".$row['firstname']." ".$row['lastname']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Email-ID:</h6><h6 style='display:inline-block;'> ".$row['email']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Phone Number:</h6><h6 style='display:inline-block;'> ".$row['phone']."</h6><br>";
											echo "<h6 style='font-weight:bold;display:inline-block;margin-right:10px;'>Message:</h6><br>";
											echo "<div style='border-style: solid;border-color:red;'>";
											echo "<h6 style='display:inline-block;margin-left:10px;'><br> ".$row['messege']."</h6><br><br>";
											echo "</div>";
											}
											}
											}
										
					?>
					<br>
					<form  method='post' enctype="multipart/form-data">
					
						
					<input style="float:left;" type="submit" name="left" value="Previous Message" class="btn btn-info"/>
					<input style="float:right;" type="submit" name="right" value="Next Message" class="btn btn-info"/>
					

					</form>
					<br><br><br>
				</div>
				
				
				
				
			</div>
			
			<br><br>
			<div class="row">
			
				<div class="col-md-6" style="border-style:solid;margin-right:10px;margin-left:-10px;">
					 <br>
					 <h3 align="center">Insert Information of Employees</h3>  
					<br />  
					<?php
						if(!$employee_error==""){
							echo $employee_error;
						}
					?>
					<br>
					<form method="post" enctype="multipart/form-data">  
						 <h5 style="display:inline-block;margin-right:10px;">Insert Employee's Image (450px*250px)</h5>
						 <input type="file" name="image" id="image" />  
						 <br>
						 <br>
						<h5 style="display:inline-block;margin-right:10px;">Employee's Name</h5>
						<input type="text" name="name"/><br><br>
						<h5 style="display:inline-block;margin-right:10px;">Pnone No</h5>
						<input type="text" name="phone"/><br><br>
						<h5 style="display:inline-block;margin-right:10px;">Email</h5>
						<input type="text" name="email"/><br><br>
						<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Catagory</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="catagory">
									<option>principal</option>
									<option>teacher</option>
									<option>officials</option>
									<option>librarian</option>
									
						</select>
						</div>
						<br>
						<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Subject or Designtion</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="subject">
									<option>Bengali</option>
									<option>English</option>
									<option>Mathematics</option>
									<option>Science</option>
									<option>Social Science</option>
									<option>Religious Studies</option>
									<option>Cashier</option>
									<option>Supervisor</option>
									<option>Librarian</option>
									
						</select>
						</div>
						<br>
						<h5 style="display:inline-block;margin-right:10px;font-size:18px;">Previous Name of the Employee (Only For Update and Delete)</h5>
						<input type="text" name="previous"/><br><br>
						<br>
						 <input style="display:inline-block;margin-right:30px;" type="submit" name="insert_employee" id="insert" value="Insert Employee" class="btn btn-info" /> 
						
						 <input style="display:inline-block;margin-right:30px;" type="submit" name="update_employee" id="update_employee" value="Update Employee" class="btn btn-success" /> 
						 <input style="display:inline-block;margin-right:0px;" type="submit" name="delete_employee" id="delete_employee" value="Delete Employee" class="btn btn-danger" /> 
					</form>  
					<br><br><br>
				</div>
				
				<div class="col-md-6" style="border-style:solid;">
					<br>
					 <h3 align="center">Insert Information of Students</h3>  
					<br />  
					<?php
						if(!$student_error==""){
							echo $student_error;
						}
									
		
					?>
					
					<br>
					<form method="post" enctype="multipart/form-data">  
						 <h5 style="display:inline-block;margin-right:10px;">Insert Student's Image (200px*200px)</h5>
						 <input type="file" name="student_image" id="student_image" />  
						 <br>
						 <br>
						<h5 style="display:inline-block;margin-right:10px;">Student's Name</h5>
						<input type="text" name="student_name" /><br><br>
						<h5 style="display:inline-block;margin-right:10px;">Student's ID</h5>
						<input type="text" name="student_phone" placeholder="**.**.**.***"/><br><br>
						<h5 style="display:inline-block;margin-right:10px;">Student's Date of Birth</h5>
						<input type="text" name="student_email" placeholder="YYYY-MM-DD"/><br><br>
						<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Sex</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="student_catagory">
									<option value="1">Male</option>
									<option value="0">Female</option>
									
									
						</select>
						</div>
						<br>
						<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Class</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="student_subject">
									<option>Play Group</option>
									<option>Nursery</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									
									
						</select>
						</div>
						<br>
						<h5 style="display:inline-block;margin-right:10px;">Previous ID of the Student (Only For Update and Delete)</h5>
						<input type="text" name="student_previous"/><br><br>
						<br>
						 <input style="display:inline-block;margin-right:50px;" type="submit" name="insert_student" id="insert_student" value="Insert Student" class="btn btn-info" /> 
						
						 <input style="display:inline-block;margin-right:50px;" type="submit" name="update_student" id="update_student" value="Update Student" class="btn btn-success" /> 
						 <input style="display:inline-block;margin-right:10px;" type="submit" name="delete_student" id="delete_student" value="Delete Student" class="btn btn-danger" /> 
					</form> 
						<br><br><br>
				</div>
				
			</div>
			<br><br><br>
			<div class="row">
			
				<div class="col-md-6"style="border-style:solid;margin-right:10px;margin-left:-10px;">
					<br>
					<h4 align="center" style="font-weight:bold;">Upload Resuts</h4>
					<?php
						if(!$result_error==""){
							echo "<h5 style='color:green;'>".$result_error."</h5>";
						}
					?>
					<br>
					<form  method='post' enctype="multipart/form-data">
					<h5 style="display:inline-block;margin-right:10px;">Student's ID</h5>
						<input type="text" name="result_id" placeholder="**.**.**.***"/><br><br>
					<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Class</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="result_class">
									<option>Play Group</option>
									<option>Nursery</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									
									
						</select>
					</div>
					<br>
					<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Term</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="result_term">
									
									<option>1</option>
									<option>2</option>
									<option>Final</option>
						</select>
					</div>
					<br>
					<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Subject</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="result_subject">
									<option>Bengali</option>
									<option>English</option>
									<option>Mathematics</option>
									<option>Science</option>
									<option>Social Science</option>
									<option>Religious Studies</option>
									<option>Cashier</option>
									<option>Supervisor</option>
									<option>Librarian</option>
									
						</select>
						</div>
						<br>
					<h5 style="display:inline-block;margin-right:10px;">Marks</h5>
						<input type="text" name="result_marks"/><br>
						<br>
					<div class="form-inline">
						<h5 style="display:inline-block;margin-right:10px;">Subject</h5>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="result_grade">
									<option value="A+">A+ (80-100)</option>
									<option value="A">A (70-79)</option>
									<option value="A-">A- (60-69)</option>
									
									<option value="B">B (50-59)</option>
									
									<option value="C">C (40-49)</option>
									<option value="D">D (33-39)</option>
									<option value="F">F (0-32)</option>
									
						</select>
						</div><br>
					
					<input type="submit" name="result_submit" value="Upload" class="btn btn-info"/>
					

					</form>
					<br><br>
				</div>
				
				<div class="col-md-6"style="border-style:solid;">
					<br>
					<?php
						if(!$carousel_error==""){
							echo $carousel_error;
						}
					?>
					<br>
					<form  method='post' enctype="multipart/form-data">
					<h3 align="center">Update Carousel Images</h3>  
					<div class="form-inline">
						
						<h5 style="margin-right:10px;">Image Number</h5>
						<br>
						<select style="" class="form-control col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-2" name="carousel_chooser">
									<option value="1">1st Image</option>
									<option value="2">2nd Image</option>
									<option value="3">3rd Image</option>
									<option value="4">4th Image</option>
									
									
						</select>
						</div>
						<h5 style="display:inline-block;margin-right:10px;">Insert Images (2000px*950px)</h5>
						 <input  type="file"  onchange="readURL(this);" name="carousel_image" id="student_image" />  
						 <br><br>
						<div style="margin-top:10px;margin-bottom:10px;margin-left:0px;margin-right:50px;width:306px;height:206px;border-style:solid;"> 
						<img id="blah" src="#" alt="" />
						</div>
						<br>
					
					<input type="submit" name="carousel_submit" value="Upload" class="btn btn-info"/>
					

					</form>
					
					<br><br>
				</div>
				
			</div>
			
			<div class="row">
				
				
				
				
				
			</div>
			
			
			
		</div>
		
		
		
		</div>
		<script src="js/admin.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
