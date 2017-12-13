<?php
require_once("Logindb.php");
require_once("deleteuser.php");


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$userid=$_POST['userid'];

$deleteuser=new DeleteUser($firstname,$lastname,$userid);

$database=new DBController();
$database->DeleteUser($deleteuser);



?>