<?php
require_once("dbconnect.php");
$dropdown=new DBController();

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $website=$_POST['website'];
  $comment=$_POST['comment'];
  $gender=$_POST['gender'];
  $countryid=$_POST['countryoptions'];
  $hobbyid=$_POST['hobbies'];
  $checkboxid=$_POST['check_list'];

  echo $name;
  echo $email;
  echo $website;
  echo $comment;
  echo $gender;
  echo $countryid;
  echo $hobbyid;
  echo $checkboxid;


  if($name!=''||$email=''){
   $query="INSERT INTO userdetails(name,email,website,comment,gender,countryname,hobbyname,checkboxname) values('$name','$email','$website','$comment','$gender','$countryid','$hobbyid','$checkboxid')";
   echo "<br/><br/><span>Data Inserted successfully...!!</span>";
  }
  else
  {
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
  }
  }
  
$result1=$dropdown->runQuery($query);
?>

