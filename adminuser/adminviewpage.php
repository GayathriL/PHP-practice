<?php
	session_start();
	$username=$_SESSION['adusername'];
	$password=$_SESSION['password'];
	echo "Login successfully"."<br>";
	echo $username."<br>";
	
	?>


<html>
<body>
     
	
	<a href="Listusers.php">List Of users</a>
	<a href="Loginadmin.php">Logout</a>
</body>
</html>