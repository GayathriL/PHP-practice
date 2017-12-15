<?php

namespace Compassite\controller;
use Compassite\model\DBController;

class EnableDisablecontroller{

public function enabledisable(){
$enable=new DBController();
$query="SELECT firstname,userid,status FROM user";
$results=$enable->runQuery($query);

while($row=mysqli_fetch_array($results))
{
	$firstname=$row['firstname'];
	$userid=$row['userid'];
	$status=$row['status'];




?>

<?php

if(($status)==0)
{
?>
<a href="index.php?action=action" class="act" onclick="return confirm('Activate <?php echo $firstname?>');">
	Deactivate</a>

<?php
}
if(($status)==1)
{
?>

<a href="action.php?status=<?php echo $row['userid'];?>" class="deact" onclick="return confirm('De-activate <?php echo $firstname?>');">
	Activate</a>

<?php
}
?>

<?php
}
?>

}
}