<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="studentprofile";
$conn=new mysqli("$dbhost","$dbuser","$dbpass","$dbname") or die("could not connect to mysql");

//mysqli_select_db($dbname,$conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
  <script         src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body style="background-image:url('quote.jpg');background-repeat:no-repeat;background-size:100% ;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#">
<h3>STUDENT PROFILE BUILDING</h3>
</a>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="studentreg.php">STUDENT REGISTRATION</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="lecreg.php">LECTURE REGISTRATION</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="slogin.php"> STUDENT LOGIN</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="llogin.php"> LECTURE LOGIN</a>
    </li>
</ul>
</nav>
</body>
</html>