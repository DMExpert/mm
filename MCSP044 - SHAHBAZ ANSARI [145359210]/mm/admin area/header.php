<?php 
if(!session_id()) session_start(); // if(!session_id()) shahbaz i write this code here
?>

<!DOCTYPE html>
<html>
<head>
  <title> Navbar [header] </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-inverse">
<ul class="nav navbar-nav">
<li class="active"><a href="home.php">Home</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> View <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="view_user.php" target=""> Registered User's </a></li>
<li><a href="preventive_records.php" target=""> Preventive Maintenance Record's </a></li>
<li><a href="view_fault_repair.php" target=""> Fault Repairs </a></li>
<li><a href="view_support.php" target=""> Support Details </a></li>
<li><a href="view_engineer.php" target=""> Engineer's Detail </a></li>
</ul>
</li>


<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Add <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="insert_engineer.php" target=""> Engineer's </a></li>
<li><a href="admin_replace_part.php" target=""> Replace Part Details on User's Dashboard </a></li>
</ul>
</li>

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Delete <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="delete_user.php" target=""> User's </a></li>
<li><a href="delete_preventive_record.php" target=""> Preventive Maintenance Record's </a></li>
<li><a href="delete_fault_repair_record.php" target=""> Fault Repair Record's </a></li>
<li><a href="delete_support.php" target=""> Support Details </a></li>
<li><a href="delete_engineer.php" target=""> Engineer's Detail </a></li>
</ul>
</li>

</ul>

<ul class="nav navbar-nav navbar-right">
<?php
        if (!empty($_SESSION['name'])) {
          ?>
<li><a href="login.php"><span class="glyphicon glyphicon-user"></span>
Hello <?php echo $_SESSION['name'];  ?> </a> </li>


<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
<?php
          }else{
            ?>

 <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>
	Login </a> </li>
</ul>
<?php
          }
          ?>

</nav>

</body>
</html>
