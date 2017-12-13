<?php
session_start();

$Firstname=$_SESSION['name'];
$Password=$_SESSION['password'];
echo $Firstname;

require_once("../view/userprofilechange.php");

?>