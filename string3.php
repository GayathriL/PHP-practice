<html>
<body>

<form method="post">

	Enter String:<input type="text" name="str"><br><br>

	<input type="submit" value="submit">

	<form>

		<?php

		$string=$_POST['str'];

		echo substr($string,5);

		?>

	</body>
	</html>

