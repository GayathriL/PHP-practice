<?php
require_once("../model/classdelete.php");
require_once("../model/Logindb.php");
require_once("../view/deleteuser.php");


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$userid=$_POST['userid'];

$deleteuser=new DeleteUser($firstname,$lastname,$userid);

$database=new DBController();
$database->DeleteUser($deleteuser);



?>