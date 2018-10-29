<?php

include "connection.php";
session_start();

$email = $_REQUEST["EmailID"];
$password = $_REQUEST["pass"];


$select = "select * from user where UEmail='$email' and password='$password '";

$result = mysqli_query($conn,$select);

$row=mysqli_num_rows($result);
if($row)
{
    $_SESSION["username"] = $email;
    header("location:test.php");
} else {
    header("location:login.php?succ=Wrong Email and Password");
}
?>