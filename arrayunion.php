<html>

<body>

	<?php

	$array1=array("Apple","orange","pineapple","potato");

	$array2=array("Beetroot","orange","tomato","pineapple");

	echo "Union:";

	echo "<br>";

	$Union=array_merge(array_intersect($array1,$array2),array_diff($array1,$array2),array_diff($array2,$array1));

    print_r( $Union);

    echo "<br>";



    echo "Intersection:";

    echo "<br>";

    $intersection=array_intersect($array1, $array2);

    print_r($intersection);

    echo "<br>";


    echo "Difference:";

    echo "<br>";

    $Difference=array_merge(array_diff($array1,$array2),array_diff($array2,$array1));

    print_r($Difference);


	?>

</body>
</html>