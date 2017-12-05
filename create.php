<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
 $data = json_decode(file_get_contents("php://input"), true); 
require_once("cruddb.php");
$create=new DBController();

if($_SERVER['REQUEST_METHOD'] == "POST") {
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$qualification=$_POST['qualification'];
$city=$_POST['city'];
$state=$_POST['state'];

$query="INSERT INTO details(firstname,lastname,qualification,city,state) VALUES('$firstname','$lastname','$qualification','$city','$state') ";
$results=$create->runQuery($query);


}
if($results)
{
	echo "inserted successfully";
}
else
{
	echo "insertion not happening";
}


?>

