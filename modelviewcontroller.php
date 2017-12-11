//view

<html>

<head>

	<style>
       .error{color:red;}

	</style>


 


	</head>

<body>

	<h2 align="center">Registration Form</h2>

	<p><span class="error"></span></p>

	<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	Name :<input type="text" name="name" value="<?php echo $name;?>">

	   <span class="error"><?php echo $nameErr;?></span>
	   <br><br>

	Email :<input type="text" name="email">
	<br><br>

	Hobbies:

  <select name="hobbies" multiple>

    <option selected="selected">Choose hobbies</option>

    <?php
      
      $hobbies=array("Football","Cricket","Chess");

      foreach($hobbies as $i)
      {
      ?>

      <option value="<?php echo strtolower($i);?>"><?php echo $i;?></option>

      <?php
    }
    ?>

  </select><br><br>

     Comment :<textarea rows="5" cols="50" name="comment"></textarea><br><br>

     Gender :<input type="radio" name="gender" value="female">Female

            <input type="radio" name="gender" value="male">Male<br><br>

     Select Your Technical Exposure :<br><br>

     <?php

         $check=array("C/C++","Java","PHP","Html/Css","Unix/Linux");
         ?>

         
 
         
         <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[0];?></label><br>
          <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[1];?></label><br>
           <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[2];?></label><br>
            <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[3];?></label><br>
             <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[4];?></label><br><br>


             


         


     <input type="submit" value="submit">

      <?php
echo "<h2>Your Input:</h2>";
echo $_POST['name'];
echo "<br>";

echo $_POST['email'];

echo "<br>";
echo $_POST['comment'];
echo "<br>";
echo $_POST['gender'];
?>

 </form>    
 </body>
 </html>

 



 //model


 <?php

class User{


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

?>




//controller



