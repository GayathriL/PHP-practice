

<html>
<body>
    
    <?php
    session_start();
    echo "Welcome";
    echo $_SESSION['username'];
    ?>
	<a href="Listofusers.php">ListOfUsers</a>
	<a href="Logout.php">Logout</a>
</body>
</html>

