<?php

namespace Compassite\controller;

use Compassite\model\EditUser;

class UserProfileChangeController{

public function userprofilechange(){
session_start();

$Firstname=$_SESSION['name'];
$Password=$_SESSION['password'];
echo $Firstname;

require "/var/www/html/PHP-practice/ModelViewController/application/view/userprofilechange.php";
}
}

?>