<html>

<body>

	<?php
       
       $a=array("Pencil"=>"10" , "Black board"=>"12" , "Apple"=>"9" , "Chocolate"=>"4" , "Note pad"=>"5");

       asort($a);

       foreach($a as $x=>$x_value)
       {
       	echo "Key=" .$x. " , value=" .$x_value;
       	echo "<br>";
       }



	?>

</body>
</html>