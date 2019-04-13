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
<h1> Fault Repair Service Records </h1>

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
<td> Delete Details </td>
</tr>




<?php 
require 'connection.php';
$view_users_query="select * from fault_repair";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$fault_repair_id = $row[0];
		$product_type = $row[1];
		$brand_name = $row[2];
		$dom = $row[3];
		$dop = $row[4];
		$serial_number = $row[5];
		$product_cost = $row[6];
		$mobile_no = $row[7];
		$address = $row[8];
		$problem = $row[9];
		
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

<td> <a href="delete_fault_repair_record_connection.php?del=<?php echo $fault_repair_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



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