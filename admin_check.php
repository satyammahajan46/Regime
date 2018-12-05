<?php
    include "admin_header.php";
    ob_start();

include "connection.php";
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $s="select * from admins";
    $result=mysqli_query($conn,$s);
    $flag=0;
    while ($row=mysqli_fetch_array($result))
    {
        if($row[0]=="$email" && $row[1]=="$pass")

        {
            $flag=1;
            break;
        }
    }
    if($flag==1)
    {

        $_SESSION["username"]=$_POST["email"];
      header("location:admin_home.php");
    }
    else
    {

        header("location:login.php?q=2");
    }
?>