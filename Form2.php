<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website =$check_list=$options= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if(empty($_POST["check_list"])){

  $check_list="";
}
else{
  $check_list=test_input($_POST["check_list"]);
}

if(empty($_POST["options"])){

  $options="";
}
else{
  $options=test_input($_POST["options"]);
}

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 align="center">Registration Form</h2>
<p><span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>

  





  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

    Select Your Technical Exposure :<br><br>

     <?php
         
        
         $check=array("C/C++","Java","PHP","Html/Css","Unix/Linux");

         foreach($check as $key => $value){
         ?>

         <!-- <input type="checkbox" name="check_list[]" value="<?php echo $check[0]; ?>"><label><?php echo $check[0];?></label><br>
         <input type="checkbox" name="check_list[]" value="<?php echo $check[1]; ?>"><label><?php echo $check[1];?></label><br>
         <input type="checkbox" name="check_list[]" value="<?php echo $check[2]; ?>"><label><?php echo $check[2];?></label><br>
         <input type="checkbox" name="check_list[]" value="<?php echo $check[3]; ?>"><label><?php echo $check[3];?></label><br>
         <input type="checkbox" name="check_list[]" value="<?php echo $check[4]; ?>"><label><?php echo $check[4];?></label><br><br>
-->
      


       <input type="checkbox" name="check_list[]" value="<?php echo $value; ?>" 
       <?php  
           $a=$_POST['check_list'];
          if(in_array($value, $a)) 
            { 
              echo "checked=checked"; 
            } 
            ?> 
            > <?php echo $value;?> <br>

       <?php
       }

       ?>

      <br><br>
 

    Select state:

          <select name="options[]">

            <option selected="selected">Choose state</option>

         <?php

         $state=array("Karnadaka","Tamilnadu","Kerala","Andhara pradesh","Delhi");

         foreach($state as $i){

         ?>

         <!-- <option value="<?php echo $state[0];?>"><?php echo $state[0];?></option>
         <option  value="<?php echo $state[1];?>"><?php echo $state[1];?></option>
         <option  value="<?php echo $state[2];?>"><?php echo $state[2];?></option>
         <option  value="<?php echo $state[3];?>"><?php echo $state[3];?></option>
         <option  value="<?php echo $state[4];?>"><?php echo $state[4];?></option>
          -->

          <option value="<?php echo $i;?>"
           
              <?php 

               $a=$_POST['options'];
               if(in_array($i,$a))
               {
                echo "selected=selected";
               }

              ?>

           ><?php echo $i;?></option>
          <?php
        }

        ?>
         </select><br><br>



    Hobbies:

     <select name="hobbies[]" multiple>

     <option selected="selected" >Choose hobbies</option>

     <?php
      
      $hobbies=array("Football","Cricket","Chess");

      foreach($hobbies as $i)
      {
      ?>

      <option value="<?php echo $i;?>"

        <?php  
           $a=$_POST['hobbies'];
          if(in_array($i, $a)) 
            { 
              echo "selected=selected"; 
            } 
            ?> 

        > <?php echo $i;?></option>

      <?php
    }
    ?>

  </select><br><br>



         <input type="submit" name="submit" value="Submit">  
</form>




<?php
echo "<h2>Your Input:</h2>";
echo "Name:";
echo $name;
echo "<br><br>";
echo "Email:";
echo $email;
echo "<br><br>";
echo "Website:";
echo $website;
echo "<br><br>";
echo "Comment:";
echo $comment;
echo "<br><br>";
echo "Gender:";
echo $gender;
echo "<br><br>";


echo "Technical skills:";

  echo "<br><br>";
 foreach($_POST['check_list'] as $key=>$value){
      echo $key ."=". $value."<br><br>";
    }

echo "State:";
    foreach($_POST['options'] as $opt){
    echo $opt."<br><br>";
   }

echo "Hobbies:";
   echo "<br>";
   foreach($_POST['hobbies'] as $key=>$value){
        echo $key ."=". $value."<br><br>";
      }

?>

</body>
</html>