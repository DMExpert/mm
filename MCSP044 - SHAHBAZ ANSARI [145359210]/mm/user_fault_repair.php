<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> User Fault Repair Records </title>
</head>
<body>
	<?php include 'header.php'; ?>
<div class="container-fluid">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 10%;">
<h1> Your Fault Related Details </h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Your ID </td>	
<td> Product Type </td>
<td> Brand of Product </td>
<td> Date of Manufacture </td>
<td> Date of Purchase </td>
<td> Serial Number </td>
<td> Cost of Your Product </td>
<td> Mobile No </td>
<td> Address </td>
<td> Problem with your product </td>
<td> Engineer Name </td>
<td> Engineer Mobile No. </td>

</tr>




<?php 
require 'connection.php';
$email = $_SESSION['email'];

$view_users_query="select * from fault_repair where email='$email'";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_assoc($run))
{
	
		$fault_repair_id = $row['fault_repair_id'];
		$product_type = $row['product_type'];
		$brand_name = $row['brand_name'];
		$dom = $row['dom'];
		$dop = $row['dop'];
		$serial_number = $row['serial_number'];
		$product_cost = $row['product_cost'];
		$mobile_no = $row['mobile_no'];
		$address = $row['address'];
		$problem = $row['problem'];
		$email = $row['email'];
		$eng_name = $row['eng_name'];
		$eng_phone = $row['eng_phone'];
		
		
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $fault_repair_id; ?> </td>	
<td> <?php echo $product_type; ?> </td>
<td> <?php echo $brand_name; ?> </td>
<td> <?php echo $dom; ?> </td>
<td> <?php echo $dop; ?> </td>
<td> <?php echo $serial_number; ?> </td>
<td> <?php echo $product_cost; ?> </td>
<td> <?php echo $mobile_no; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $problem; ?> </td>
<td> <?php echo $eng_name; ?> </td>
<td> <?php echo $eng_phone; ?> </td>

</tr>

</tbody>
<?php 
} ?>
</table>

</div>
</div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>