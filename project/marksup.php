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
  <body style="background-image:url('marks.jpg');background-repeat:no-repeat;background-size:100% ;">
  <?php
 $status="";
   if(isset($_POST['submit'])){
	   $USN=$_POST['USN'];
	   $SEM=$_POST['SEM'];
	   $SUBNAME=$_POST['SUBNAME'];
	   $INTMARKS=$_POST['INTMARKS'];
	   $EXTMARKS=$_POST['EXTMARKS'];
	   $TOTAL=$_POST['TOTAL'];
	   $sql="INSERT INTO marks VALUES ('$USN','$SEM','$SUBNAME','$INTMARKS','$EXTMARKS','$TOTAL')";
	   $result=mysqli_query($conn,$sql);
	   if(($result))
		{
					echo '<script type="text/javascript">alert("Added successfully ")</script>';
						?>
						<script type="text/javascript">
						window.location.href="lhome.php"</script>
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
  <center><h1>MARKS DETAILS UPDATE</h1>
  <div class="container" style="margin-left:1%;background-color:black;margin-top:3%;padding-top:2%;width:60%;">
  <form action="marksup.php" method="post">
  <div class="row">
 <div class="col-sm-3" style="color:white;">USN</div>
 <div class="col-sm-3"> 
 <input type="text" class="form-control" name="USN" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">SEM</div>
<div class="col-sm-3">
<input type="number" class="form-control" name="SEM" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">SUBJECT NAME</div>
<div class="col-sm-3">
<input type="text" class="form-control" name="SUBNAME" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">INTERNAL MARKS</div>
<div class="col-sm-3">
<input type="number" class="form-control" name="INTMARKS" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">EXTERNAL MARKS</div>
<div class="col-sm-3">
<input type="number" class="form-control" name="EXTMARKS" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">TOTAL</div>
<div class="col-sm-3">
<input type="number" class="form-control" name="TOTAL" value=" ">
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