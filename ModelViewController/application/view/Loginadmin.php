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

    <form method="post" action="index.php?action=login">
	Username:<input type="text" name="name" size="30"><br>
	Password:<input type="password" name="pass" size="30"><br>
	<input type="submit" name="submit" value="Login">
    </form>
</fieldset>
</div>
</body>
</html>