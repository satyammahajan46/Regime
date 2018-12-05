<?php
echo $_GET["admins"];
$s="delete from contacts where id='".$_GET["id"]."'";
$conn=mysqli_connect("127.0.0.1","root",null,"gst");
mysqli_query($conn,$s);
header("location: eview_admin.php");
?>