<?php


class EditUser{


  private $firstname;
  private $lastname;
  private $password;
  private $email;
  private $qualification;
  private $city;
  private $state;
    


  public function __construct($firstname,$lastname,$password,$email,$qualification,$city,$state)
  {
      $this->firstname=$firstname;
      $this->lastname=$lastname;
      $this->password=$password;
      $this->email=$email;
      $this->qualification=$qualification;
      $this->city=$city;
      $this->state=$state;
      
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

  }
/*
  
    require_once("Logindb.php");

    $user=new DBController();
    $query="SELECT firstname,lastname,email,qualification,city,state,userid FROM user ";
    $results=$user->runQuery($query);
    foreach($results as $row)
    {
       echo $row['firstname'];
    }*/

    
    
  

?>










<html>

<style>
#Sign-In{ 
	margin-top:150px; 
	margin-bottom:150px; 
	margin-right:150px; 
	margin-left:450px; 
	border:3px solid #a1a1a1; 
	padding:9px 35px; 
	background:#800CC; 
	width:400px; 
	border-radius:20px; 
	box-shadow: 7px 7px 6px; 
}
</style>
<body>

	<div id="Sign-In"> 
	<fieldset style="width:30%"><legend>EDIT HERE</legend>

    <form method="post" action="allocationedit.php">

	First Name:<input type="text" name="firstname" value="<?php echo $row['firstname'];?>"><br>
	Last Name:<input type="text" name="lastname" value="<?php echo $row['lastname'];?>"><br>
	Password:<input type="password" name="pass"><br>
	Email:<input type="text" name="email" value="<?php echo $row['email'];?>"><br>
	Qualification:<input type="text" name="qualification" value="<?php echo $row['qualification'];?>"><br>
	City:<input type="text" name="city" value="<?php echo $row['city'];?>"><br>
	State:<input type="text" name="state" value="<?php echo $row['state'];?>"><br>
	

	<input type="submit" name="submit" value="submit">

</form>

</fieldset>
</div>
</body>
</html>

