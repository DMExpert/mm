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
<h1> Registered User List </h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> User ID </td>	
<td> Full Name </td>
<td> Date of Birth </td>
<td> Gender</td>
<td> Email </td>
<td> Phone Code </td>
<td> Mobile </td>
<td> Address </td>
<td> Password </td>
<td> Delete User </td>
</tr>




<?php 
require 'connection.php';
$view_users_query="select * from register";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$c_id = $row[0];
		$fullname = $row[1];
		$dob = $row[2];
		$gender = $row[3];
		$email = $row[4];
		$phone_code = $row[5];
		$mobile = $row[6];
		$address = $row[7];
		$password = $row[8];
		
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $c_id; ?> </td>	
<td> <?php echo $fullname; ?> </td>
<td> <?php echo $dob; ?> </td>
<td> <?php echo $gender; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $phone_code; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $password; ?> </td>


<td> <a href="deletetest.php?del=<?php echo $c_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



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

<!--
<?php

include("connection.php");
$delete_id=$_GET['del'];
$delete_query="delete from register WHERE id='$customer_id'";
$run=mysqli_query($dbconn,$delete_query);
if($run)
{

    echo "<script>window.open('user_delete.php? deleted=user has been deleted','_self')</script>";
}

?>

-->
