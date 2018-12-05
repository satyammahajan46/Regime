<?php
    include "admin_header.php";

include 'connection.php';

$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$new_pass=$_REQUEST['new_pass'];
$cpass=$_REQUEST['cpass'];

$s="select * from admins";
$result=mysqli_query($conn,$s);
$flag=0;
while ($row=mysqli_fetch_array($result)){
    if($row[0]==$email && $row[1]==$pass)
    {
        $flag=1;
        break;
    }
}
if($flag!=1)
{
    header("Location:change_admin.php?er=1");
}
elseif ($new_pass!=$cpass)
{
    header("Location:change_admin.php?er=2");
}
else{
    $update="update admins set password='".$new_pass."' where email='".$email."'";
    mysqli_query($conn,$update);
    header("Location:change_admin.php?er=3");
}
