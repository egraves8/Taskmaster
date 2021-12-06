<?php

$db = mysqli_connect("sql1.njit.edu","elg22", "18Drm200#!","elg22");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connection Successfull";
}

?>