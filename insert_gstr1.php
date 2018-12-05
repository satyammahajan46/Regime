<?php
include "connection.php";
include "login_header.php";
$turnover=$_REQUEST['turnover'];
$period=$_REQUEST['period'];

$bill = "select * from bill where email='" . $username . "'";
 mysqli_query($conn, $bill);
$id1="select * from bill where bill_id='" .$row[0]. "'";
mysqli_query($conn, $id1);
$s="INSERT INTO `gstr_1`(`id`, `username`, `turnover`, `financial_year`, `bill_id`) VALUES (null,'". $username."',
'".$turnover."','".$period."','".$id1."')";
mysqli_query($conn, $s);
echo $s;


?>

