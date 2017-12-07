<?php
	session_start();
	echo "Login successfully"."<br>";
	
	echo $_SESSION['adusername']."<br>";
	?>


<html>
<body>
     
	
	<a href="Listusers.php">List Of users</a>
	<a href="logout.php">Logout</a>
</body>
</html>