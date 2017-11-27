<DOCTYPE HTML>
<html>

<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Name:<input type="text" name="name"><br><br>

Email:<input type="text" name="email"><br><br>

Gender:<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="Male">Male<br><br>


<input type="submit" value="submit">



<?php

$name=$email="";


if($_SERVER[REQUEST_METHOD]=="POST")
{
   $name=$_POST["name"];
   $email=$_POST["email"];
}

?>

<?php
 
echo "<br>";
echo $name;
echo "<br>";
echo $email;


echo "<br>";
?>



</body>

</html>

