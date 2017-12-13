<?php



	session_start();
	$username=$_SESSION['adusername'];
	$password=$_SESSION['password'];
	echo "Login successfully"."<br><br>";
	echo "Welcome ";
	echo $username."<br><br>";
require_once("../view/adminviewpage.php");
	
	
?>