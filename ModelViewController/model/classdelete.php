<?php

class DeleteUser{


  private $firstname;
  private $lastname;
  private $password;
  private $email;
  private $qualification;
  private $city;
  private $state;
  private $userid;
    


  public function __construct($firstname,$lastname,$password,$email,$qualification,$city,$state,$userid)
  {
      $this->firstname=$firstname;
      $this->lastname=$lastname;
      $this->password=$password;
      $this->email=$email;
      $this->qualification=$qualification;
      $this->city=$city;
      $this->state=$state;
       $this->userid=$userid;
      
  }

  public function getFirstName()
  {
    return $this->firstname;
  }
  public function getLastName()
  {
    return $this->lastname;
  }
  
  public function getPassword()
  {
    return $this->password;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getQualification()
  {
    return $this->qualification;
  }
  public function getCity()
  {
    return $this->city;
  }
  public function getState()
  {
    return $this->state;
  }
  public function getUserId()
  {
    return $this->userid;
  }
  


}

?>