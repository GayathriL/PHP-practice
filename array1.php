<html>
<body>

	<form method="post">

		Enter string1:<input type="text" name="str1"><br><br>

		Enter string2:<input type="text" name="str2"><br><br>

		Enter string3:<input type="text" name="str3"><br><br>

		Enter string4:<input type="text" name="str4"><br><br>

		<input type="submit" value="submit">

	</form>

	<?php

	$String1=$_POST['str1'];
	$String2=$_POST['str2'];
	$String3=$_POST['str3'];
	$String4=$_POST['str4'];

	$a=array("a"=>$String1,"b"=>$String2);

	$b=array("c"=>$String3,"d"=>$String4);

	$c=$a+$b;

	echo "Union of \$a and \$b: \n";

	echo "<br>";

	echo "Union of \$c and \$d: \n";

	echo "<br>";

	var_dump($c);

	echo "<br>";

	?>

	<?php

	echo "Union:";
	echo "<br>";
    
    $Union=array_merge(array_intersect($a,$b),array_diff($a, $b),array_diff($b,$a));
    
    var_dump($Union);

    ?>



	</body>
	</html>