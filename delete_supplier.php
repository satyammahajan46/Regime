<?php
echo $_GET["suppliers"];
$s="delete from suppliers where supplier_id='".$_GET["tsid"]."'";
$conn=mysqli_connect("127.0.0.1","root",null,"gst");
mysqli_query($conn,$s);
header("location: view_supplier.php");
?>
