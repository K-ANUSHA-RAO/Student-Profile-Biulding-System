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
  <body style="background-image:url('books.jpeg');background-repeat:no-repeat;background-size:100% ;">
  <?php
 $status="";
   if(isset($_POST['submit'])){
	   $USN=$_POST['USN'];
	   $BORROWDATE=$_POST['BORROWDATE'];
	   $RETURNDATE=$_POST['RETURNDATE'];
	   $BOOKID=$_POST['BOOKID'];
	   $sql="INSERT INTO book VALUES ('$USN','$BORROWDATE','$RETURNDATE','$BOOKID')";
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
					 <strong>Failed!</strong> Not ADDED!
				 </div>';
		}
	}
?>
  <center><h1>BOOK DETAILS UPDATE</h1>
  <div class="container" style="margin-left:1%;background-color:black;margin-top:3%;padding-top:2%;width:60%;">
  <form action="bookup.php" method="post">
  <div class="row">
 <div class="col-sm-3" style="color:white;">USN</div>
 <div class="col-sm-3"> 
 <input type="text" class="form-control" name="USN" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">BORROW DATE</div>
<div class="col-sm-3">
<input type="date" class="form-control" name="BORROWDATE" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">RETURN DATE</div>
<div class="col-sm-3">
<input type="date" class="form-control" name="RETURNDATE" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3" style="color:white;">BOOK ID</div>
<div class="col-sm-3">
<input type="number" class="form-control" name="BOOKID" value=" ">
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
  