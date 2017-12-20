<?php

namespace Compassite\model;

use Compassite\model\DBConnection;

class User
{
    
    private $firstname;
    private $lastname;
    private $password;
    private $email;
    private $qualification;
    private $city;
    private $state;
    private $pdo;
    CONST STATUS=0;

    public function __construct($firstname, $lastname, $password, $email, $qualification, $city, $state, $STATUS)
    {
        $this->firstname     = $firstname;
        $this->lastname      = $lastname;
        $this->password      = $password;
        $this->email         = $email;
        $this->qualification = $qualification;
        $this->city          = $city;
        $this->state         = $state;
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
    public function getStatus()
    {
        return self::STATUS;
    }

    public function addUser($user)
    {
        $firstname     = $user->getFirstName();
        $lastname      = $user->getLastName();
        $password      = md5($user->getPassword());
        $email         = $user->getEmail();
        $qualification = $user->getQualification();
        $city          = $user->getCity();
        $state         = $user->getState();
        $STATUS        = $user->getStatus();
        
        
        $sth = $this->dbObj->pdo->prepare('INSERT INTO user(firstname,lastname,password,email,qualification,city,state,STATUS) VALUES(:firstname,
       :lastname,:password,:email,:qualification,:city,:state,:STATUS)');
        
        $sth->bindParam(':firstname', $firstname);
        $sth->bindParam(':lastname', $lastname);
        $sth->bindParam(':password', $password);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':qualification', $qualification);
        $sth->bindParam(':city', $city);
        $sth->bindParam(':state', $state);
        $sth->bindParam(':STATUS', $STATUS);
        
        
        $sth->execute();
        
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
        $STATUS        = $edituser->getStatus();
        
        $sth = $this->dbObj->pdo->prepare('UPDATE user SET firstname=:firstname,lastname=:lastname,password=:password,email=:email,
                         qualification=:qualification,city=:city,state=:state,STATUS=:STATUS WHERE firstname=:firstname');
        
        
        $sth->bindParam(':firstname', $firstname);
        $sth->bindParam(':lastname', $lastname);
        $sth->bindParam(':password', $password);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':qualification', $qualification);
        $sth->bindParam(':city', $city);
        $sth->bindParam(':state', $state);
        $sth->bindParam(':STATUS', $STATUS);
        
        $sth->execute();
    }

    
    
        
    
}
