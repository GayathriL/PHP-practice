<?php

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
	<fieldset style="width:30%"><legend>DELETE HERE</legend>

    <form method="post" action="allocationdelete.php">

	First Name:<input type="text" name="firstname"><br>
	Last Name:<input type="text" name="lastname"><br>
	Userid:<input type="text" name="userid"><br>
	<input type="submit" name="submit" value="Delete">
</form>
</fieldset>
</div>

</body>
</html>