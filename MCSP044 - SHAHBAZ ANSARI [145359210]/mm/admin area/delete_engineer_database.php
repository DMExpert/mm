<?php


include("connection.php");

$message = "Engineer has been deleted sucessfully";
$delete_id=$_GET['del'];
$delete_query="delete  from engineers WHERE engineer_id ='$delete_id'";
$run=mysqli_query($conn,$delete_query);
if($run)
{

	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.open('delete_engineer.php?deleted=Engineer has been deleted Sucessfully','_self')</script>";
}

?>
