<?php
session_start();

$Firstname=$_SESSION['name'];
$Password=$_SESSION['password'];
echo $Firstname;

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
	<a href="Logoutuser.php">LOGOUT</a>
<div id="Sign-In"> 
	<fieldset style="width:30%"><legend>CHANGE HERE</legend>
	
	<input type="button" name="edit" onclick="location.href='Edituser.php';" value="Edit"><br><br>
	<input type="button" name="view" value="View Profile"><br><br>
	
</fieldset>
</div>
</body>
</html>