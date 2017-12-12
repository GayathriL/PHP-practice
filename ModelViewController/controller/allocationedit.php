<?php

require_once("Logindb.php");
require_once("Edituser.php");



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


?>

