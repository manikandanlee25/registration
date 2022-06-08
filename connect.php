<?php
$host= "localhost";
$username= "root";
$password= "";
$dbname= "myfirstdb";

$con= mysqli_connect($host, $username, $password)or die ("connection string");
mysqli_select_db($con, $dbname) or die("no database found");

?>