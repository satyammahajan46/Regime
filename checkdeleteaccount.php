<?php

include "connection.php";
session_start();
$email = $_REQUEST["EmailID"];
$password = $_REQUEST["pass"];
$select = "select * from `user login` where UEmail='$email' and UPassword='$password'";
$result = mysqli_query($conn,$select);

$row=mysqli_num_rows($result);

if($row)
{
    $delete="DELETE from `user login` where UEmail='$email'";
    if ($conn->query($delete) === TRUE) {
        include "logout.php";
        header("location:login.php?del=sad");
    }
    else{
        header("location:deleteacc.php?succ=err");
    }
}
else {
    header("location:deleteacc.php?succ=wep");
}

?>
