<?php

namespace Compassite\controller;

use Compassite\model\DBController;


class ActionController{

public function action(){

if(isset($_GET['status']))
{
	$status1=$_GET['status'];
	$enable=new DBController();
	$query="SELECT * FROM user WHERE userid='$status1'";
	$results=$enable->runQuery($query);
	
	while($row=mysqli_fetch_object($results))
	{
		$status_var=$row->status;
		if($status_var=='0')
		{
          $status_state=1;
		}
		else
		{
			$status_state=0;
		}
		$update="UPDATE user SET status='$status_state' WHERE userid='$status1'";

		if($update)
		{
			header("Location: enabledisable.php");
		}
		else
		{
			echo mysqli_error();
		}
	}
	?>

<?php
}
?>
}
}