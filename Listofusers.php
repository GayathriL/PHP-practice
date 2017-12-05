<?php 
require_once("registerdbconnect.php");
$register=new DBController();
$query="SELECT username,password,conpassword,email,usernameid FROM register";
$results=$register->runQuery($query);
?>




<html>
<body>


<?php
 session_start();
 echo "WELCOME ";
 echo $_SESSION['username'];
 while($listusers = mysqli_fetch_assoc($results)){

?>



<li value="<?php echo $listusers['username'];?>"><?php echo $listusers['username'];?></li>

<?php
}
?>

</body>
</html>

