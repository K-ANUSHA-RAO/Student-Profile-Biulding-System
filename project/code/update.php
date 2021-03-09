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
<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
 	 var lname=document.reg.ln.value;
	var gen=document.reg.gen.value;
 	var address=document.reg.address.value;
 	var mm=document.reg.mm.value;
        var dd=document.reg.dd.value;
        var yy=document.reg.yy.value;
	var rn=document.reg.rn.value;
  	var session=document.reg.session.value;
    	
    	var branch=document.reg.branch.value;
     	var year=document.reg.year.value;
      	var semester=document.reg.semester.value;
	var fee=document.reg.fee.value;

if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }

if(gen=='')
  {
    window.alert("Please Enter Gender!");
    document.reg.ln.focus();
    return false;

 }
if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;

 }
 if(dd=='')
  {
    window.alert("Please Select Day!");
    document.reg.dd.focus();
    return false;

 }
 if(mm=='')
  {
    window.alert("Please Select Month!");
    document.reg.mm.focus();
    return false;

 }
 if(yy=='')
  {
    window.alert("Please Select Year!");
    document.reg.yy.focus();
    return false;

 }
if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

 }

 if(session=='')
  {
    window.alert("Please Select Session!");
    document.reg.session.focus();
    return false;

 }
 
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 if(year=='')
  {
    window.alert("Please Select Year!");
    document.reg.year.focus();
    return false;

 }
 if(semester=='')
  {
    window.alert("Please Select Semester!");
    document.reg.semester.focus();
    return false;

 }
if(fee=='')
  {
    window.alert("Please Enter Fee Amount!");
    document.reg.semester.focus();
    return false;

 }

 

}



</script>

</head>

<body>


<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<table border="5" bgcolor="pink"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="home.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp<a href="markadd.php">MARK-ENTRY</a>&nbsp&nbsp&nbsp&nbsp<a href="markdisplay.php">MARK-DISPLAY</a><br><br></center>

        <tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
	<tr>
		<td>GENDER:</td>
 		<td>
			<?php
			echo"<select name='gen'>
			<option >select gender</option>
			<option value='MALE'>MALE</option>
			<option value='FEMALE'>FEMALE</option>

			</select>";
			?>
 		</td>
	</tr>
	<tr>
		<td>ADDRESS:</td>
		<td><input type="text" name="address" /></td>
	</tr>
	<tr>
		<td>Date Of Birth(DD-MM-YYYY)</td>
		<td><select name="dd">
		<option> select date </option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
                <option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
                <option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
                <option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
                <option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		</select>
		<select name="mm">
		<option> select month </option>
		<option value="jan">JAN</option>
		<option value="feb">FEB</option>
		<option value="mar">MAR</option>
		<option value="apr">APR</option>
		<option value="may">MAY</option>
		<option value="jun">JUN</option>
		<option value="jul">JUL</option>
                <option value="aug">AUG</option>
		<option value="sep">SEP</option>
		<option value="oct">OCT</option>
		<option value="nov">NOV</option>
		<option value="dec">DEC</option>

		</select>
		<select name="yy">
		<option>select year</option>
                <option value="1995">1995</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
		<option value="1999">1999</option>
		<option value="2000">2000</option>
		<option value="2001">2001</option>
		<option value="2002">2002</option>
		<option value="2003">2003</option>
		<option value="2004">2004</option>
		<option value="2005">2005</option>
		<option value="2006">2006</option>
                <option value="2007">2007</option>
		<option value="2008">2008</option>
		<option value="2009">2009</option>
		<option value="2010">2010</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		<option value="2016">2016</option>
		<option value="2017">2017</option>
                <option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2021">2021</option>


		</select>
		</td>
	</tr>
	<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn">Primary Key</td>
	</tr>

	<tr>
		<td>SESSION:</td>
		 <td>
		<?php
		echo"<select name='session'>
		<option >select session</option>
		<option value='2008'>2008</option>
                <option value='2009'>2009</option>
                <option value='2010'>2010</option>
                <option value='2011'>2011</option>
                <option value='2012'>2012</option>
                <option value='2013'>2013</option>
                <option value='2014'>2014</option>
                <option value='2015'>2015</option>
                <option value='2016'>2016</option>
                <option value='2017'>2017</option>
                <option value='2018'>2018</option>
                <option value='2019'>2019</option>
                </select>";
		?>
		 </td>
	</tr>
	
	<tr>
		<td>BRANCH</td>
		<td>
		<select name="branch">
		<option >select branch</option>
		<option value="CSE">CSE</option>
		<option value="EC">EC</option>
		<option value="CIVIL">CIVIL</option>
		<option value="MECHNICAL">MECHNICAL</option>
		<option value="IS">IS</option>
		</select>
		</td>
	</tr>

	<tr>
		<td>YEAR:</td>
		<td>
		<select name="year">
		<option >select year</option>
		<option value="FIRST">FIRST</option>
		<option value="SECOND">SECOND</option>
		<option value="THIRD">THIRD </option>
		<option value="FOURTH">FOURTH</option>
		</select>
		</td>
	</tr>

	<tr>
		<td>SEMESTER:</td>
		<td>
<select name="semester">
<option >select semester</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD</option>
<option value="FOURTH">FOURTH</option>
<option value="FIFTH">FIFTH</option>
<option value="SIX">SIX</option>
<option value="SEVENTH">SEVENTH</option>
<option value="EIGHT">EIGHT</option>
</select>
</td>
	</tr>

	<tr>
		<td>FEE AMOUNT:</td>
		<td><input type="text" name="fee" /></td>
	</tr>
<tr>
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
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$gen=$_POST['gen'];
$address=$_POST['address'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$rn=$_POST['rn'];
$session=$_POST['session'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$semester=$_POST['semester'];
$fee=$_POST['fee'];

$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=strtoupper($address);


 $q1=mysqli_query($conn,"UPDATE student SET fname='$cap1',lname='$cap2',gen='$gen',session='$session',rn='$rn',branch='$branch',year='$year',semester='$semester',dob='$dd $mm $yy',address='$cap3' where rn ='$rn'");
$q2=mysqli_query($conn,"UPDATE fees SET fname='$cap1',lname='$cap2',fee='$fee' where rn ='$rn'");
if($q1&&$q2)
{
 echo"Record Successfully Updated";
}
else
{

echo"Not Update Your Record" ;
}
 }
?>