<?php
namespace Compassite\controller;
use Compassite\model\DBController;
use Compassite\model\User;
use Compassite\model\EditUser;
use Compassite\model\DeleteUser;
use Compassite\model\validation;

class UserController{

    public function usercontroller()
    {

        $firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$password=md5($_POST['password']);
		$email=$_POST['email'];
		$qualification=$_POST['qualification'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		
		$user=new User($firstname,$lastname,$password,$email,$qualification,$city,$state);

		$database=new DBController();
		$database->addUser($user);

		require_once("/var/www/html/PHP-practice/ModelViewController/application/view/user.php");


	}


	public function edituser()
	{

        $firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$password=md5($_POST['password']);
		$email=$_POST['email'];
		$qualification=$_POST['qualification'];
		$city=$_POST['city'];
		$state=$_POST['state'];

		$edituser=new EditUser($firstname,$lastname,$password,$email,$qualification,$city,$state);

		$database=new DBController();

		$database->editUser($edituser);

		require "/var/www/html/PHP-practice/ModelViewController/application/view/Edituser.php";

    }



	public function deleteuser()
    {

		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$userid=$_POST['userid'];

		$deleteuser=new DeleteUser($firstname,$lastname,$userid);

		$database=new DBController();
		$database->DeleteUser($deleteuser);
		require "/var/www/html/PHP-practice/ModelViewController/application/view/deleteuser.php";
	}


	public function loginuser()
	{
		session_start();
		$loginuser=new DBController();
		$password=md5($password);
		$sql="SELECT userid  FROM user WHERE firstname='$name' AND lastname='$lastname' AND password='$password'";

			if(isset($_POST['submit']))
			{
				$result=$loginuser->runQuery($sql);

				if($result)
				{
  				header('Location: userprofilechange.php');
				}
				else 
				{
  				echo "invalid password and name";
				}

			}

				require "/var/www/html/PHP-practice/ModelViewController/application/view/loginuser.php";
	}

	public function userprofilechange()
	{
		session_start();

		$Firstname=$_SESSION['name'];
		$Password=$_SESSION['password'];
		echo $Firstname;

		require "/var/www/html/PHP-practice/ModelViewController/application/view/userprofilechange.php";
	}

	public function registervalidate(){


		$firstnameErr =$lastnameErr = $passwordErr=$emailErr=$qualificationErr=$cityErr=$stateErr= "";
        $firstname=$lastname = $password=$email=$qualification=$city=$state= "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["firstname"])) {
			    $firstnameErr = "Firstname is required";
			  } else {
			    $firstname = $_POST["firstname"];
			    
			    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
			      $firstnameErr = "Only letters and white space allowed"; 
			    }
			  }

  
			  if (empty($_POST["lastname"])) {
			    $lastnameErr = "Lastname is required";
			  } else {
			    $lastname = $_POST["lastname"];
			    
			    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
			      $lastnameErr = "Only letters and white space allowed"; 
			    }
			  }

			  
			  if (empty($_POST["pass"])) {
			    $passwordErr = "Password is required";
			  } else {
			    $password = $_POST["pass"];
			    
			  }

			  if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			  } else {
			    $email = $_POST["email"];
			    
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format"; 
			    }
			  }

			  if(empty($_POST["qualification"])){
			    $qulificationErr= "Qualification is required";
			  }
			  else{
			    $qualification= $_POST["qualification"];
			  }

			  if(empty($_POST['city'])){
			    $cityErr= "City is required";

			  }else
			  {
			    $city=$_POST["city"];
			  }

			  if(empty($_POST['state'])){
				 $stateErr= "State is required";
			  }else
			  {
				 $state= $_POST["state"];
			  }

          }
    

         require "/var/www/html/PHP-practice/ModelViewController/application/view/user.php";
	}

}

