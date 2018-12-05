<?php

include "connection.php";


$name = $_POST["name"];
$cgst = $_POST["cgst"];
$sgst = $_POST["sgst"];
$code = $_POST["code"];


$total = 0;

$total = $cgst + $sgst;


$s = "insert into taxslab VALUES(null,'" . $name . "','" . $cgst . "','" . $sgst . "','" . $code . "','" . $total . "')";
mysqli_query($conn, $s);

echo $s;
header("location: add_gst.php");

?>