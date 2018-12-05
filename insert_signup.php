<?php

include "connection.php";
$admin_email = $_REQUEST["cemail"];
$password = $_REQUEST["pas"];
$confirm_password = $_REQUEST["cpas"];
$mobile_number = $_REQUEST["cmobile"];
$ename=$_REQUEST["ename"];
$gstno=$_REQUEST["gstno"];
$grp1=$_REQUEST["grp1"];

$s="select * from signup";

$result=mysqli_query($conn,$s);

$flag=0;

while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST["cemail"])
    {
        $flag=1;
        break;
    }
}

if($flag==1)
{
    header("location: signup.php? q=1");
}
elseif ($password!=$confirm_password)
{
    header("location: signup.php? q=2");
}
else
{
    $s1="insert into signup values('".$_POST["cemail"]."','".$_POST["pas"]."','".$_POST["cmobile"].
        "','".$_POST["ename"]."','".$_POST["gstno"]."','".$_POST["grp1"]."')";
    mysqli_query($conn,$s1);

    header("location: signup.php? q=3");
}

