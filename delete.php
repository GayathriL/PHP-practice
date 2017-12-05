<?php

 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Methods: POST");
 header("Access-Control-Max-Age: 3600");
 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
 $data = json_decode(file_get_contents("php://input"), true); 

if($_SERVER['REQUEST_METHOD'] == "POST") {

require_once("cruddb.php");
$delete=new DBController();
$query="DELETE FROM details WHERE id=16";
$results=$delete->runQuery($query);
}
if($results)
{
	echo "Deleted successfully";

}
else
{
	echo "not happen";
}

?>