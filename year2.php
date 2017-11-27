<html>
<body>
    
    <form action=" " method="POST">
	Start Date:<input type="date" name="sdate" placeholder="mm/dd/yy"><br><br>
	End Date:<input type="date" name="edate" placeholder="mm/dd/yy"><br><br>
	<input type="submit" value="submit">
</form>
	

      <?php

       $datetime1 = new DateTime($_POST["sdate"]);

       $datetime2 = new DateTime($_POST["edate"]);
      $difference = $datetime1->diff($datetime2);


      echo 'Difference: '.$difference->y.' years, ' 
                   .$difference->m.' months, ' 
                   .$difference->d.' days';

                   echo "<br>";


      $datetime1->modify('First day of the month');
      $firstday=$datetime1->format('y-m-d');




      $date = strtotime($_POST["sdate"]); // July 02, 2014
$month = date('m',$date);
$year = date('Y',$date);
$days_in_month = date('t',$date);


$first_day_of_month = date('w', mktime(0,0,0,$month,1,$year)); // sunday = 0, saturday = 6


//switch case to get the month
switch ($month) {
    case 1: $month= "Janauary"; break;
    
    case 2: $month= "February "; break;

    case 3: $month= "March";break;

    case 4: $month= "April";break;

    case 5:$month= "May";break;

    case 6:$month= "June";break;

    case 7: $month= "July";break;   

    case 8:$month= "August";  break;

    case 9:$month= "September";break;

    case 10:$month= "October"; break;   

    case 11: $month= "November"; break;  

    default: $month= "December"; break;
}


   
//swich case to get the day

switch ($first_day_of_month)     {
       case '0':
       echo "first day of month ".$month." is Sunday.","<br>";
        break;
         case '1':
       echo "first day of month ".$month." is Monday.","<br>";
        break;

         case '2':
       echo "first day of  month ".$month." is Tuesday.","<br>";
        break;

         case '3':
       echo "first day of  month ".$month." is Wednesday.","<br>";
        break;

         case '4':
       echo "first day of  month ".$month." is Thursday.","<br>";
        break;

         case '5':
       echo "first day of  month ".$month." is Friday.","<br>";
        break;
    
    default:
         echo "first day of  month ".$month." is Saturday.","<br>";
        break;
}

echo "first date of month ".$month." is ".$firstday.".","<br>";

//echo "first day of this month is ".$first_day_of_month.".","<br>";


//getmonth();

echo "The Diffrence is " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days "," between ".$_POST["sdate"]." and ".$_POST["edate"].".","<br>";
for ($month=1; $month <= $difference->m; $month++) { 
   //getmonth();
   echo "first day of  month ".$month." is ".$first_day_of_month."<br>";
}




      ?>        


    

   





</body>
</html>

