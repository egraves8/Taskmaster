<?php

// initial connection
$db = mysqli_connect("sql1.njit.edu","elg22", "18Drm200#!","elg22");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

/*if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connection Successfull";
}*/

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM Users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
    echo 'success';
    }else{
    echo 'failure';
    echo $check;
    }
    }

// TODO List Page Goes Here
header('Location: https://web.njit.edu/~elg22/Final%20Project/loginPage.php');

?>