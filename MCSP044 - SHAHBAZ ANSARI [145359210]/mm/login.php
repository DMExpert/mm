<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title> Login Form </title>
  <!-- Offline Link -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>

  <!-- Online Link CDN Content dilevery network -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body class="text-center">
  <?php 
  include 'header.php';
  ?>
  <div class="container-fluid">
    <center>
      <form method="post" action="" class="form-signin" style="width: 25%;margin-bottom: 5%; margin-top: 3%;">
        <img class="mb-4" src="images/main logo.png" alt="" width="202px" height="202px">
        <h1 class="h3 mb-3 font-weight-normal" style="margin-top: -12%;">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address" required> 
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button name="sign_in" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <button class="btn btn-lg btn-primary btn-block" type="submit"> <a href="register.php" style="color: white;">New User Sign up </a> </button>
      </form>
    </center>
  </div>

  <?php include 'footer.php' ?>

</body>
</html>

<?php
if (isset($_POST['sign_in'])) {
  require "connection.php";
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql= "select * from register where email='".$email."' AND password='".$password."' ";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  $_SESSION['name'] = $row['fullname'];
  $_SESSION['email'] = $row['email'];
  if (!empty($_SESSION['email'])) {

    ?>
    <script type="text/javascript">
      window.location.href = 'homepage.php';
    </script>
    <?php
  }



}
?>
