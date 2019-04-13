<!DOCTYPE html>
<html>
<head>
	<title>
		Preventive Maintenance 
	</title>
</head>
<body>

	<?php include 'header.php' ?>
	<div class="container-fluid">
		<div class="row" style="padding-top: 3%; padding-bottom: 4%;">

			<div class="col-5" style="margin-left: 8%">
				<h3 style="margin-left: 35%; margin-top: 6%;"> FAULT REPAIR </h3>

				<p style="color:Black;text-align: justify;margin-top: 4%;"> <b>This service is provide to you whenever call or request is made by your side, this service cover's your products fault repair and if any need to change products parts if previous part is not working, than it will be changed and we will give you warrenty of that part which is 2 months</b> <br> <br>

					<b> Doorstep engineer facility if customers/clients products will have any kind of probelm. We also provide the warrenty of replaced parts to our clients, which is 3 months of warrenty after replacing it.</b> <br> <br>

					<b> If your product is not working than please fill the given form and submit your product issues as soon as possible. we will try to short out your query as soon as poosible by sending our enginer's at your address.</b>
				</p>
				
			</div>


			<div class="col-6">
				<div class="col-5">
					<img src="images/fault repair.jpg" style="width: 193%; margin-top: 13%; margin-left: 20%;">
				</div>
			</div>

		</div>
	</div>


<div class="container" style="margin-bottom: 2%;"> <br>
		<div class="card bg-light">
			<article class="card-body mx-auto" style="width: 40%;">
				<h4 class="card-title mt-3 text-center"> FAULT REPAIR FORM </h4>
				<p class="text-center">Provide your product details to us for FAULT REPAIR SERVICES </p>




				<form action="fault_repair.php" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fab fa-product-hunt"></i> </i> </span>
					</div>
					<select class="custom-select" name="product_type" required="">
						<option selected="">Choose Your Product type </option>
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
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="brand_name" class="form-control" placeholder="Brand of Your Product" type="text" required="">
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
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="mobile_no" class="form-control" placeholder="Enter Your Mobile Number" type="number" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="address" class="form-control" placeholder="Enter Your Proper Address" type="text" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="problem" class="form-control" placeholder="What problem are you facing" type="text" required="">
					</div> <!-- form-group// -->
				

					<input type="hidden" name="form_submitted" value="1">

					<div class="form-group">
						<a href="#"><button name="submit_btn" type="submit" class="btn btn-primary btn-block"> Submit Maintenance Contract </button> </a>
					</div> <!-- form-group// -->

				</form>
			</article>
		</div> <!-- card.// -->

	</div> 
	<!--container end.//-->
	<?php include 'footer.php'; ?>
</body>

	
	</html>

	<!-- Database Codeings --> 
	<?php
	if (isset($_POST['submit_btn'])) {

	require "connection.php";
	$email = $_SESSION['email'];

	$product_type = $_POST['product_type'];
	$brand_name = $_POST['brand_name'];
	$dom = $_POST['dom'];
	$dop = $_POST['dop'];
	$serial_number = $_POST['serial_number'];
	$product_cost = $_POST['product_cost'];
	$mobile_no = $_POST['mobile_no'];
	$address = $_POST['address'];
	$problem = $_POST['problem'];
	$email = $_SESSION['email'];
	


	
	$sql ="INSERT Into fault_repair (product_type, brand_name, dom, dop, serial_number, product_cost, mobile_no, address, problem,email) values ('$product_type', '$brand_name','$dom','$dop','$serial_number','$product_cost', '$mobile_no', '$address', '$problem', '$email')";
	$us = mysqli_query($conn,$sql);
	if($us){
	echo  " <script> alert(' Your Fault information has been submitted successfully. For view your record go on profile option ');
	window.location.href='user_fault_repair.php';
	</script>";


}
}


?>
