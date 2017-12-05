<?php

require_once("registerdbconnect.php");
$login=new DBController();


if(isset($_POST['submit']))
{
	
	$Username=$_POST['username'];
	$Password=md5($_POST['pass']);
  
	if(!empty($Username) && !empty($Password))
	{
		$query="SELECT * FROM register WHERE username='$Username'";
		
		$results=$login->runQuery($query);
		//echo $login->numRows($query);
		
		while ($row = mysqli_fetch_assoc($results)) {
			//echo $row['username'];
			if($row['username'] == $Username && $row['password'] == $Password)
			{
				session_start();
				$_SESSION['username']=$_POST['username'];
				//echo $_SESSION['username'];
				//echo "Login Successfully";
				header("location:dashboard.php");
			}
			else
			{
			echo "You entered wrong username and password";
			}	
		}
	}
	else
	{
		echo "You not be empty";
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
	<fieldset style="width:30%"><legend>LOG-IN HERE</legend>

		<form method="post">
	UserName:<input type="text" name="username" size="30"><br><br>
	Password:<input type="password" name="pass" size="30"><br><br>
	<input type="submit" name="submit" value="LogIn">
	
	</form>
	<input type="submit" onclick="location.href='register.php';" value="Register">
</fieldset>
</div>

</body>
</html>