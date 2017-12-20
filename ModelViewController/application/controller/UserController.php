<?php
namespace Compassite\controller;

use Compassite\model\DBConnection;
use Compassite\model\User;

class UserController 
{
	private $user;
	private $edituser;

	/*public function __construct()
	{
		$this->user = new User($firstname,$lastname,$password,$email,$qualification,$city,$state,$STATUS);
	}
*/
    public function usercontroller()
    {

        $firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$password=md5($_POST['password']);
		$email=$_POST['email'];
		$qualification=$_POST['qualification'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$STATUS=$_POST['status'];
		
		$user=new User($firstname,$lastname,$password,$email,$qualification,$city,$state,$STATUS);


		$user->addUser($user);

		require_once("/var/www/html/PHP-practice/ModelViewController/application/view/Userview/user.php");


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

		$edituser=new User($firstname,$lastname,$password,$email,$qualification,$city,$state,$STATUS);


		$edituser->editUser($edituser);

		require "/var/www/html/PHP-practice/ModelViewController/application/view/Userview/Edituser.php";

    }


	public function loginuser()
	{
		session_start();
		$loginuser=new DBConnection();
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

				require "/var/www/html/PHP-practice/ModelViewController/application/view/Userview/loginuser.php";
	}

	public function userprofilechange()
	{

		$Firstname=$_SESSION['name'];
		$Password=$_SESSION['password'];
		echo $Firstname;

		require "/var/www/html/PHP-practice/ModelViewController/application/view/Userview/userprofilechange.php";
	}




	
}
