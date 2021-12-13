<?php
include "db_conn2.php"; // Using database connection file here


$itemName = $_GET['itemName']; // get id through query string

echo $itemName;

if ($result = $mysqli -> query("SELECT * FROM items")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$del = mysqli_query($db,"DELETE from items where itemName = '$itemName'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:itemsIndex.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
