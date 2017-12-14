<?php
//include("enabledisable.php");
namespace Compassite\controller;
use Compassite\controller\EnableDisablecontroller;
use Compassite\model\DBController;

use Compassite\model\Edituser;

class Listusers{

  public function listusers(){

$list=new DBController();
$query="SELECT firstname,lastname,email,qualification,city,state,userid FROM user";
$results=$list->runQuery($query);

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

      echo '<td><a href="index.php?action=edit">Edit</a></td>';

      echo '<td><a href="index.php?action=delete">Delete</a></td>';
     
      echo '<td>'.$row['status'].'</td>';


  echo "</tr>";
  }

  echo "</table>";
}
}






