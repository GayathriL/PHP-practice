<html>
<body>

	<?php
     $name=$email=$mobile=$website=$address=$gender=$skill=$dob="";
     $nameErr=$emailErr=$mobileErr=$websiteErr=$addressErr=$gErr=$skillErr=$dobErr="";
     
     if(isset($_POST['submit'])){
     $name=$_POST['name'];
     if(!preg_match("/^[a-zA-Z ]*$/",$name)){
     	$nameErr="only letters and whitespace allowed";
     }

     $email=$_POST['email'];
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     	$emailErr="Invalid format";
     }

     $website=$_POST['website'];
     if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
     	$websiteErr="Invalid url";
     }

     $gender=$_POST['gender'];
     if(!isset($_POST['gender'])){
     	$gErr="you must select";
     }
     else
     {
     	$gender=$_POST['gender'];
     }

     $dob=$_POST['dob'];
     if(!preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{4}/",$dob)){
     	$dobErr="Invalid format";
     }

     $skill=$_POST['skill'];
     if(!isset($_POST['skill'])){
     	$skillErr="must select atleast one";
     }
     else
     {
     	$skill=$_POST['skill'];
     }


     $mobile=$_POST['mobile'];
     if(!preg_match("/^[0-9]*$/",$mobile)){
     	$mobileErr="only numbers";
     }
     }

	?>
 <form method="post" action="">
 Name:<input type="text" name="name">
 <span class="error"><?php echo $nameErr;?></span><br><br>

 Email:<input type="text" name="email">
 <span class="error"><?php echo $emailErr;?></span><br><br>	

 Website:<input type="text" name="website">
 <span class="error"><?php echo $websiteErr;?></span><br><br>
 
 Gender:<input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
  <span class="error"><?php echo $gErr;?></span><br><br>

  Date of birth:<input type="text" name="dob" placeholder="DD-MM-YY">
  <span class="error"><?php echo $dobErr;?></span><br><br>

 Technical skills:<input type="radio" name="skill" value="java">Java
                  <input type="radio" name="skill" value="C++">C++
                    <input type="radio" name="skill" value="C">C
                    <input type="radio" name="skill" value="php">PHP
  <span class="error"><?php echo $skillErr;?></span><br><br>
                   
 
 MobileNo:<input type="text" name="mobile">
 <span class="error"><?php echo $mobileErr;?></span><br><br>



 <input type="submit" name="submit" value="submit">




















</body>
</html>	