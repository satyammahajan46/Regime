<?php
include "login_header.php";


$sname = $_POST["sname"];
$gstno = $_POST["sgst"];
$pan = $_POST["pno"];
$mobile = $_POST["smobile"];
$semail = $_POST["semail"];
$address = $_POST["sadd"];


$s = "insert into suppliers VALUES(null,'" . $sname . "','" . $gstno . "','" . $address . "','" . $pan . "',
'" . $mobile . "','" . $semail . "','" . $username . "')";
mysqli_query($conn, $s);

echo $s;
header("location: view_supplier.php");

?>