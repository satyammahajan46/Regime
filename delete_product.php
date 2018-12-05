<?php
echo $_GET["id"];
$s="delete from products where id='".$_GET["id"]."'";
$conn=mysqli_connect("127.0.0.1","root",null,"gst");
mysqli_query($conn,$s);
header("location: view_product.php");
?>
