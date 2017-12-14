<?php

namespace Compassite\controller;

use Compassite\model\DBController;
use Compassite\model\EditUser;
/*require_once("../model/classedit.php");
require_once("../model/Logindb.php");*/

require "/var/www/html/PHP-practice/ModelViewController/application/view/Edituser.php";

class EditUserController{

public function edituser(){



$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$city=$_POST['city'];
$state=$_POST['state'];



$edituser=new EditUser($firstname,$lastname,$password,$email,$qualification,$city,$state);



$database=new DBController();

$database->editUser($edituser);


}
}


