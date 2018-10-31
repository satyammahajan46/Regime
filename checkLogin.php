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
    $_SESSION["UEmail"] = $email;
    header("location:main.php");
}
else {
    header("location:login.php?succ=Wrong Email or Password");
}
?>