<?php

abstract class employee{
	abstract public function setemployeedetails();
	abstract public function getemployeedetails();
}

class details extends employee{
	public function setemployeedetails()
	{
		$employeename="Gayathri";
		$employeeid='CC132';
		$employeeage=21;
		return $employeename;
		return $employeeid;

	}
	public function getemployeedetails()
	{
		echo $employeename;
		echo $employeeid;
	}
}

$detailobj=new details();
echo "Employeename:";
$value=$detailobj->getemployeedetails();
echo $value;
?>