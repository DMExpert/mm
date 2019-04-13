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
<h1> Support Records </h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Support ID </td>	
<td> Name </td>
<td> Registered Mobile No </td>
<td> Product </td>
<td> Problem in Machine </td>
<td> Delete Details </td>
</tr>




<?php 
require 'connection.php';
$view_users_query="select * from support";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$support_id = $row[0];
		$name = $row[1];
		$mobile = $row[2];
		$product_name = $row[3];
		$query = $row[4];
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $support_id; ?> </td>	
<td> <?php echo $name; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $product_name; ?> </td>
<td> <?php echo $query; ?> </td>

<td> <a href="delete_support_connection.php?del=<?php echo $support_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



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