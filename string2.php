<html>
<body>

<form method="post">

Enter string1:<input type="text" name="string1"><br><br>

Enter String2:<input type="text" name="string2"><br><br>

Enter String3:<input type="text" name="string3"><br><br>

<input type="submit" value="submit">

<?php

$st1=$_POST['string1'];
$st2=$_POST['string2'];
$st3=$_POST['string3'];

echo str_replace($st1,$st2,$st3);

?>