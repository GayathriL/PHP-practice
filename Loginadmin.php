

<?php

require_once("Logindb.php");
$login=new DBController();

if(isset($_POST['submit'])){

  $username=$_POST['name'];
  $password=md5($_POST['pass']);

  if(!empty($username) && !empty($password)){

  	$query="SELECT * FROM admin WHERE adusername='$username' AND password='$password'";
  	$results=$login->runQuery($query);
  	//echo $login->numRows($query);

  	while($row=mysqli_fetch_assoc($results)){

  		//echo $row['adusername'];
      if($row['adusername'] == $username && $row['password'] == $password)
  		{

  			/*session_start();
        $_SESSION['adusername']=$_POST['adusername'];
        header("location:adminviewpage.php");*/
  			echo "login as admin";
        
  		}
  		else
  		{
  			echo "login as user";
  		}
  	}
  }

  else
  {
  	echo "Fields empty";
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
	Username:<input type="text" name="name" size="30"><br>
	Password:<input type="password" name="pass" size="30"><br>
	<input type="button" name="submit" onclick="location.href='adminviewpage.php';" value="Login">
    </form>
</fieldset>
</div>
</body>
</html>