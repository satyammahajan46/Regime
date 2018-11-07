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
    $delete="DELETE from user information where 'UEmail'='$email'";
    if ($conn->query($delete) === TRUE) {
         header("location:deleteaccount.php?succ=account deleted");
}
}
else {
    header("location:deleteaccount.php?succ=Wrong Password");
}
    
?>
