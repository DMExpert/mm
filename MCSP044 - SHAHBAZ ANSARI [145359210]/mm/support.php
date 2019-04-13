<!DOCTYPE html>
<html>
<head>
	<title> Support </title>
	<body>

		<?php include 'header.php' ?>

		<div class="container">
			<div class="row" style="margin-top: 3%; margin-bottom: 3%;">
				<div class="col-md-4">
					<div class="contact-info">
						<img src="images/email 04.png" style="width: 89%; margin-top: 5%;">
						<h2>Contact Us</h2>
						<h4 style="text-align: justify;"> We would love to hear from you, and solve your problem </h4>
					</div>
				</div>
				<div class="col-md-8">
					<form action="" method="POST">
					<div class="contact-form">
						<div class="form-group">
							
							<label class="control-label col-sm-4" for="name">Your Name:</label>
							<div class="col-sm-10">          
								<input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-sm-4" for="mobile">Registered Mobile No :</label>
							<div class="col-sm-10">          
								<input type="number" class="form-control" id="mobile" placeholder="Enter Your Registered Mobile No" name="mobile">
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-sm-4" for="product">Product:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="product" placeholder="Enter your product Name" name="product_name">
							</div>
						</div>

					
						<div class="form-group">
							<label class="control-label col-sm-4" for="problem">Write Your Problem Here :</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="problem" name="query"></textarea>
							</div>
						</div>
					
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="submit_btn" class="btn btn-danger" style="margin-top: 1%;"> Submit </button>
							</div>
						</div>
					
					</div>
					</form>
				</div>
			</div>
		</div>


		<?php include 'footer.php' ?>

		</body>
	</html>
	

	<!-- Database Codeings --> 
	<?php
	if (isset($_POST['submit_btn'])) {

		require "connection.php";

		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$product_name = $_POST['product_name'];
		$problem = $_POST['query'];
		$support_req_date = Date("d-m-Y");


		$sql ="INSERT Into support (name, mobile, product_name,query,support_req_date) values ('$name','$mobile','$product_name','$problem','$support_req_date')";
		$support = mysqli_query($conn,$sql);
		if($support) {
			echo  " <script> alert(' Your Query is submitted sucessfully, our team will call you shortly ');
	window.location.href='homepage.php';
	</script>";
		}
	}


	?>
	