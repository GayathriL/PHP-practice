<?php
session_start();

require_once("../model/Logindb.php");
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

require_once("../view/loginuser.php");
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

