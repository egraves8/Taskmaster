<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
    <td>Date</td>
  </tr>

<?php

include "db_conn2.php"; // Using database connection file here

$records = mysqli_query($db,"select * from MyGuests"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['lastname']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['reg_date']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>