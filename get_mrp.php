<?php
$taxslab=$_REQUEST['q'];
include 'connection.php';
$s="select * from taxslab WHERE tsid='".$taxslab."'";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$stgst=$row[3];
$ctgst=$row[2];
$output=$ctgst.'-'.$stgst;
echo $output;
?>