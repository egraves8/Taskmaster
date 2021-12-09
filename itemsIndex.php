<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>To Do</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style2.css"

        <meta name="viewport" content="width=device-width, initial-scale1.0">
    </head>
    <body>
        <div class="list">
            <h1 class="header">To do.</h1>
            <ul class="items">
                <li>
                    <span class="item done">Pick up Shopping</span>
                    <a href="#" class="done-button">Mark as Done</a>
                </li>

                <li>
                    <span class="item done">Learn php</span></li>
            </ul>

            <form class="item-add" action="add.php" method="post">
                <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
                <input type="submit" value="Add" class="submit">

            </form>
    </body>
</html>
