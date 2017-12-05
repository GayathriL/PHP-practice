<?php

class Faculty{

	public $facultyname;
	public $organisationname;

	function __construct($facultyname,$organisationname)
	{
		$this->name=$facultyname;
		$this->oname=$organisationname;
		echo $facultyname;
		echo $organisationname;
	}
}

class Student extends Faculty{

	public $registerno;
	public $studentname;

	function __construct($registerno,$studentname)
	{
		$this->registerno=$registerno;
		$this->studentname=$studentname;
		echo $registerno;
		echo $studentname;
	}


}

$faculty=new Faculty('Karthick','Compassites');
$student=new Student('CC132','Gayathri');


?>