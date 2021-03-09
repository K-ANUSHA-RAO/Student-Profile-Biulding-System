<?php  
require'dbconnect.php';
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
<body style="background-image:url('book.jpeg');background-repeat:no-repeat;background-size:100% ;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#">
<h3>STUDENT PROFILE BUILDING</h3>
</a>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">HOME</a>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        BOOKS
      </a>
	  <div class="dropdown-menu">
        <a class="dropdown-item" href="viewbooks.php">View</a>
		</div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        PROJECT
      </a>
	  <div class="dropdown-menu">
        <a class="dropdown-item" href="viewproject.php">View</a>
		</div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        EVENTS
      </a>
	  <div class="dropdown-menu">
        <a class="dropdown-item" href="viewevents.php">View</a>
		</div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        CERTIFICATE
      </a>
	  <div class="dropdown-menu">
        <a class="dropdown-item" href="viewcert.php">View</a>
		</div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        MARKS
      </a>
	  <div class="dropdown-menu">
        <a class="dropdown-item" href="marksup.php">Update</a>
        <a class="dropdown-item" href="viewmarks.php">View</a>
		</div>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="index.php">LOGOUT</a>
    </li>
</ul>
</nav>
</body>
</html>