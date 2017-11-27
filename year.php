<html>


<head>
<?php
$startdate = $_POST['startdate']; // starting date
$enddate = $_POST['enddate']; // end date
$now = strtotime($startdate);
$your_date = strtotime($enddate);
$datediff = $your_date - $now;
$number = floor($datediff/(60*60*24));



?>

</head>
<body>
<form name="date_form" action="" method="POST"">
<input type="text" name="startdate" value=""/>
<input type="text" name="enddate" value=""/>
<input type="submit" name="submit_start" value="Submit" />
<?php
echo $number;
?>
</form>
</body>
</html>
