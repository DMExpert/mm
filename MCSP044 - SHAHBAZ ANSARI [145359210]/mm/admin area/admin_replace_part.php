<!DOCTYPE html>
<html>
<head>
	<title> Admin Fault Repair Product Details </title>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container">
	<div class="col-md-4"> </div>
	<div class="col-md-4">
                <h2>
                    <center> Part Replace </center>
                </h2>

                <form role="form" method="post" action="">
                	<div class="form-group">
                        <label for="name">Customer Type :</label>
                        <select class="form-control" name="customer_type" required>
                    <option selected=""> Option </option>
						<option value="Household"> Household </option>
						<option value="Industry"> Industry </option>
				</select>
				</div>


                  <div class="form-group">
                        <label for="name">Choose your Product:</label>
                        <select class="form-control" name="product_type" required>
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
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="brand" placeholder="Brand of your product" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="problem" placeholder="Problem with product" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="replaced_part" placeholder="Part Replaced" required>
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="number" class="form-control" name="cost" placeholder="Amount of Replaced Part" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="engineer" placeholder="Assigned Engineer" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="warrenty" placeholder="" value="2 Months" readonly="" required="">
                    </div>
                   

                    <button type="submit" class="btn btn-primary btn-block" name="submit_btn">REQUEST</button>  <button type="reset" class="btn btn-primary btn-block" value="reset">RESET</button>


                </form>
            </div>

</div>
<div class="col-md-4"> </div>


<?php include 'footer.php'; ?>
</body>
</html>


	<!-- Database Codeings --> 
	<?php
	if (isset($_POST['submit_btn'])) {

	require "connection.php";

	$customer_type = $_POST['customer_type'];
	$product_type = $_POST['product_type'];
	$brand = $_POST['brand'];
	$problem = $_POST['problem'];
	$replaced_part = $_POST['replaced_part'];
	$cost = $_POST['cost'];
	$engineer = $_POST['engineer'];
	$date = Date("d-m-Y");
	$warrenty = $_POST['warrenty'];
	
	
	$sql ="INSERT Into replaced_part (customer_type, product_type, brand, problem, replaced_part, cost, engineer, date_of_replaced, warrenty) values ('$customer_type','$product_type','$brand','$problem','$replaced_part','$cost','$engineer','$date', '$warrenty')";
	$us = mysqli_query($conn,$sql);
	if($us){
	echo  " <script> alert(' Part Replaced Information Updated Sucessfully ');
	window.location.href='home.php';
	</script>";
}
}


?>