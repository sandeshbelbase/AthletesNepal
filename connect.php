<?php 
//database connection details
$host="localhost";
$user="root";
$db_password="";
$database_name="userinfo";
//database connection
$db = mysqli_connect($host,$user,$db_password,$database_name) or die("could not connect to database");
?>