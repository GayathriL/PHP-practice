<?php

class Person{

	private $name;
	public $age;

	function __construct($personname,$personage,$email,$mobileno)
	{
		$this->name=$personname;
		$this->age=$personage;
		$this->email=$email;
		$this->mobileno=$mobileno;
		echo "Name: ".$personname."<br>";
		echo "Age: ".$personage."<br>";
		echo "Email: ".$email."<br>";
		echo "Mobileno: ".$mobileno."<br>";

		
	}

	public function setname($newname){
		$this->name=$newname;
		echo "Name: ".$newname."<br>";
	}
	public function setage($age){
		$this->age=$age;
		echo "Age: ".$age;
	}
	public function getname(){
		return $this->name;
	}
	
}



$person=new Person('Gayathri',21,'gaya3@gmail.com',9234687454/*$person->setname('Gayathri');
$person->setage(21);
$person->getname();*/



?>