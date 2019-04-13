<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> User Fault Repair Records </title>
</head>
<body>
	<?php include 'header.php'; ?>
<div class="container">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 26%;">
<h1> Your Replaced Part Details </h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Your ID </td>
<td> Customer Type </td>	
<td> Product Type </td>
<td> Brand of Product </td>
<td> Problem of Product </td>
<td> Replaced Part </td>
<td> Cost of Replaced Part </td>
<td> Assigned Engineer </td>
<td> Date of Replaced </td>
<td> Warrenty of Replaced Part </td>
<td> Print Report </td>


</tr>




<?php 
require 'connection.php';
$email = $_SESSION['email'];

$view_users_query="select * from replaced_part";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_assoc($run))
{
	
		$replace_id = $row['replace_id'];
		$customer_type = $row['customer_type'];
		$product_type = $row['product_type'];
		$brand = $row['brand'];
		$problem = $row['problem'];
		$replaced_part = $row['replaced_part'];
		$cost = $row['cost'];
		$engineer = $row['engineer'];
		$date_of_replaced = $row['date_of_replaced'];
		$warrenty = $row['warrenty'];
		
		
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $replace_id; ?> </td>	
<td> <?php echo $customer_type; ?> </td>
<td> <?php echo $product_type; ?> </td>
<td> <?php echo $brand; ?> </td>
<td> <?php echo $problem; ?> </td>
<td> <?php echo $replaced_part; ?> </td>
<td> <?php echo $cost; ?> </td>
<td> <?php echo $engineer; ?> </td>
<td> <?php echo $date_of_replaced; ?> </td>
<td> <?php echo $warrenty; ?> </td>

<script>
        function printf(){
 window.print();
        }</script>

<td> <button class="btn btn-success" onclick="printf()"> Print </button> </td>
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