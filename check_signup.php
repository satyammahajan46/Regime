<?php
include "public_header.php";

include "connection.php";
$cemail=$_POST["cemail"];
$pas=$_POST["pas"];
$s="select * from signup";
$result=mysqli_query($conn,$s);
$flag=0;
while ($row=mysqli_fetch_array($result))
{
    if($row[0]=="$cemail" && $row[1]=="$pas")

    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    session_start();
    $_SESSION["username"]=$_POST["cemail"];
    header("location:admin_home.php");
}
else
{

    echo"<h4>Incorrect Username or Password</h4>
<h5><a href='signup.php'><br> click here to signup again</h5></a>";
}
?>