<?php
session_start();
include "connection.php";
$product_name = $_REQUEST["pnam"];
$selling_price = $_REQUEST["sprice"];
$taxslab_id = $_REQUEST["tax"];
$mrp = $_REQUEST["mrp"];
$stock = $_REQUEST["stk"];

//$photo = $_REQUEST["photo"];
$temp = $_FILES["photo"]["tmp_name"];
$path = "product/" . $_FILES["photo"]["name"];

move_uploaded_file($temp, $path);

$description = $_REQUEST["des"];
$supplier_id = $_REQUEST["snam"];
$id=$_REQUEST["pid"];
$s="UPDATE products SET id='".$id."' ,product_name='".$product_name."',selling_price='".$selling_price."',taxslab='".$taxslab_id."',
mrp='".$mrp."',stock='".$stock."',photo='".$path."',description='".$description."' WHERE id='".$id."'";
mysqli_query($conn, $s);
echo $s;
//header("location: view_product.php");
?>