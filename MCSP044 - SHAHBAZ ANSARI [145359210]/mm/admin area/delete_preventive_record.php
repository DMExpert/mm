<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

<?php include 'header.php'; ?>
<div class="container">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit;">
<h1> Preventive Service Records </h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Product ID </td>	
<td> Product Type </td>
<td> Customer Type </td>
<td> Email </td>
<td> Date of Manufacture </td>
<td> Date of Purchase </td>
<td> Serial Number </td>
<td> Product Cost </td>
<td> Address </td>
<td> Preventive Cost </td>
<td> Payment Mode </td>
<td> Delete Details </td>
</tr>




<?php 
require 'connection.php';
$view_users_query="select * from user_product_info";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$product_id = $row[0];
		$product_type = $row[1];
		$customer_type = $row[2];
		$email = $row[3];
		$dom = $row[4];
		$dop = $row[5];
		$serial_number = $row[6];
		$product_cost = $row[7];
		$address = $row[8];
		$preventive_cost = $row[9];
		$payment_mode = $row[10];
		
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $product_id; ?> </td>	
<td> <?php echo $product_type; ?> </td>
<td> <?php echo $customer_type; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $dom; ?> </td>
<td> <?php echo $dop; ?> </td>
<td> <?php echo $serial_number; ?> </td>
<td> <?php echo $product_cost; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $preventive_cost; ?> </td>
<td> <?php echo $payment_mode; ?> </td>

<td> <a href="delete_preventive_record_connection.php?del=<?php echo $product_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



</tr>

</tbody>
<?php } ?>
</table>

</div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>