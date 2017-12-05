<?php

abstract class super{

public $result;
abstract public function sum();
abstract public function sub();

public function mul()
{
	$a=5;
	$b=5;
	$c=$a*$b;
	return $c;
}
}

class subclass extends super{

	public function sum(){
		$a=5;
		$b=5;
		$c=$a+$b;
		return $c;
	}
	public function sub(){
		$a=5;
		$b=5;
		$c=$a-$b;
		return $c;
	}

	public function div(){
		$a=5;
		$b=5;
		$c=$a/$b;
		return $c;

  parent::mul();
	}

}

$obj=new subclass();

$var2=$obj->div();
echo $var2;
 
// $var1=$obj->sum();
// echo $var1;





?>


