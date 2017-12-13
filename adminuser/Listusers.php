<?php
 include("enabledisable.php");

require_once("Logindb.php");
$list=new DBController();
$query="SELECT firstname,lastname,email,qualification,city,state,userid FROM user";
$results=$list->runQuery($query);
?>
<!-- //foreach($results as $key=>$value){ -->

<?php


echo "<table border='1' cellpadding='10'>";

echo "<tr><th>Firstname</th> <th>Lastname</th> <th>Email</th> <th>Qualification</th> <th>City</th> <th>State</th> 
  <th>Userid</th>   <th>Edit</th> <th>Delete</th> </tr>";


while($row=mysqli_fetch_array($results))
{
  
  echo "<tr>";

  echo '<td>' .$row['firstname'].'</td>';

  echo '<td>' .$row['lastname'].'</td>';

  echo '<td>' .$row['email'].'</td>';

  echo '<td>' .$row['qualification'].'</td>';

  echo '<td>' .$row['city'].'</td>';

  echo '<td>' .$row['state'].'</td>';

  echo '<td>' .$row['userid'].'</td>';






  echo '<td><a href="Edituser.php?firstname=' .$row['firstname']. '">Edit</a></td>';

  echo '<td><a href="deleteuser.php?firstname=' .$row['firstname']. '">Delete</a></td>';
   echo '<td>'.$row['status'].'</td>';





  

  echo "</tr>";
}

echo "</table>";


?>



