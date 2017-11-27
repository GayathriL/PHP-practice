<html>

<head>

	<style>
       .error{color:red;}

	</style>


 


	</head>

<body>

	<h2 align="center">Registration Form</h2>

	<p><span class="error"></span></p>

	<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	Name :<input type="text" name="name" value="<?php echo $name;?>">

	   <span class="error"><?php echo $nameErr;?></span>
	   <br><br>

	Email :<input type="text" name="email">
	<br><br>

	Hobbies:

  <select name="hobbies" multiple>

    <option selected="selected">Choose hobbies</option>

    <?php
      
      $hobbies=array("Football","Cricket","Chess");

      foreach($hobbies as $i)
      {
      ?>

      <option value="<?php echo strtolower($i);?>"><?php echo $i;?></option>

      <?php
    }
    ?>

  </select><br><br>

     Comment :<textarea rows="5" cols="50" name="comment"></textarea><br><br>

     Gender :<input type="radio" name="gender" value="female">Female

            <input type="radio" name="gender" value="male">Male<br><br>

     Select Your Technical Exposure :<br><br>

     <?php

         $check=array("C/C++","Java","PHP","Html/Css","Unix/Linux");
         ?>

         
 
         
         <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[0];?></label><br>
          <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[1];?></label><br>
           <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[2];?></label><br>
            <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[3];?></label><br>
             <input type="checkbox" name="check_list" value="<?php echo strtolower($i);?>"><label><?php echo $check[4];?></label><br><br>


             


         


     <input type="submit" value="submit">

      <?php
echo "<h2>Your Input:</h2>";
echo $_POST['name'];
echo "<br>";

echo $_POST['email'];

echo "<br>";
echo $_POST['comment'];
echo "<br>";
echo $_POST['gender'];
?>

 </form>




     <?php

        $name=$email=$gender=$comment="";
        $nameErr=$emailerr=$gendererr=$commenterr="";


        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          if(empty($_POST['name']))
          {
          	$nameErr="Name is required";
          }
          else
          {
          	$name=test_input($_POST['name']);
          }



          if(empty($_POST['email']))
          {
          	$emailerr="Email is required";
          }
          else
          {
          	$email=test_input($_POST['email']);
          }



          if(empty($_POST['gender']))
          {
          	$gendererr="Gender is required";
          }
          else
          {
          	$gender=test_input($_POST['gender']);
          }


          if(empty($_POST['comment']))
          {
          	$commenterr="";
          }
          else
          {
          	$comment=test_input($_POST['comment']);
          }

       }


       function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

      ?>



     


     
 </body>
 </html>
