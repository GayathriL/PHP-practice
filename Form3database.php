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

<?php
require_once("dbconnect.php");
$dropdown=new DBController();

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $website=$_POST['website'];
  $comment=$_POST['comment'];
  $gender=$_POST['gender'];
  $mobileno=$_POST['phnno'];
  $countryid=$_POST['countryoptions'];
  $hobbyid=$_POST['hobbies'];
  $checkboxid=$_POST['check_list'];

  echo $name;
  echo $email;
  echo $website;
  echo $comment;
  echo $gender;
  echo "checkboxid:";
  foreach ($checkboxid as $key => $checkvalue) {

    echo $checkvalue;
    
  }
  echo "countryid:";
  foreach($countryid as $key => $countryvalue){
    echo $countryvalue;
    
  }
  echo "hobbyid:";
  foreach($hobbyid as $key => $hobbyvalue){
    echo $hobbyvalue;
    
  }
  //echo $hobbyid;
  //echo $checkboxid;


  if($name!=''||$email=''){
   $query="INSERT INTO userdetails(name,email,website,comment,gender,countryid,hobbyid,checkboxid,Mobileno) values('$name','$email','$website','$comment','$gender','$countryvalue','$hobbyvalue','$checkvalue','$mobileno')";
   
   echo "<br/><br/><span>Data Inserted successfully...!!</span>";
  }
  else
  {
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
  }
  }
  
$result1=$dropdown->runQuery($query);
?>



<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>

<body>  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr =$passwordErr=$confirmpassErr=$phnnoErr= "";
$name = $email = $gender = $comment = $website =$check_list=$password=$confirmpass=$phnno= "";

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

  if(empty($_POST["password"])){
    $passwordErr="Password is required";
  }
  else{
    $password=test_input($_POST["password"]);
  }

  if(empty($_POST["confirmpass"])){
    $confirmpassErr="Password is required";
  }
  else
  {
    $confirmpass=test_input($_POST["confirmpass"]);
  }
  if(empty($_POST["phnno"])){
    $phnnoErr="Mobile no is required";
  }
  else
  {
    $phnno=test_input($_POST['phnno']);

  
   if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phnno)) {
  // $phone is valid
      $phnnoErr="Invalid number";
  }
  
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

  Password:<input type="password" name="password" id="pwd" class="masked" value="<?php echo $password;?>">
  
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>


  
  Confirm Password:<input type="password" name="confirmpass" value="<?php echo $confirmpass;?>">
  <span class="error">* <?php echo $confirmpassErr;?></span>
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

  Mobile No:<input type="text" name="phnno" value="<?php echo $phnno;?>">
  <span class="error">* <?php echo $phnnoErr;?></span>
  <br><br>

    Select Your Technical Exposure :<br><br>

      <?php

     foreach($resultcheck as $check){

     ?>

     <input type="checkbox" name="check_list[]" value="<?php echo $check['checkboxid'];?>"
     <?php
      $a=$_POST['check_list'];
      if(!empty($a)){
      if(in_array($check['checkboxid'],$a)){
      echo "checked=checked";
    }
  }
   
    ?>
    ><?php echo $check['checkboxname'];?>
    <?php
    }
    ?><br><br>



    Select country:

       
       <select name="countryoptions[]">

      <option>Select country</option>

      <?php

      while($row = mysqli_fetch_assoc($results)){

      ?>
  
      <option value="<?php echo $row['countryid'];?>"

      <?php
      $a=$_POST['countryoptions'];
      if(!empty($a)){
        if(in_array($row['countryid'],$a)){
          echo "selected=selected";
        }
      }
      ?>
      ><?php echo $row['countryname'];?></option>
 
      <?php
      }
      ?>
  </select><br><br> 

 

    Select state:

          <select name="options[]">

            <option selected="selected">Choose state</option>

         <?php

         $state=array("Karnadaka","Tamilnadu","Kerala","Andhara pradesh","Delhi");

         foreach($state as $i){

         ?>

          <option value="<?php echo $i;?>"
           
              <?php 

               $a=$_POST['options'];
               if(!empty($a)){
               if(in_array($i,$a))
               {
                echo "selected=selected";
               }
             }

              ?>

           ><?php echo $i;?></option>
          <?php
        }

        ?>
         </select><br><br>

    Select city:

       <select name="cityoptions[]">

        <option>choose cities</option>

        <?php

        $city=array("Bangalore","Mangalore","chennai","Madurai");

        foreach($city as $i){

        ?>

        <option value="<?php echo $i;?>"

        <?php
        $a=$_POST['cityoptions'];
        if(!empty($a)){
          if(in_array($i,$a))
          {
            echo "selected=selected";
          }
        }
        ?>
        ><?php echo $i;?></option>
        <?php
      }
      ?>
    </select><br><br>
    


    Hobbies:

     <select name="hobbies[]" multiple>

     <?php

     foreach($resulthobby as $hobby){

     ?>

     <option value="<?php echo $hobby['hobbyid'];?>"
     <?php
     $a=$_POST['hobbies'];
     if(!empty($a)){
      if(in_array($hobby['hobbyid'],$a)){
         echo "selected=selected";
      }
    }
    ?>
     ><?php echo $hobby['hobbyname'];?>  
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
echo "Mobile No:";
echo $phnno;
echo "<br><br>";


echo "Technical skills:";

  echo "<br><br>";
  if(!empty($_POST['check_list'])){
  foreach($_POST['check_list'] as $key=>$value){
      echo $key ."=".$value."<br><br>";
    }
  }

echo "Country:";
    
    if(!empty($_POST['countryoptions'])){
    foreach($_POST['countryoptions'] as $opt){
    echo $opt."<br><br>";
   }
 }

echo "State:";
    
    if(!empty($_POST['options'])){
    foreach($_POST['options'] as $opt){
    echo $opt."<br><br>";
   }
 }

 echo "City:";

    if(!empty($_POST['cityoptions'])){
      foreach($_POST['cityoptions'] as $opt){
        echo $opt."<br><br>";
      }
    }

echo "Hobbies:";
   echo "<br><br>";
   if(!empty($_POST['hobbies'])){
   foreach($_POST['hobbies'] as $key=>$value){
        echo $key ."=". $value."<br><br>";
      }
    }



?>

   




</body>
</html>