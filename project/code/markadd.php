        
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript">
     function validate()
{
  var rn=document.reg.rn.value;

var name=document.reg.name.value;
  var me=document.reg.me.value;
   var cn=document.reg.cn.value;
    var db=document.reg.db.value;
    var atc=document.reg.atc.value;
     var jj=document.reg.jj.value;
      var net=document.reg.net.value;
       var cnl=document.reg.cnl.value;
        var dbl=document.reg.dbl.value;

if(rn=='')
  {
    window.alert("Please Enter RollNumber!");
    document.reg.rn.focus();
    return false;

 }
if(name=='')
  {
    window.alert("Please Enter Name!");
    document.reg.rn.focus();
    return false;

 }

 if(me=='')
  {
    window.alert("Please Enter M&E mark!");
    document.reg.me.focus();
    return false;

 }
 if(cn=='')
  {
    window.alert("Please Enter CN Mark!");
    document.reg.cn.focus();
    return false;

 }
 if(db=='')
  {
    window.alert("Enter DBMS Mark!");
    document.reg.db.focus();
    return false;

 }
 if(atc=='')
  {
    window.alert("Please Enter ATC Mark!");
    document.reg.atc.focus();
    return false;

 }
 if(jj=='')
  {
    window.alert("Please Enter Java Mark!");
    document.reg.jj.focus();
    return false;

 }
 if(net=='')
  {
    window.alert("Please Enter C# Mark!");
    document.reg.net.focus();
    return false;

 }
 if(cnl=='')
  {
    window.alert("Please Enter CN Lab!");
    document.reg.cnl.focus();
    return false;

 }
 
 if(dbl=='')
  {
    window.alert("Please Enter DBA Lab!");
    document.reg.dbl.focus();
    return false;

 }


}


</script>
<title>marks</title>
</head>

<body>
<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center><table border="5" bgcolor="pink"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br>
<a href="home.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp<a href="markadd.php">MARK-ENTRY</a>&nbsp&nbsp&nbsp&nbsp<a href="markdisplay.php">MARK-DISPLAY</a><br><br></center>

	<tr>
		<td>ROLL NUMBER:</td>
		<td><input type="text" name="rn" /></td>
	</tr>
	
		<td>Name:</td>
		<td><input type="text" name="name" /></td>
	</tr>
	<tr>
		<td>Management:</td>
		<td><input type="text" name="me" /></td>
	</tr>
	<tr>
		<td>Computer Network:</td>
 		<td><input type="text" name="cn" /></td>

	</tr>
	<tr>
		<td>DBMS:</td>
		<td><input type="text" name="db" ></td>
	</tr>
	<tr>
		<td>Automata Theory:</td>
		<td><input type="text" name="atc" /></td>

	</tr>
	<tr>
		<td>Java &J2EE:</td>
		<td><input type="text" name="jj" /></td>
	</tr>

	<tr>
		<td>C# & .NET:</td>
		<td><input type="text" name="net" /></td>
	</tr>
	<tr>
		<td>CN Lab:</td>
		<td><input type="text" name="cnl" /></td>
	</tr>
	<tr>
		<td>DBA Lab:</td>
		<td><input type="text" name="dbl" /></td>
	</tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="ADD" /></td>
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
$name=$_POST['name'];
$me=$_POST['me'];
$cn=$_POST['cn'];
$db=$_POST['db'];
$atc=$_POST['atc'];
$jj=$_POST['jj'];
$net=$_POST['net'];
$cnl=$_POST['cnl'];
$dbl=$_POST['dbl'];

 $q1=mysqli_query($conn,"insert into iamarks values('$rn','$name','$me','$cn','$db','$atc','$jj','$net','$cnl','$dbl')");

if($q1)
{
 echo"Record Successfully Added";
}
else
{

echo"Not Add Your Record" ;
}
 }
?>