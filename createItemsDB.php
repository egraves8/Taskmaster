<?php
$servername = "sql1.njit.edu";
$username = "gnb5";
$password = "Hf8627001625$$";
$dbname = "gnb5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE items (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
itemName VARCHAR(30) NULL,
user INT(11) NULL,
done TINYINT(1) NULL,
created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";


if ($conn->query($sql) === TRUE) {
  echo "Table items created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>