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
<body style="background-image:url('img2.png');background-size:100% 100%;background-repeat:no-repeat;">
<?php
 $status="";
   if(isset($_POST['submit'])){
	   $LFNAME=$_POST['LFNAME'];
	   $LMNAME=$_POST['LMNAME'];
	   $LLNAME=$_POST['LLNAME'];
	   $LECID=$_POST['LECID'];
	   $DNAME=$_POST['DNAME'];
	   $USERNAME=$_POST['USERNAME'];
	   $LPASSWRD=$_POST['LPASSWRD'];
	   $sql="INSERT INTO lecture VALUES ('$LFNAME','$LMNAME','$LLNAME','$LECID','$DNAME','$USERNAME','$LPASSWRD')";
	   $result=mysqli_query($conn,$sql);
	   if(($result))
		{
					echo '<script type="text/javascript">alert("Registered successfully ")</script>';
						?>
						<script type="text/javascript">
						window.location.href="llogin.php"</script>
						<?php

		}
		else {
					$status = '
				 <div class="alert alert-danger">
					 <strong>Failed!</strong> Not Registered!
				 </div>';
		}
	}
?>
<div class="col" id="status">

			<?php echo $status ?>
</div>
<h2 class="display-4" style="allign:center;margin-left:28%;margin-top:5%;padding-top:1%;width:50%;color:white"> LECTURE REGISTRATION </h2></br>
<div class="p-5 rounded-sm"  style="allign:center;margin-left:25%;margin-top:5%;background-color:white;padding-top:2%;width:50%">
<form action="lecreg.php" method="post">
<div class="row">
 <div class="col-sm-3" >FIRST NAME</div>
 <div class="col-sm-3"> 
 <input type="text" class="form-control" name="LFNAME" value=" " required>
</div>
</div></br>
<div class="row">
<div class="col-sm-3" >MIDDLE NAME</div>
<div class="col-sm-3">
<input type="text" class="form-control" name="LMNAME" value=" ">
</div>
</div></br>
<div class="row">
<div class="col-sm-3">LAST NAME</div>
<div class="col-sm-3">
<input type="text" class="form-control" name="LLNAME" value=" ">
</div>
</div></br>
<div class="row">
 <div class="col-sm-3" >LECTURE ID</div>
 <div class="col-sm-3"> 
 <input type="text" class="form-control"  name="LECID" required>
</div>
</div></br>
<div class="row">
 <div class="col-sm-3">DEPARTMENT NAME</div>
 <div class="form-check";>
						<label class="form-check-label" for="radio1">
							<input type="radio" class="form-check-input" id="radio1" name="DNAME" value="CS" >CS
						</label>
					</div>
					<div class="form-check" >
						<label class="form-check-label" for="radio2">
							<input type="radio" class="form-check-input" id="radio2" name="DNAME" value="IS">IS
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label" for="radio2">
							<input type="radio" class="form-check-input" id="radio3" name="DNAME" value="EC">EC
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label" for="radio3">
							<input type="radio" class="form-check-input" id="radio4" name="DNAME" value="MECHANICAL">MECHANICAL
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label" for="radio2">
							<input type="radio" class="form-check-input" id="radio5" name="DNAME" value="CIVIL">CIVIL
						</label>
					</div>
</div></br>
<div class="row">
 <div class="col-sm-3">USERNAME</div>
 <div class="col-sm-3"> 
 <input type="email" class="form-control"  name="USERNAME" required>
</div>				
</div></br>
<div class="row">
 <div class="col-sm-3" >PASSWORD</div>
 <div class="col-sm-3"> 
 <input type="password" class="form-control"  name="LPASSWRD" required>
</div>
</div></br>
<div class="row">
<input type="submit" class="btn btn-danger" name="submit" value="submit" style="margin-left:10%">
<input type="reset" style="margin-left:6%" class="btn btn-info" value="reset">
</div>
</form>
</div>
</html>