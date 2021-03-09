
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
<table border="5" bgcolor="pink"> <h1 ><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="home.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp<a href="markadd.php">MARK-ENTRY</a>&nbsp&nbsp&nbsp&nbsp<a href="markdisplay.php">MARK-DISPLAY</a><br><br></center>

	<tr>
		<td>ENTER ROLL NO:</td>
		<td><input type="text" name="rn" /></td>
	</tr>

		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="SEARCH" /></td>
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

 $res=mysqli_query($conn,"SELECT *FROM iamarks where rn='$rn'");

while($rows=mysqli_fetch_array($res,MYSQL_ASSOC))
{
  $rn=$rows['rn'];
 $name=$rows['name'];
 $me=$rows['me'];
 $cn=$rows['cn'];
  $db=$rows['db'];
 $atc=$rows['atc'];
 $jj=$rows['jj'];
 $net=$rows['net'];
  $cnl=$rows['cnl'];
   $dbl=$rows['dbl'];
echo"<center><table border='1'>";
  echo"<tr bgcolor='cyan'><td><center>ROLL NUMBER</center><td /><td<center>$rn</center><td /><tr /><tr bgcolor='cyan'><td><center>NAME</center><td /><td<center>$name</center><td /><tr /><tr bgcolor='cyan'><td><center>MANAGEMENT</center><td /><td<center>$me</center><td /><tr /><tr bgcolor='cyan'><td><center>COMPUTER-NETWORK</center><td /><td<center>$cn</center><td /><tr /><tr bgcolor='cyan'><td><center>DBMS</center><td /><td<center>$db</center><td /><tr /><tr bgcolor='cyan'><td><center>AUTOMATA THEORY</center><td /><td<center>$atc</center><td /><tr /><tr bgcolor='cyan'><td><center>JAVA</center><td /><td<center>$jj</center><td /><tr /><tr bgcolor='cyan'><td><center>C# and .NET</center><td /><td<center>$net</center><td /><tr /><tr bgcolor='cyan'><td><center>CN-LAB</center><td /><td<center>$cnl</center><td /><tr /><tr bgcolor='cyan'><td><center>DBA-LAB</center><td /><td<center>$dbl</center><td /><tr />";	
 echo"</center>";
}

}
?>

