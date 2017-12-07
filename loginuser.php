<?php
 
 class Loginuser{

 	private $firstname;
 	private $email;
 	private $password;

 	public function __construct($firstname,$email,$password){
       
       $this->username=$firstname;
       $this->email=$email;
       $this->password=$password;
   }
   public function getUserName()
   {
   	return $this->username;
   }
   public function getEmail()
   {
   	return $this->email;
   }
   public function getPassword()
   {
   	return $this->password;
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
	<fieldset style="width:30%"><legend>LOGIN HERE</legend>

	<form method="post">
    
    Username:<input type="text" name="username"><br>
    Password:<input type="password" name="password"><br>
    <input type="submit" name="submit" value="Login">
</form>
</fieldset>
</div>
</body>
</html>



	