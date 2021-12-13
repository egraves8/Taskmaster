<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>id</td>
    <td>itemName</td>
    <td>user</td>
    <td>done</td>
    <td>create</td>
  </tr>

<?php

include "db_conn2.php"; // Using database connection file here

$records = mysqli_query($db,"select * from items"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['itemName']; ?></td>
    <td><?php echo $data['user']; ?></td>
    <td><?php echo $data['done']; ?></td>
    <td><?php echo $data['created']; ?></td>
  </tr>
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>