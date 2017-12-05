<?php 


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
 $data = json_decode(file_get_contents("php://input"), true); 

  	require_once("cruddb.php");
  	$read=new DBController();
	if($_SERVER['REQUEST_METHOD'] == "GET") {
	$query="SELECT firstname,lastname,qualification,city,state FROM details";
	$results=$read->runQuery($query);

		if ($results->num_rows > 0) {
			$data['message'] = [
				'status_code' => 200,
				'message'	  => 'user Details'
			];
			$data['users'] =  [];
			while($row=$results->fetch_assoc())
			{
				
				$data['users'][] = [ 
					'first_name'   => $row["firstname"],
					'last_name'     => $row["lastname"],
					'qualification' => $row["qualification"],
					'city'		 => $row["city"],
					'state'	 => $row["state"]
				];

			}
		} else
		{
			echo "0 results";
		}

		echo json_encode($data);

	}
?>


