<?php

$dbhost="localhost";
//$dbuser="root";
//$dbpass="root";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname") or die("could not connect to mysql");

//mysqli_select_db($dbname,$conn);
?>