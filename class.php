<?php


define('s',10);
class welcomeclass
{
     const a=10;
	function __construct()
	{
	echo "constructor get called";	
	echo self::a;
	}
}
	


class b extends welcomeclass
{
	function __construct()
	{
	echo "constructor b get called";
	parent::__construct();
	echo "<br>";
    
    }

}

/*$wc=new welcomeclass();*/
echo "<br>";
$b=new b();
