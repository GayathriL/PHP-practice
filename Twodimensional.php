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

	echo $StudentDetails[3][0].": Roll No :".$StudentDetails[3][1].", Address :".$StudentDetails[3][3].".<br>";

	?>

</body>
</html>