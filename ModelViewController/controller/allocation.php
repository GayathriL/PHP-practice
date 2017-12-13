<?php
require_once("../model/classuser.php");
require_once("../model/Logindb.php");

require_once("../view/user.php");



$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$city=$_POST['city'];
$state=$_POST['state'];


$user=new User($firstname,$lastname,$password,$email,$qualification,$city,$state);



$database=new DBController();
$database->addUser($user);







?>