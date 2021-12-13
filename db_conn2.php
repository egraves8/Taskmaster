<?php

$db = mysqli_connect("sql1.njit.edu","gnb5", "Hf8627001625$$","gnb5");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connection Successfull";
}

?>