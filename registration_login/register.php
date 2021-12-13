<?php

// initial connection
$db = mysqli_connect("sql1.njit.edu","elg22", "18Drm200#!","elg22");
/*
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connection Successfull";
}*/

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO Users(fname,lname,email,username,password)
        VALUES('$fname','$lname','$email','$username','$password')";

    if($db->query($sql) === TRUE) {
        echo "Data Inserted";
    }
    else{
        echo "Error: ".$sql."<br>".$db->error;
    }

header('Location: https://web.njit.edu/~elg22/Final%20Project/loginPage.php');

?>