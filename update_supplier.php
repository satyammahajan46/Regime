<?php
include "login_header.php";


$sname = $_POST["sname"];
$gstno = $_POST["sgst"];
$pan = $_POST["pno"];
$mobile = $_POST["smobile"];
$semail = $_POST["semail"];
$address = $_POST["sadd"];


$s = "update suppliers set (null,'" . $sname . "','" . $gstno . "','" . $address . "','" . $pan . "',
'" . $mobile . "','" . $semail . "','" . $username . "')";
mysqli_query($conn, $s);

echo $s;
//header("location: view_supplier.php");

?>
UPDATE `suppliers` SET null,supplier_name=[$sname],gst_no=[sgst],
address=[sadd],pan_no=[pno],mobile=[smobile],email=[semail],user_email=[$username] WHERE 1
