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
  </head>
  <body style="background-image:url('event.jpg');background-repeat:no-repeat;">
  <?php
 $status="";
   if(isset($_POST['submit'])){
	   $EVENTNAME=$_POST['EVENTNAME'];
	   $EVENTDATE=$_POST['EVENTDATE'];
	   $SUSN=$_POST['SUSN'];
	   $sql="INSERT INTO events VALUES ('$EVENTNAME','$EVENTDATE','$SUSN')";
	   $result=mysqli_query($conn,$sql);
	   if(($result))
		{
					echo '<script type="text/javascript">alert("Added successfully ")</script>';
						?>
						<script type="text/javascript">
						window.location.href="shome.php"</script>
						<?php

		}
		else {
					$status = '
				 <div class="alert alert-danger">
					 <strong>Failed!</strong> Not Added!
				 </div>';
		}
	}
?>
  <center style="color:white"><h1>EVENT DETAILS UPDATE</h1>
  <div class="container" style="margin-left:1%;background-color:black;margin-top:3%;padding-top:2%;width:60%;">
  <form action="event.php" method="post">
 <div class="row">
<div class="col-sm-3" style="color:white;">EVENT NAME</div>
<div class="col-sm-3">
<input type="text" class="form-control" name="EVENTNAME" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">EVENT DATE</div>
<div class="col-sm-3">
<input type="date" class="form-control" name="EVENTDATE" value=" ">
</div>
</div></br>
<div class="row">
 <div class="col-sm-3" style="color:white;">USN</div>
 <div class="col-sm-3"> 
 <input type="text" class="form-control" name="SUSN" value=" ">
</div>
</div></br>
<div class="row">
<input type="submit" name="submit" class="btn btn-danger" value="ADD" style="margin-left:10%">
<input type="reset" style="margin-left:6%" class="btn btn-info" value="reset">
</div>
</form>
</div>
 </body>
 </html>