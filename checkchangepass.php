<?php
    
    include "connection.php";
    session_start();
    
    $email = $_REQUEST["EmailID"];
    $password = $_REQUEST["pass"];
    $newpassword = $_REQUEST["newpass"];
    
    $select = "select * from `user login` where UEmail='$email' and UPassword='$password'";
    
    
    $result = mysqli_query($conn,$select);
    
    $row=mysqli_num_rows($result);
    if($row)
    {
        $update = "UPDATE `user login` set `UPassword`= '$newpassword' where UEmail=  '$email'";
        if ($conn->query($update) === TRUE){
            header("location:changepass.php?succ=1");
        }
        else{
        header("location:main.php");
        }
    }
    else {
        header("location:changepass.php?succ=Wrong Email or Password");
    }
    ?>
