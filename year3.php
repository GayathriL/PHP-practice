<html>
<body>

<form method="POST">
Enter the Year:	<input type="text" name="year"><br>
	<input type="submit" name="submit">
	<?php

 if($_POST)  
    {     
        //get the year  
        $year = $_POST['year'];  

        function days($year) 
        {
        	
        	$count1=0;
        	$count2=0;
          $count3=0;
          $numberofdays=365;
          $numberofweek=($numberofdays)/7;
          
          
         

        	for($month=1;$month!=13;$month++) {
    
            $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);


              if($days==30)
              {
              $count1++;
              }
              elseif($days==31)
              {
              $count2++;
              }
              elseif($days==28)
              {
                $count3++;

              }
              
        	}
          echo "There were ".$count1."month having 30 days"."<br>";
          
          echo "There were ".$count2."month having 31 days"."<br>";

          echo "There were ".$count3."month having 28 days"."<br>";

          echo "Total number of days=".$numberofdays."days"."<br>";

          echo "Total number of weeks=".$numberofweek."weeks"."<br>";                  
        }

        function leapdays($year)
        {

          $count1=0;
          $count2=0;
          $count3=0;
          $numberofdays=366;
          $numberofweek=($numberofdays)/7;
          
          
         

          for($month=1;$month!=13;$month++) {
    
            $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);


              if($days==30)
              {
              $count1++;
              }
              elseif($days==31)
              {
              $count2++;
              }
              elseif($days==29)
              {
                $count3++;

              }

          echo "There were ".$count1."month having 30 days"."<br>";
          
          echo "There were ".$count2."month having 31 days"."<br>";

          echo "There were ".$count3."month having 29 days"; 

          echo "Total number of days="."$numberofdays"."<br>";

          echo "Total number of week="."$numberofweek"."<br>"; 

        }

        
        //check if entered value is a number  
        if(!is_numeric($year))  
        {  
            echo "Strings not allowed, Input should be a number";  
            return;  
        }   
        //multiple conditions to check the leap year  
        if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )  
        {  
            echo "$year is a Leap Year"."<br>";
            leapdays($year);
        }  
        else  
        {  
            echo "$year is not a Leap Year"."<br>"; 
            days($year);   
        }  
    }   













?>


</form>

</body>
</html>
