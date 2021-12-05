<?php
require 'db.php' ;
$sql = "select id, fname,lname, pass, email, reg_date from users";
$db = new connection_db();
$conn = $db->connection();

$run_q = new run_SQL();
$results = $run_q->runQuery($sql, $conn);
if(count($results) > 0)
{
	echo "<table border=\"1\"><tr><th>ID</th><th>CategoryID</th><th>productCode</th><th>productName</th><th>listPrice</th></tr>";
	foreach ($results as $row) {
		echo "<tr><td>".$row["productID"]."</td><td>".$row["categoryID"]."</td><td>".$row["productCode"]."</td><td>".$row["productName"]."</td><td>".$row["listPrice"]."</td></tr>";
	}
	
}else{
    echo '0 results';
}
?>