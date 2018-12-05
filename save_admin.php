<?php
$email=$_POST["email"];
$type=$_POST["type"];
$mno=$_POST["mobile"];
include "connection.php";

$s="update admins set mobilenumber='".$mno."', type='".$type."'where email='".$email."'";
mysqli_query($conn,$s);
echo $s;
header("location: view_admin.php");
?>