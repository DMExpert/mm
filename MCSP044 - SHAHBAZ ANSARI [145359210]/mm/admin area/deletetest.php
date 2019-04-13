<?php


include("connection.php");

$message = "User has been deleted sucessfully";
$delete_id=$_GET['del'];
$delete_query="delete  from register WHERE customer_id ='$delete_id'";
$run=mysqli_query($conn,$delete_query);
if($run)
{

	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.open('delete_user.php?deleted=user has been deleted','_self')</script>";
}

?>
