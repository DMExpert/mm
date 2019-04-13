<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Preventive Maintenance 
	</title>
	<!-- Offline Link -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>
</head>
<body>

	<?php include 'header.php' ?>
<div class="container-fluid">
			<div class="row">
				
				<div class="col-5" style="margin-left: 3%;">
					<h3 style="margin-left: 12%; margin-top: 6%;"> PREVENTIVE MAINTENANCE </h3>

					<p style="color:Black;text-align: justify;margin-top: 4%;"> <b>We can provide the contract facility to our clients who purchase's household products somewhere, and they wants maintenance and management of their products. such people we can provide them that maintenance management facility through our website Online MAINTENANCE MANAGEMENT system.</b> <br><br>

					<b> Premetive Maintenance is done in every 3 months and it's is done our side if your product is in warrenty priod then our Engineers will comes on your address in every 3 months, and check's your products working functinalities or also check it is working properly or not. If your products have any issue in warrenty period then it will fix from us. Maintenance & Management of each and every customer and industry clients should be done here, until clients product's warrenty is avalable. warrenty which is provide by us while client's registration time on our webiste.</b></p>
				
			</div>


			<div class="col-6">
					<div class="col-5">
					<img src="images/preventive 01.jpg" style="width: 262%;height: 399px;margin-top: 15%;margin-left: 20%;">
				</div>
				</div>

		</div>
	</div>
	<div class="container" style="margin-bottom: 2%;"> <br>
		<div class="card bg-light">
			<article class="card-body mx-auto" style="width: 45%;">
				<h4 class="card-title mt-3 text-center"> PREVENTIVE MAINTENANCE </h4>
				<p class="text-center">Provide your product details to us for preventive maintenance </p>




				<form action="" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fab fa-product-hunt"></i> </i> </span>
					</div>
					<select class="custom-select" name="product_type" required="">
						<option selected="">Product type </option>
						<option value="Air Conditioner">Air Conditioner</option>
						<option value="Television">Television</option>
						<option value="Laptop">Laptop</option>
						<option value="Computer">Computer</option>
						<option value="Refrigerator">Refrigerator</option>
						<option value="Microwave Oven">Microwave Oven</option>
						<option value="Electric Kettle">Electric Kettle</option>
						<option value="Fans">Fans</option>
						<option value="Room Heater">Room Heater</option>
						<option value="Geyser">Geyser</option>
						<option value="Cooler">Cooler</option>
					</select>
				</div> <!-- form-group// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fab fa-product-hunt"></i> </i> </span>
					</div>
					<select class="custom-select" name="user_type" required="">
						<option selected=""> User Type </option>
						<option value="Household">Household</option>
						<option value="Industry">Industry</option>
					</select>
				</div> <!-- form-group// -->

				
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-industry"></i> </span>
					</div>
					<div class="form-control">Date of Manufacture</div>
				</div> 

				<div class="form-group input-group">
					<input name="dom" class="form-control" placeholder="Date of Manufacture" type="date" required="">
				</div> <!-- form-group// -->


				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-money-check-alt"></i> </span>
					</div>

					<div class="form-control">Date of Purchase</div>
				</div> 

				<div class="form-group input-group">
					<input name="dop" class="form-control" placeholder="Date of Purchase" type="date" required="">

				</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="serial_number" class="form-control" placeholder="Serial Number" type="text" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-rupee-sign"></i> </span>
						</div>
						<input name="product_cost" class="form-control" placeholder="Enter your product orignal cost" type="number" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-building"></i> </span>
						</div>
						<input name="address" class="form-control" placeholder="Address" type="text" required="">
					</div> <!-- form-group end.// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-rupee-sign"></i> </span>
						</div>
						<input name="preventive_cost" class="form-control" placeholder="Preventive Cost" type="number" value="3000" required="" readonly="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-rupee-sign"></i> </span>
						</div>
						<input name="payment_mode" class="form-control" placeholder="Payment Mode" type="text" value="Offline Mode" readonly="" required="">
					</div> <!-- form-group// -->



					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-rupee-sign"></i> </span>
						</div>
						<input name="valid_till" class="form-control" placeholder="" type="text" value="1 Year" readonly="" required="">
					</div> <!-- form-group// -->
				

					<input type="hidden" name="form_submitted" value="1">
					<div class="form-group">
						<button name="submit_btn" type="submit" class="btn btn-primary btn-block"> Submit Maintenance Contract </button>
					</div> <!-- form-group// -->

				</form>
			</article>
		</div> <!-- card.// -->

	</div> 
	<!--container end.//-->

	<?php include 'footer.php' ?>
	</html>

	<!-- Database Codeings --> 
	<?php
	if (isset($_POST['submit_btn'])) {

	require "connection.php";

	$product_type = $_POST['product_type'];
	$user_type = $_POST['user_type'];
	$dom = $_POST['dom'];
	$dop = $_POST['dop'];
	$serial_number = $_POST['serial_number'];
	$product_cost = $_POST['product_cost'];
	$address = $_POST['address'];
	$preventive_cost = $_POST['preventive_cost'];
	$payment_mode = $_POST['payment_mode'];
	$email = $_SESSION['email'];
	$date = Date("d-m-Y");
	$valid_till = $_POST['valid_till'];

	$sql ="INSERT Into user_product_info (product_type,user_type,email,dom,dop,serial_number,product_cost,address,preventive_cost,payment_mode,p_date,valid_till) values ('$product_type','$user_type','$email','$dom','$dop','$serial_number','$product_cost','$address','$preventive_cost','$payment_mode','$date','$valid_till')";

print_r($sql);
	$us = mysqli_query($conn,$sql);
	if($us){
	
	echo  " <script> alert(' Your Preventive Details has been submitted successfully. For view your record go on profile option ');
	window.location.href='user_preventive_record.php';
	</script>";
}
}


?>