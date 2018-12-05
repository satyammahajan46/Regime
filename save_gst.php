<?php
include "connection.php";
$tsid = $_REQUEST["tsid"];
$name = $_POST["name"];
$cgst = $_POST["cgst"];
$sgst = $_POST["sgst"];
$code = $_POST["code"];


$total = 0;

$total = $cgst + $sgst;


$s = "update taxslab SET name='" . $name . "',cgst='" . $cgst . "',sgst='" . $sgst . "',code='" . $code . "',
totalgst='" . $total . "' WHERE tsid='" . $tsid . "'";
mysqli_query($conn, $s);
//echo $s;
header("location: view_gst.php");
?>