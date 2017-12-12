<?php
session_start();

require_once("Logindb.php");
$loginuser=new DBController();

$password=md5($password);
$sql="SELECT userid  FROM user WHERE firstname='$name' AND lastname='$lastname' AND password='$password'";


if(isset($_POST['submit'])){
$result=$loginuser->runQuery($sql);


if($result)
{
  header('Location: userprofilechange.php');
}
else {
  echo "invalid password and name";
}
}
/*
if(isset($_POST['submit'])){
  $Firstname=$_POST['name'];
  $Lastname=$_POST['lastname'];
  $Password=md5($_POST['password']);

  if(!empty($Firstname) && !empty($Password)){
    $query="SELECT * FROM user WHERE firstname='$Firstname' AND password='$Password'";
    $results=$loginuser->runQuery($query);

    //echo $results['firstname'];
    //echo $query;
    //print_r($results); die();

    while($row=mysqli_fetch_assoc($results))
    {
      echo $row['firstname']; 
      
      if($row['firstname'] == $Firstname && $row['password'] == $Password)
      {
        
        $_SESSION['firstname']=$_POST['name'];
        header('Location: userprofilechange.php');
        //echo "Login successful";
      }
      else
      {
        echo "enter correct details";
      }
    }

  }
  else
  {
    echo "Fields empty";
  }
}
*/

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
	<fieldset style="width:30%"><legend>LOGIN HERE</legend>

	<form method="post" action="">
    
    Firstname:<input type="text" name="name"><br>
    Lastname:<input type="text" name="lastname"><br>
    Password:<input type="password" name="password"><br>
    <input type="submit" name="submit" value="Login">
</form>
</fieldset>
</div>
</body>
</html>



	