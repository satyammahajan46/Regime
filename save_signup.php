<?php
$email=$_POST["cemail"];
$pas=$_POST["pas"];
$mno=$_POST["cmobile"];
$ename=$_POST["ename"];
$gstno=$_POST["gstno"];
$grp1=$_POST["grp1"];

include "connection.php";

$s = "update signup SET email='" . $email . "',password='" . $pas . "',mobile='" . $mno . "',entityname='" . $ename . "',gstno='" . $gstno . "',gender='" . $grp1 . "' WHERE email='" . $cmail . "'";
mysqli_query($conn,$s);
echo $s;
//header("location: view_admin.php");
?>0