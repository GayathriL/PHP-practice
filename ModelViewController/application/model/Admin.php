<?php

namespace Compassite\model;

use Compassite\model\DBConnection;


class Admin{

    private $firstname;
    private $lastname;
    private $password;
    private $email;
    private $qualification;
    private $city;
    private $state;
    private $userid;
    private $pdo;
    CONST STATUS=0;

    public function __construct($firstname=null, $lastname=null, $password=null, $email=null, $qualification=null, $city=null, $state=null, $userid=null, $STATUS=null)
    {
        $this->firstname     = $firstname;
        $this->lastname      = $lastname;
        $this->password      = $password;
        $this->email         = $email;
        $this->qualification = $qualification;
        $this->city          = $city;
        $this->state         = $state;
        $this->userid        = $userid;
        $this->STATUS        = $STATUS;

        $this->dbObj = new DBConnection();
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
    public function getStatus()
    {
        return self::STATUS;
    }

    public function editUser($edituser)
    {
        $firstname     = $edituser->getFirstName();
        $lastname      = $edituser->getLastName();
        $password      = $edituser->getPassword();
        $email         = $edituser->getEmail();
        $qualification = $edituser->getQualification();
        $city          = $edituser->getCity();
        $state         = $edituser->getState();
        
        $sth = $this->dbObj->pdo->prepare('UPDATE user SET firstname=:firstname,lastname=:lastname,password=:password,email=:email,
                         qualification=:qualification,city=:city,state=:state WHERE firstname=:firstname');
        
        
        $sth->bindParam(':firstname', $firstname);
        $sth->bindParam(':lastname', $lastname);
        $sth->bindParam(':password', $password);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':qualification', $qualification);
        $sth->bindParam(':city', $city);
        $sth->bindParam(':state', $state);
        
        $sth->execute();
    }

    public function DeleteUser($deleteuser)
    {
        $firstname = $deleteuser->getFirstName();
        $lastname  = $deleteuser->getLastName();
        $userid    = $deleteuser->getUserId();
        
         
        $sth = $this->dbObj->pdo->prepare('DELETE FROM user WHERE userid=:userid');
        $sth->bindParam(':userid', $userid); 
        $sth->execute();
        
    }

    public function Status_Enable($enable)
    {
        $userid    = $enable->getUserId();

        $sth = $this->dbObj->pdo->prepare('UPDATE user SET status = " .self::DISABLE." WHERE userid=$userid');
        $sth->bindParam(':userid', $userid);
        return $sth->execute();
    }

    public function Status_Disable($disable)
    {
        $userid    = $disable->getUserId();

        $sth = $this->dbObj->pdo->prepare('UPDATE user SET status = ".self::ENABLE." WHERE userid=$userid');
        $sth->bindParam(':userid',$userid);
        return $sth->execute();
    }

}