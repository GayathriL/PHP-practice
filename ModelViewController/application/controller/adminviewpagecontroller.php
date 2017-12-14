<?php

namespace Compassite\controller;

class adminviewpagecontroller{

    public function adminviewpage()
    {

	session_start();
	$username=$_SESSION['adusername'];
	$password=$_SESSION['password'];
	echo "Login successfully"."<br><br>";
	echo "Welcome ";
	echo $username."<br><br>";
    require "/var/www/html/PHP-practice/ModelViewController/application/view/adminviewpage.php";
	
	}

}
	
