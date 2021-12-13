<?php

include "db_conn2.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tblemp where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $itemName = $_POST['itemName'];
    $duedate = $_POST['duedate'];
    $description = $_POST['description'];
    $urgency = $_POST['urgency'];


    $edit = mysqli_query($db,"update items set itemName,duedate,description,urgency where itemName='$itemName'");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:ItemsIndex.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<h3>Update Data</h3>


       <form class="POST" action="edit.php" method="post">
                <input type="text" name="itemName" placeholder="Type a new item here." class="input" autocomplete="off" required>
                <input id="duedate" name="duedate" type="datetime-local" placeholder="Enter due date" class="input" required /><br>
                <textarea id="description" name="description" placeholder="Enter description" rows="10" cols="30" maxlength="144" class="input" required ></textarea>
                <select name="urgency" id="urgency" class="input">
                	<option value="">--- Choose Urgency ---</option>
                	<option value="red">normal</option>
                	<option value="green">important</option>
                	<option value="blue">very important</option>

                	  <input type="submit" name="update" value="Update">
                </form>