<?php

include "connection.php";
session_start();

$email = $_REQUEST["EmailID"];
$password = $_REQUEST["pass"];
$newpassword = $_REQUEST["newpass"];
$cnewpassword = $_REQUEST["cnewpass"];

$select = "select * from `user login` where UEmail='$email' and UPassword='$password'";

if($newpassword == $cnewpassword){
    $result = mysqli_query($conn,$select);
    $row=mysqli_num_rows($result);
    if($row)
    {
        $update = "UPDATE `user login` set `UPassword`= '$newpassword' where UEmail=  '$email'";
        if ($conn->query($update) === TRUE){
            header("location:changepass.php?succ=pcs");
        }
        else{
            header("location:changepass.php?succ=pcus");
        }
    }
    else {
        header("location:changepass.php?succ=wep");
    }
}
else{
    header("location:changepass.php?succ=pncn");
}
?>
