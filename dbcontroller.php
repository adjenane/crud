<?php
class DBController {
	private $host = "localhost";
	private $user = "bplpta91_adel";
	private $password = "0402MotLibree";
	private $database = "bplpta91_bplp";
    private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();

	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		$conn->query("SET NAMES 'utf8'");
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn, $query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
	
	function executeQuery($query) {
	    $result  = mysqli_query($this->conn, $query);
	    return $result;	
	}
}
?>
