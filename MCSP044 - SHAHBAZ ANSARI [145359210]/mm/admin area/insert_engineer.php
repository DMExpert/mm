<!DOCTYPE html>
<html>
<head>
	<title>
		Insert Engineer's Admin Page
	</title>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container">
<div class="row" style="margin-top: 5%;margin-bottom: 8%;">
<div class="col-md-3"></div>
<div class="col-md-6" style="border: 2px solid;">

<center> <h1 class="text-info text-centert" style="padding-left: 20px;"> Add Engineer </h1> </center>
<form action="" method="post" enctype="multipart/form-data">
<table class="table table-stripped">

<!-- 
<tr>
<td><input type="file" name="picture" class="form-control"></td>
<td><input type="submit" value="upload" class="btn btn-danger"></td>
</tr>
-->
</table>
</form>


<form action="" method="post">
<table style="align-items: center;" border="" class="table table-stripped">

<tr>
<td> Engineer's Name: 
<td><input type="text" name="engineer_name" class="form-control" required>
</tr>

<tr>
<td> Email ID :
<td><input type="email" name="email" class="form-control" required>
</tr>

<tr>
<td> Contact Number :
<td><input type="number" name="mobile" class="form-control" required>
</tr>

<tr>
<td> Date of Joining :</td>
<td><input type="date" name="doj" class="form-control"></td>
</tr>

<tr>
<td> Engineer's Specialities:</td>
<td><input type="text" name="engineer_specialities" class="form-control"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Add Engineer" class="btn btn-danger" name="submit_btn">
<input type="reset" value="reset" class="btn btn-danger">
</td>

</tr>
</table>
</form>


</div>
<div class="col-md-3"></div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>

<!--  Databse coadings -->
<?php
	if (isset($_POST['submit_btn'])) {
		
		require "connection.php";

		$image_name = $_POST['image_name'];
		$engineer_name = $_POST['engineer_name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$doj = $_POST['doj'];
		$engineer_specialities = $_POST['engineer_specialities'];
		

		$sql ="INSERT Into engineers (image_name, engineer_name, email, mobile, doj, engineer_specialities) values ('$image_name','$engineer_name','$email','$mobile','$doj','$engineer_specialities')";
		$us = mysqli_query($conn,$sql);
		if($us){
			echo"<script>alert('Engineer Added Sucessfully')</script>";
			echo"<script>window.open('view_engineer.php','_self')</script>";
		}
	}


	?>