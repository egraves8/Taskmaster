<?php
include "db_conn2.php"; // Using database connection file here
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>To-Do Tasks</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style2.css"

        <meta name="viewport" content="width=device-width, initial-scale1.0">
    </head>
    <body>
        <div class="list">
            <h1 class="header">To-do Tasks</h1>

            <ul class="items">
                <li>
                            <?php

                            $records = mysqli_query($db,"select * from items"); // fetch data from database


                            while($data = mysqli_fetch_array($records))
                            {
                            //if() if statement about if items are checked or not (completed)
                            if ($data["done"] == 0) {
                            ?>
                                <li>
                                <td><?php echo $data['itemName']; ?></td>
                                <?php echo $data['duedate']; ?>
                                <?php echo $data["done"]; ?>
                                <?php echo $data["urgency"]; ?>
                                <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $data['itemName']; ?>">Delete</a></td>
                                <label for="done">Done:</label>
                                <input type="checkbox" id="done" name="done" value="1" />


                           <?php // These were the lines to diplay how much time was left from due date
                           //echo $interval = $data['duedate']->diff($now); ?>
                            <?php //echo $interval->format("%a days, %h hours, %i minutes, %s seconds"); ?>



                                </li>


                            <?php }
                            }
                            ?>


                </li>
                  <h1 class="header">Done Tasks</h1>

                   <?php

                                              $records = mysqli_query($db,"select * from items"); // fetch data from database
                                              $counter = 0;



                                              while($data = mysqli_fetch_array($records))
                                              {
                                              //if() if statement about if items are checked or not (completed)
                                              if ($data["done"] == 1) {
                                              ?>
                                              <?php $counter++; ?>

                                                  <li>
                                                  <td><?php echo $data['itemName']; ?></td>
                                                  <?php echo $data['duedate']; ?>
                                                  <?php echo $data["done"]; ?>
                                                  <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                                                  <td><a href="delete.php?id=<?php echo $data['itemName']; ?>">Delete</a></td>
                                                   <label for="done">Done:</label>
                                                              <input type="checkbox" id="done" name="done" value="1" />
                                                  </li>

                                              <?php
                                              }

                                              }

                                               echo "STATISTICS: Number of DONE tasks:";
                                               echo $counter;
                                              ?>
            </ul>
             <h1 class="header">Add Task</h1>

            <form class="item-add" action="add.php" method="post">
                <input type="text" name="itemName" placeholder="Type a new item here." class="input" autocomplete="off" required>
                <input id="duedate" name="duedate" type="datetime-local" placeholder="Enter due date" class="input" required /><br>
                <textarea id="description" name="description" placeholder="Enter description" rows="10" cols="30" maxlength="144" class="input" required ></textarea>
                <select name="urgency" id="urgency" class="input">
                	<option value="">--- Choose Urgency ---</option>
                	<option value="normal">normal</option>
                	<option value="important">important</option>
                	<option value="very important">very important</option>

                <input type="checkbox" id="done" name="done" value="1" />
                </select>

                <input type="submit" value="Add" class="submit">
            </form>

        </div>
    </body>
</html>
<?php mysqli_close($db); // Close connection ?>

