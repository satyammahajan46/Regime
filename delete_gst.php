<?php
echo $_GET["taxslab"];
$s="delete from taxslab where tsid='".$_GET["tsid"]."'";
$conn=mysqli_connect("127.0.0.1","root",null,"gst");
mysqli_query($conn,$s);
header("location: view_gst.php");
?>
