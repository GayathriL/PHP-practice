<?php
require_once("Logindb.php");
require_once("deleteuser.php");


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=md5($_POST['pass']);
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$city=$_POST['city'];
$state=$_POST['state'];
$userid=$_POST['userid'];

$deleteuser=new DeleteUser($firstname,$lastname,$password,$email,$qualification,$city,$state,$userid);

$database=new DBController();
$database->DeleteUser($deleteuser);



?>