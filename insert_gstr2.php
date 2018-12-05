<?php
include 'login_header.php';
$invoice_no=$_REQUEST['invoice_no'];
$date=$_REQUEST['date'];
$supplier=$_REQUEST['supplier'];
$invoice_value=$_REQUEST['invoice_value'];
$tax_value=$_REQUEST['tax_value'];
$state_tax=$_REQUEST['state_tax'];
$central_tax=$_REQUEST['central_tax'];
$itc_amount=$_REQUEST['itc_amount'];
$state=$_REQUEST['state'];
$Central=$_REQUEST['Central'];

$s="SELECT * FROM `gstr_2` WHERE `invoice_no`='".$invoice_no."'";
$result=mysqli_query($conn,$s);
if(mysqli_num_rows($result)>=0)
{
$insert="INSERT INTO `gstr_2`(`id`, `invoice_no`, `supplier`, `invoice_value`, `tax_value`, `state_tax`, `central_tax`, `itc_amount`, `state`, `central`, `date`) VALUES 
(NULL ,'".$invoice_no."','".$supplier."','".$invoice_value."','".$tax_value."','".$state_tax."','".$central_tax."','".$itc_amount."','".$state."','".$state."','".$date."')";
mysqli_query($conn,$insert);
}
$row=mysqli_fetch_array($result);
