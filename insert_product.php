<?php
$product_name = $_REQUEST["pnam"];
$selling_price = $_REQUEST["sprice"];
$taxslab_id = $_REQUEST["tax"];
$mrp = $_REQUEST["mrp"];
$stock = $_REQUEST["stk"];
$mrp=$_REQUEST["mrp"];

//$photo = $_REQUEST["photo"];
$temp = $_FILES["photo"]["tmp_name"];
$path = "product/" . $_FILES["photo"]["name"];

move_uploaded_file($temp, $path);

$description = $_REQUEST["des"];
$supplier_id = $_REQUEST["snam"];


include "connection.php";
$insert_into_products = "insert into products VALUES (NULL ,'" . $product_name . "','" . $selling_price . "','" . $taxslab_id . "',
'" . $mrp . "','" . $stock . "','" . $path . "','" . $description . "','" . $supplier_id . "')";

mysqli_query($conn, $insert_into_products);

header("location:add_product.php?pa=Product Added Successfully");

echo $insert_into_products;



