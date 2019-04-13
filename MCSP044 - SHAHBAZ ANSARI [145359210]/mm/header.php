<?php 
if(!session_id()) session_start(); // if(!session_id()) shahbaz i write this code here
?>
<!DOCTYPE html>
<html>
<head>
  <title> Navbar [header] </title>

  <!-- Offline Link -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>

  <!-- Online Link CDN Content dilevery network --> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: red;"> 
    <a class="navbar-brand" href="homepage.php"> <img src="images/header logo.png" style="width: 300px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php


        if (!empty($_SESSION['name'])) {
          ?>
        <div class="dropdown show" style="background-color: red">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;">
            Services
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="preventive_maintenance.php">Preventive Maintenance</a>
            <a class="dropdown-item" href="fault_repair.php">Fault Repair</a>
          </div>
        </div>

      <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="about_us.php" style="font-weight: bold;">About US</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="support.php" style="font-weight: bold;">Support</a>
        </li>
      

      </ul>
      

      <!-- The both item should be shif to right side of the navbar -->  
      <ul class="nav navbar-nav navbar-right">
        <?php


        if (!empty($_SESSION['name'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php"> <i class="far fa-user-circle" style="color: white; font-weight: bold;"></i>
              Hello <?php echo $_SESSION['name'];  ?>   </a>
            </li>    



            <div class="dropdown show" style="background-color: red">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;">
            Profile
          </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="user_preventive_record.php">View Your Preventive Service </a>
            <a class="dropdown-item" href="user_fault_repair.php"> View Your Fault Repair </a>
            <a class="dropdown-item" href="view_replaced_part.php"> View Replaced Part </a>
            <a class="dropdown-item" href="user_support_request.php"> View Your Support Request </a>
          </div>
        </div>
                    
            <li class="nav-item">
              <a class="nav-link" href="logout.php" style="color: white; font-weight: bold;"> <i class="fas fa-sign-out-alt"></i>
              Logout </a>
            </li>        
            <?php
          }else{
            ?>
            <li class="nav-item">

              <a class="nav-link" href="login.php" style="color: white; font-weight: bold;"> <i class="far fa-user-circle"></i>
              Login </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="register.php" style="color: white; font-weight: bold;"> <i class="fas fa-user-plus"></i>
              Sign up </a>
            </li>

            <?php
          }
          ?>


        </div>
      </nav>

    </body>
    </html>




