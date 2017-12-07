<?php

 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: POST");
 header("Access-Control-Max-Age: 3600");
 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
 $data = json_decode(file_get_contents("php://input"), true); 

if($_SERVER['REQUEST_METHOD'] == "POST") {

$city=$_POST['city'];
	require_once("cruddb.php");
	$update=new DBController();
	$query="UPDATE details SET city='$city' WHERE id=1";
	$results=$update->runQuery($query);

/*	if($results)
{
	echo "update successfully";
}
else
{
	echo "not update";
}*/

	echo json_encode($results);
}

?>