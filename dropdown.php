<?php
$results ="";
require_once("dbconnect.php");
$dropdown=new DBController();
$query="SELECT * FROM countries";
$results=$dropdown->runQuery($query);
?>


<?php
require_once("dbconnect.php");
$dropdown=new DBController();
$query="SELECT * FROM checkbox";
$resultcheck=$dropdown->runQuery($query);
?>

<?php
require_once("dbconnect.php");
$dropdown=new DBController();
$query="SELECT * FROM hobbies";
$resulthobby=$dropdown->runQuery($query);
?>







	
<html>
<body>
  <form action="name.php" method="post">
  Name:<input type="text" name="name"><br><br>

  Email:<input type="text" name="email"><br><br>

  Website:<input type="text" name="website"><br><br>

  Comment:<textarea name="comment" rows="5" cols="40"></textarea><br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <br><br>

  Select country:
	 <select name="countryoptions">

      <option>Select country</option>

      <?php

      while($row = mysqli_fetch_assoc($results)){

      ?>
  
      <option value="<?php echo $row['countryname'];?>"

      <?php
      $a=$_POST['countryoptions'];
      if(!empty($a)){
        if(in_array($row['countryname'],$a)){
          echo "selected=selected";
        }
      }
      ?>
      ><?php echo $row['countryname'];?></option>
 
      <?php
      }
      ?>
  </select><br><br> 


    <!-- <label>State:</label>
    <select>

    	<option>Select state</option>

    	<?php

    	while($state = mysqli_fetch_assoc($resultstate)){

    	?>

    	<option><?php echo $state['statename'];?></option>	
    	
    	<?php
        }
        ?>
    </select> -->

   Select Your Technical Exposure :<br><br>

      <?php

     foreach($resultcheck as $check){

     ?>

     <input type="checkbox" name="check_list" value="<?php echo $check['checkboxname'];?>"
     <?php
      $a=$_POST['check_list'];
      if(!empty($a)){
      if(in_array($check['checkboxname'],$a)){
      echo "checked=checked";
    }
  }
   
    ?>
    ><?php echo $check['checkboxname'];?>
    <?php
    }
    ?><br><br>

Select Hobbies:<br><br>

 <select name="hobbies" multiple>

     <?php

     foreach($resulthobby as $hobby){

     ?>

     <option value="<?php echo $hobby['hobbyname'];?>"
     <?php
     $a=$_POST['hobbies'];
     if(!empty($a)){
      if(in_array($hobby['hobbyname'],$a)){
         echo "selected=selected";
      }
    }
    ?>
     ><?php echo $hobby['hobbyname'];?>  
    <?php
    }
    ?>
    </select><br><br>
 
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>