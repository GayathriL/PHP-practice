<?php
require_once("Logindb.php");
$list=new DBController();
$query="SELECT firstname,lastname,email,qualification,city,state,userid FROM user";
$results=$list->runQuery($query);
?>

<?php

foreach($results as $key=>$value){


?>


First Name:<?php echo $value['firstname']."<br>";?>

Last Name:<?php echo $value['lastname']."<br>";?>
Email:<?php echo $value['email']."<br>";?>
Qualification:<?php echo $value['qualification']."<br>";?>

City:<?php echo $value['city']."<br>";?>
State:<?php echo $value['state']."<br>"."<br>";?>



<?php
}
?>