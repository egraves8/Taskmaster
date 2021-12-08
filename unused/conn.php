<?php
/*
class connect_database{

	private $hostname = "sql2.njit.edu";
	private $username = "gnb5";
	private $password = "Hf8627001625$$";
	private $dbname = "gnb5";
	private $conn = NULL;

	public function connectDb(){
		try
		{
			$this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
			  $stmt = $conn->prepare("SELECT * FROM MyGuests WHERE id < 6");
              $stmt->execute();
			echo "sucessfully connected";
		}
		catch(PDOException $e)
		{
			$error_out->http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
		}
		return $this->conn;
	}

	private function httpError($message)
	{
		header("Content-type: text/plain");
		die($message);
	}
}
*/
?>