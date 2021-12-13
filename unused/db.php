<?php
/*
class report_error{
	function http_error($message)
	{
		header("Content-type: text/plain");
		die($message);
	}
}

class connection_db{
	private $hostname = "sql2.njit.edu";
	private $username = "gnb5";
	private $password = "Hf8627001625$$";
	private $dbname = "gnb5";
	public $conn = NULL;
	public function connection(){
		try
		{
			$this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
			if($this->conn != null){echo "sucessfully connected";}
		}
		catch(PDOException $e)
		{
			$error_out = new report_error();
			$error_out->http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
		}
		return $this->conn;
	}
}

class run_SQL{
	function runQuery($query, $conn) {
		try {
			$q = $conn->prepare($query);
			$q->execute();
			$results = $q->fetchAll();
			$q->closeCursor();
			return $results;
		} catch (PDOException $e) {
			$error_out = new report_error();
			$error_out->http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
		}
	}
}


*/
?>
