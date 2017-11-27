<html>
<body>
<form method="post">
Enter String:<input type="text" name="name">

<input type="submit" value="submit">
</form>
<?php

 $Name=$_POST['name'];

 echo strrev($Name);



?>

</body>

</html>