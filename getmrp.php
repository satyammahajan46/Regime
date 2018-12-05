<?php
$taxslab=$_REQUEST['q'];
include 'connection.php';
$s="select * from taxslab WHERE tsid='".$taxslab."'";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$sgst=$row[3];
$cgst=$row[2];
$output=$cgst.'-'.$sgst;
echo $output;
?>