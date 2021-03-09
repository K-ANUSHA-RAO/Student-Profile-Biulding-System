<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 30pt;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 20pt;  
}
 h6 {  
    color: green;  
    font-family: verdana;  
    font-size: 15pt;  
}
input[type=submit] {
    width: 100px;  height: 40px;align:center;
}  </style>  
</head>  
<body>  
     <center><h1>STUDENT INFORMATION MANAGEMENT SYSTEM</h1>  
   
<h3>Login Here to Continue</h3>  
<form action="" method="POST">  
<h6>Username: <input type="text" name="user">*<br />  
Password:  <input type="password" name="pass">*<br /> <br/>  
<input type="submit" value="Login" name="submit" /> </center> </h6>
* All fields are required!
</form>  
<?php  
require'db_conn.php';
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    //$con=mysql_connect('localhost','root','') or die(mysql_error());  
    //mysql_select_db('user_registration') or die("cannot select DB");  
  
    $query=mysqli_query($conn,"SELECT * FROM user WHERE uid='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['uid'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: home.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} //else {  
   // echo "All fields are required!";  
//}  
}  
?>  
</body>  
</html>   