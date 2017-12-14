<?php

namespace Compassite\controller;

use Compassite\model\DBController;
use Compassite\model\DeleteUser;
/*require_once("../model/classdelete.php");
require_once("../model/Logindb.php");
require_once("../view/deleteuser.php");
*/
require "/var/www/html/PHP-practice/ModelViewController/application/view/deleteuser.php";
class DeleteUserController{

public function deleteuser()
{

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$userid=$_POST['userid'];

$deleteuser=new DeleteUser($firstname,$lastname,$userid);

$database=new DBController();
$database->DeleteUser($deleteuser);

}
}