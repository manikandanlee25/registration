<?php
require_once("./connect.php");

$serialnumber= $_POST['serialnumber'];
$Name= $_POST['Name'];
$email= $_POST['email'];
$mobilenumber= $_POST['mobilenumber'];
$city= $_POST['city'];
$state= $_POST['state'];
$country= $_POST['country'];
$pincode= $_POST['pincode'];
$qry= "INSERT INTO `register`(`serialnumber`, `Name`, `email`, `mobilenumber`,`city`,`state`,`country`,`pincode`) VALUES ('$serialnumber','$Name','$email','$mobilenumber','$city','$state','$country','$pincode')";
$exec= mysqli_query($con, $qry);
if($exec==1)
{
    echo "success";
}
else
{
    echo "failed";
}

?>