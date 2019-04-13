<!DOCTYPE html>
<html>
<head>
	<title>
		Sugesst Engineer
	</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
	<div class="col-md-4"> </div>
	<div class="col-md-4" style="margin-top: 7%; margin-bottom: 7%;">
                <h2>
                    <center>Suggest Engineer's</center>
                </h2>

                <form role="form" method="post" action="">
                  <div class="form-group">
                        <label for="name">Select Engineer's:</label>
                        <select class="form-control" name="product_type" required>
                    <option value="Ritesh"> Ritesh </option>
                    <option value="Abhay"> Abhay </option>
                    <option value="Amresh"> Amresh </option>
                    <option value="Anirudth"> Anirudh </option>
                    <option value="Ankit"> Ankit </option> 
                    <option value="Devender"> Devender </option>
                    <option value="Shahbaz"> Shahbaz</option>
                            </select>
                    </div>
                    <div class="form-group">
                    	<label for="name">Mobile No :</label>
                        <input type="number" class="form-control" name="make" placeholder="Mobile no of engineer name" required>
                        <input type="hidden" class="form-control" name="id" placeholder="Mobile no of engineer name" value="<?php echo $_GET['id']; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="REQUEST"> Submit </button>

        </form>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>

<?php
require "connection.php";
if (isset($_POST['REQUEST'])) {
	# code...

$make = $_POST['make'];
$id = $_POST['id'];
$product_type = $_POST['product_type'];

$sql  = "update fault_repair set eng_name='$product_type', eng_phone ='$make' where fault_repair_id='$id' ";

if (mysqli_query($conn,$sql)) {
	# code...

}
}

?>