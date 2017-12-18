<?php

namespace Compassite\model;

class validation{

public function registervalidation(){

$firstnameErr =$lastnameErr = $passwordErr=$emailErr=$qualificationErr=$cityErr=$stateErr= "";
$firstname=$lastname = $password=$email=$qualification=$city=$state= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "Firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
  }

  
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Lastname is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
  }

  
  if (empty($_POST["pass"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["pass"]);
    
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if(empty($_POST["qualification"])){
    $qulificationErr= "Qualification is required";
  }
  else{
    $qualification= test_input($_POST["qualification"]);
  }

  if(empty($_POST['city'])){
    $cityErr= "City is required";

  }else
  {
    $city=test_input($_POST["city"])
  }

  if(empty($_POST['state'])){
    $stateErr= "State is required";
  }else
  {
    $state= test_input($_POST["state"]);
  }

}
    
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

}
?>