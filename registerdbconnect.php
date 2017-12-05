<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "compass";
	private $database = "login";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->localhost,$this->user,$this->password,$this->database);
		if($conn === false)
		{
			die("connection not happening");
		}

		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		
			return $result;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>