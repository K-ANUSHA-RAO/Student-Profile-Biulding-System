        <html>
<head>
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


<center>
<form method="POST" action="">
<table border="5" bgcolor="pink"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="index.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp<a href="markadd.php">MARK-ENTRY</a>&nbsp&nbsp&nbsp&nbsp<a href="markdisplay.php">MARK-DISPLAY</a><br><br></center>

<tr>
		<td>ENTER ROLL NO:</td>
		<td><input type="text" name="rn" /></td>
	</tr>

		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="DELETE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';






if(isset($_POST['submit']))
 {
$rn=$_POST['rn'];

 $del=mysqli_query($conn,"DELETE FROM student where rn='$rn'");


if($del)
{
 echo"Record Successfully Deleted";
}
else
{

echo"Not Delete Your Record" ;
}
 }
?>