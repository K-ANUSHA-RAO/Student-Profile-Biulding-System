<?php  
require'dbconnect.php';
?> 
<html>
<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
  <script         src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">  </script>
  </head>
  <body style="background-image:url('log.jpeg');background-repeat:no-repeat;background-size:100% 100%;">
  <?php
  $msg="";
  if(isset($_POST['login'])){
	 $USERNAME=$_POST['USERNAME'];
	 $LPASSWORD=$_POST['LPASSWORD'];

     $sql="SELECT * FROM lecture WHERE USERNAME='".$USERNAME."' AND LPASSWORD='".$LPASSWORD."'";
	
	
	
	
	 $result=mysqli_query($conn,$sql);
	 if($result){
		 while($rows=mysqli_fetch_array($result)){
			 
			 
					echo '<script type="text/javascript">alert("you are logined as '.$rows['USERNAME'].'")</script>';
						
						?>
						<script type="text/javascript">
						window.location.href="lhome.php"</script>
						<?php
		     
			 
		 }
		 $msg="username or password is incorrect!"; 
       			
						
					
	 }
  }
  
  ?>
  <div class="p-5 rounded-sm"  style="allign:center;margin-left:25%;margin-top:5%;background-color:white;padding-top:2%;width:50%">
  <form action="llogin.php" method="post">
  <h1 style="margin-left:40%">SIGN IN</h1><br/>
  <div class="row">
  <div class="col-sm-2">
  <label>USERNAME</label>
  </div>
  <div class="col-sm-4">
  <input type="email" style="border-radius:18px" class="form-control" name="USERNAME" value=" ">
  </div>
  </div><br/>
  <div class="row">
  <div class="col-sm-2">
  <label>PASSWORD</label>
  </div>
  <div class="col-sm-4">
  <input type="password" class="form-control" style="border-radius:18px" name="LPASSWORD" >
  </div>
  </div><br/>
  <input type="submit" name="login" value="login" class="btn btn-info" style="border-radius:18px;margin-left:10%;">
  <input type="reset" value="Reset" class="btn btn-primary" style="border-radius:18px"><br/>
  <p>
  <a href="default.asp" target="_blank"> Forget password?</a></br>
  <a href="index.php">Sign up</a>
  </p>
  <h5 class="text-danger text-center"><?= $msg; ?></h5>
  </form>
  </div>
  </body>
  </html>