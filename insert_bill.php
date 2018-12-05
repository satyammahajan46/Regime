<?php
ob_start();
include 'cart.php';
include 'login_header.php';
$invoice_type=$_REQUEST['invoice_type'];
$fullname=$_REQUEST['fullname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$gstno=$_REQUEST['gstno'];
$total=$_REQUEST['total'];
$ar=array();
$ar = $_SESSION['products'];
date_default_timezone_set('Asia/Kolkata');
$dt=date('Y-m-d');
$tym=date('H:i:s');
if($invoice_type=='RETAIL INVOICE') {
    $cust = "INSERT INTO customers (`id`, `cust_name`, `phone`, `email`, `gstno`) VALUES 
(NULL ,'" . $fullname . "','" . $phone . "','" . $email . "','" . $gstno . "')";
    mysqli_query($conn, $cust);
    echo $cust;

    $s = "select MAX(`id`) as id from `customers`";
    $result = mysqli_query($conn, $s);
    $row = mysqli_fetch_array($result);
    $cust_id = $row[0];
}
else
    {
        $cust_id=$_REQUEST['cust_id'];
    }

$bill="INSERT INTO `bill`(`id`, `total`, `cust_id`, `bill_date`, `bill_time`, `email`, `bill_type`) VALUES 
(NULL ,'".$total."','".$cust_id."','".$dt."','".$tym."','".$username."','".$invoice_type."')";
echo $bill;
mysqli_query($conn,$bill);

$s1="select MAX(`id`) as id from `bill`";
$result1=mysqli_query($conn,$s1);
$row1=mysqli_fetch_array($result1);

for($j=0;$j<count($ar);$j++) {
    $bill_detail = "INSERT INTO `bill_details`(`id`, `bill_id`, `product_id`, `price`, `cgst`, `sgst`, `total_gst`, `mrp`, `qty`) VALUES (NULL ,'" . $row1['id'] . "','" . $ar[$j]->id . "','" . $ar[$j]->sp . "','".$ar[$j]->CGST.
        "','".$ar[$j]->SGST."','" . $ar[$j]->TotalGST . "','" . $ar[$j]->mrp . "','" . $ar[$j]->qty . "')";
  echo  $bill_detail;
    mysqli_query($conn, $bill_detail);
    $stock=$ar[$j]->stock-$ar[$j]->qty;
    $update="update products set stock=".$stock." where id=".$ar[$j]->id;
    mysqli_query($conn,$update);
}


$_SESSION['products']=null;
header("Location:Billing.php?msg=Thank You for Purchase with us")
?>