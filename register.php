<?php 
require_once("registerdbconnect.php");
$register=new DBController();

if(isset($_POST['submit'])){
    
	$Username=$_POST['username'];
	$Password=$_POST['pass'];
	$pwd=md5($Password);
	$Conpassword=$_POST['conpass'];
	$pwd1=md5($Conpassword);
	$Email=$_POST['email'];
	if($Username!=''||$Password!=''||$Conpassword!=''||$Email!=''){
	$query="INSERT INTO register(username,password,conpassword,email) VALUES('$Username','$pwd','$pwd1','$Email')";
	echo "Register successfully";
}
else
{
	echo "You missed some field";
}
}
$results=$register->runQuery($query);
?>

<html>
<style>
#register{ 
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

	<div id="register"> 
	<fieldset style="width:30%"><legend>REGISTER HERE</legend>
     <form method="post">

	UserName:<input type="text" name="username" size="30"><br><br>
	Password:<input type="password" name="pass" size="30"><br><br>
	Confirm password:<input type="password" name="conpass" size="30"><br><br>
	Email:<input type="text" name="email"><br><br>
	<input type="submit" name="submit" value="submit">

</form>
</fieldset>
</div>

</body>
</html>


<!--php
  $pass=$conpassword="";

  if(empty($_POST['pass']))
  {
  	$Password=$_POST['pass']
    bcrypt("$Pass",$Password);
  }
  else
  {
    $Password=$_POST['pass'];
  }


?>-->
