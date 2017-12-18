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
	<fieldset style="width:30%"><legend>REGISTER HERE</legend>
	<p><span class="error"></span></p>

	<form action="index.php?action=loginasuser" method="post">

	First Name:<input type="text" name="firstname">
	<span class="error"><?php echo $firstnameErr;?></span><br>
	Last Name:<input type="text" name="lastname">
	<span class="error"><?php echo $lastnameErr;?></span><br>
	Password:<input type="password" name="pass">
	<span class="error"><?php echo $passwordErr;?></span><br>
	Email:<input type="text" name="email">
	<span class="error"><?php echo $emailErr;?></span><br>
	Qualification:<input type="text" name="qualification">
	<span class="error"><?php echo $qualificationErr;?></span><br>
	City:<input type="text" name="city">
	<span class="error"><?php echo $cityErr;?></span><br>
	State:<input type="text" name="state">
	<span class="error"><?php echo $stateErr;?></span><br>
	
    <input type="button" name="login" onclick="location.href='index.php?action=loginuser';" value="Login">
	<input type="submit" name="submit" value="Register">
    </form>
</fieldset>
</div>
</body>
</html>