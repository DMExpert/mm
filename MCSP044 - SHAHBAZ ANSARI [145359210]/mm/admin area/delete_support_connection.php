<?php


include("connection.php");

$message = "Record has been deleted sucessfully";
$delete_id=$_GET['del'];
$delete_query="delete  from support WHERE support_id ='$delete_id'";
$run=mysqli_query($conn,$delete_query);
if($run)
{

	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.open('delete_support.php?deleted=Record has been deleted Sucessfully','_self')</script>";
}

?>
