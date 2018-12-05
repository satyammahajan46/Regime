<?php
echo $_GET["admins"];
$s="delete from admins where email='".$_GET["email"]."'";
$conn=mysqli_connect("127.0.0.1","root",null,"gst");
mysqli_query($conn,$s);
header("location: view_admin.php");
?>
