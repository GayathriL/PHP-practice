<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$persondetails=array("Gayathri","Vaishnavi","Preeti","Poonam");

echo json_encode($persondetails);


//print_r($persondetails);

?>