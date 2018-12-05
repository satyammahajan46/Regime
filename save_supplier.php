<?php
session_start();
include "connection.php";
$username = $_SESSION["username"];
$sname = $_POST["sname"];
$gstno = $_POST["sgst"];
$pan = $_POST["pno"];
$mobile = $_POST["smobile"];
$semail = $_POST["semail"];
$address = $_POST["sadd"];
$tsid = $_REQUEST["tsid"];


$s = "update suppliers SET supplier_name='" . $sname . "',gst_no='" . $gstno . "',address='" . $address . "',pan_no='" . $pan . "',
mobile='" . $mobile . "',email='" . $semail . "',user_email='" . $username . "' WHERE supplier_id='" . $tsid . "'";
mysqli_query($conn, $s);
echo $s;
header("location: view_supplier.php");
?>