<html>

<body>

	<?php

	$StudentDetails=array
	(

        array("Gayathri",01,"Tamilnadu"),
        array("Geetha",02,"Karnadaka"),
        array("priya",03,"Kerala"),
        array("reema",04,"Aandhara")

     );

	echo $StudentDetails[0][0].": Roll No :".$StudentDetails[0][1].", Address :".$StudentDetails[0][2].".<br>";

	echo $StudentDetails[1][0].": Roll No :".$StudentDetails[1][1].", Address :".$StudentDetails[1][2].".<br>";

	echo $StudentDetails[2][0].": Roll No :".$StudentDetails[2][1].", Address :".$StudentDetails[2][2].".<br>";

	echo $StudentDetails[3][0].": Roll No :".$StudentDetails[3][1].", Address :".$StudentDetails[3][2].".<br>";


    echo "<br>";
	echo '<table border="1">';
    echo '<tr><th>Name</th><th>Roll No</th><th>Address</th></tr>';
    for($row=0;$row<count($StudentDetails);$row++) {
    echo('<tr>');
    for($column=0;$column<count($StudentDetails[$row]);$column++) {
    echo('<td>' . $StudentDetails[$row][$column] . '</td>');
     } 
     echo('</tr>');
    }

    echo '</table>';
   ?>


   <?php

   $fruits=array("Apple","orange","pineapple","Grapes");

   echo "<br>";
   echo "Single dimensional Array:";

   echo "<br>";

   echo "I like " .$fruits[0]. "," .$fruits[1]. "," .$fruits[2]. "," .$fruits[3]. ".";


   echo "<br>"; 

   echo '<table border="1">';
   
   echo '<tr><th>Fruits Name</th></tr>';

   for($i=0;$i<count($fruits);$i++)
   {
   	echo('<tr>');

   	for($x=0;$x<count($fruits[$i]);$x++)
   	{
   		echo('<td>' .$fruits[$i]. '</td>');
   	} 

   	echo('</tr>');
   }
   echo '</table>';


?>


</body>
</html>