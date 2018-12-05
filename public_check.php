<?php
ob_start();
include "public_header.php";

include "connection.php";
$cemail=$_POST["cemail"];
$pass=$_POST["pas"];
$s="select * from signup";
$result=mysqli_query($conn,$s);
$flag=0;
while ($row=mysqli_fetch_array($result))
{
    if($row[0]=="$cemail" && $row[1]=="$pass")

    {
        $flag=1;
        break;
    }
}
if($flag==1) {
    session_start();
    $_SESSION["username"] = $_POST["cemail"];
    header("location:public_home.php?q=1");
}
else
{
 header("location:public_login.php?q=2");
}
?>