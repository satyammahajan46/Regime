<?php

include "connection.php";
$admin_email = $_REQUEST["email"];
$password = $_REQUEST["pass"];
$confirm_password = $_REQUEST["cpass"];
$mobile_number = $_REQUEST["mobile"];
$select_type = $_REQUEST["sel1"];


$s="select * from admins";

$result=mysqli_query($conn,$s);

$flag=0;

while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST["email"])
    {
        $flag=1;
        break;
    }
}

if($flag==1)
{
    echo '<h3 class="text-danger">Duplicate Email Address</h3>';
    header("location: add_admin.php? q=1");
}
elseif ($password!=$confirm_password)
{
    header("location: add_admin.php? q=2");
}
 else {
        $s1 = "insert into admins values('" . $_POST["email"] . "','" . $_POST["pass"] . "','" . $_POST["mobile"] .
            "','" . $_POST["sel1"] . "',null)";
        mysqli_query($conn, $s1);

     header("location: add_admin.php? q=3");


}
