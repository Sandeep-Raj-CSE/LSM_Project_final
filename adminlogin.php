<?php
$name=$_POST['username'];
$pass=$_POST['pass'];

if($name=="ajithaD" && $pass=="1234")
{
	echo "<script>window.location.assign('afteradminlogin.php');</script>";
}
else
{
	echo '<script>alert("Incorrect Credentials! Please try again.")</script>';
	readfile('adminlogin1.php');
}


?>