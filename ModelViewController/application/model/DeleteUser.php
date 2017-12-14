<?php
namespace Compassite\model;
class DeleteUser{


  private $firstname;
  private $lastname;
  private $userid;
    


  public function __construct($firstname,$lastname,$userid)
  {
      $this->firstname=$firstname;
      $this->lastname=$lastname;
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
  
  
  public function getUserId()
  {
    return $this->userid;
  }
  


}

?>