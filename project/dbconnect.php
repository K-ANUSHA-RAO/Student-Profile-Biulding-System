<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="studentprofile";
$conn=new mysqli("$dbhost","$dbuser","$dbpass","$dbname") or die("could not connect to mysql");

//mysqli_select_db($dbname,$conn);
?>