<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Login
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="border: 0px solid grey; padding: 20px; text-align: center; box-shadow: 1px 1px 4px 4px #300; margin-top: 10%;margin-bottom: 10%;">

<!-- <h2><span class="glyphicon glyphicon-log-in"></span></h2><br/> -->
<img src="images/main logo.png" style="width: 45%;">
<h1> Admin Login </h1>
<form action="home.php" method="post">
<label>Email</label>
<input type="email" name="email" class="form-control"/>
<label>Password</label>
<input type="password" name="password" class="form-control"/>
<br/>
<button class="btn btn-info" type="submit" style="background-color: #300;">login</button>
<button class="btn btn-info" style="background-color: #300;">cancel</button>

</form>
</div>
<div class="col-md-4"></div>
</div>
</div>


</body>
</html>