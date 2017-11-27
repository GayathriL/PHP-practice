<html>

<body>


	<?php
     
     $fruits=array("Apple","orange","pineapple","Grapes");
     $vegetables=array("Brinjal","Beet root","Drum stick");

     $merge=array(array_merge($fruits,$vegetables));

     echo "The new array elements are:"."<br>";

     print_r($merge);



	?>


</body>
</html>