<?php
$itemName = $_POST['itemName'];
$duedate = $_POST['duedate'];
$description = $_POST['description'];
$urgency = $_POST['urgency'];

$db = mysqli_connect("sql1.njit.edu","gnb5", "Hf8627001625$$","gnb5");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connection Successfull";
}

$sql = "INSERT INTO items(itemName,duedate,description,urgency)
VALUES('$itemName','$duedate','$description','$urgency')";

if($db->query($sql) === TRUE) {
    echo "Data Inserted";
}
else{
    echo "Error: ".$sql."<br>".$db->error;
}
header("Location: itemsIndex.php");
?>