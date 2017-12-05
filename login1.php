<?php

require_once("dbconnect.php");
$dropdown=new DBController();

/*$userid=$_POST['username'];
$password=$_POST['pass'];*/

function login()
{
	
	if(!empty($_POST['username'])){
		$query="SELECT * FROM login WHERE username='$_POST[username]' AND password='$_POST[pass]'" or die(mysql_error());
		$results=$dropdown->runQuery($query)or die(mysql_error());
		if(!empty($results['username']) AND !empty($results['password']))
		{
			$_SESSION['username']=$_results['password'];
			echo "Login Successfully";
		}
		else
		{
			echo "You entered wrong username and password";
		}
 
	}
}

if(isset($_POST['submit']))
{
  login();
}



?>