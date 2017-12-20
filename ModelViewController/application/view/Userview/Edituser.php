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
	<fieldset style="width:30%"><legend>EDIT HERE</legend>

    <form method="post" action="index.php?action=edit">

	First Name:<input type="text" name="firstname" value="<?php echo $firstname;?>"><br>
	Last Name:<input type="text" name="lastname" value="<?php echo $lastname;?>"><br>
	Password:<input type="password" name="pass" ><br>
	Email:<input type="text" name="email" value="<?php echo $email;?>"><br>
	Qualification:<input type="text" name="qualification" value="<?php echo $qualification;?>"><br>
	City:<input type="text" name="city" value="<?php echo $city;?>"><br>
	State:<input type="text" name="state" value="<?php echo $state;?>"><br>
	

	<input type="submit" name="submit" value="submit">

</form>

</fieldset>
</div>
</body>
</html>
