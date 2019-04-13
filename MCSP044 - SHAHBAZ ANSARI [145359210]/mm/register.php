<!DOCTYPE html>
<html>
<head>
	<title> Registration Page </title>
	<!-- Offline Link -->
	<!-- CSS --> 
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
	<!-- java script -->
	<script type="text/javascript" src="bootstrap/bootstrap.js"></script>

	<!-- Online Link CDN Content dilevery network -->
	<!-- Font Icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>


<body>

	<?php include 'header.php' ?>


	<div class="container-fluid"> <br>
		<div class="card bg-light" style="margin-bottom: 2%;">
			<article class="card-body mx-auto" style="max-width: 400px;">
				<h4 class="card-title mt-3 text-center">Create Account</h4>
				<p class="text-center">Get started with your free account</p>
				

				<form action="" method="POST">
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-user"></i> </span>
						</div>
						<input name="fullname" class="form-control" placeholder="Full name" type="text" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="far fa-calendar-alt"></i> </span>
						</div>
						<div class="form-control">Date of Birth</div>
					</div> 
					<div class="form-group input-group">
						<input name="dob" class="form-control" placeholder="Date of birth" type="date" required="">
					</div> <!-- form-group// -->
					

					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
						</div>
						<select class="custom-select" name="gender" required="">
							<option selected="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input name="email" class="form-control" placeholder="Email address" type="email" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
						</div>
						<select name="phone_code" class="custom-select" style="max-width: 120px;" required="">
							<option selected hidden value="">Select Code</option>
							<option value="+91">+91</option>
							<option value="011">011</option>
						</select>
						<input name="mobile" class="form-control" placeholder="Phone number" type="number" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-building"></i> </span>
						</div>
						<input name="address" class="form-control" placeholder="Address" type="text" required="">
					</div> <!-- form-group end.// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="password" class="form-control" placeholder="Create password" type="password" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="password2" class="form-control" placeholder="Repeat password" type="password" required="">
					</div> <!-- form-group// -->

					<!--  -->
					<input type="hidden" name="form_submitted" value="1">




					<div class="form-group">
						<button name="submit_btn" type="submit" class="btn btn-primary btn-block"> Create Account  </button>
					</div> <!-- form-group// -->

					<p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
				</form>
			</article>
		</div> <!-- card.// -->

	</div> 
	<!--container end.//-->

	</body>
</html>

	<?php include 'footer.php' ?>
	</html>

	<?php
	if (isset($_POST['submit_btn'])) {
		
		require "connection.php";


		$fullname = $_POST['fullname'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone_code = $_POST['phone_code'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$user_type = 'user';

		$sql ="INSERT Into register (fullname, dob, gender, email, phone_code, mobile, address, password,user_type) values ('$fullname','$dob','$gender','$email','$phone_code','$mobile','$address','$password','$user_type')";
		$us = mysqli_query($conn,$sql);
		if($us){
			echo"<script>alert('User Registerded Sucessfully')</script>";
			echo"<script>window.open('login.php','_self')</script>";
		}
	}


	?>




