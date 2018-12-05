<?php


$user_email = $_REQUEST["user_email"];
$old_password = $_REQUEST["old_password"];
$new_password = $_REQUEST["new_password"];
$confirm_password = $_REQUEST["confirm_password"];

include "connection.php";

$flag = 0;

$select = "select * from signup WHERE email='" . $user_email . "'";
$result = mysqli_query($conn, $select);
while ($row = mysqli_fetch_array($result)) {
    if ($row[1] == $old_password) {
        $flag = 1;
        break;
    }
}
if ($flag == 1) {

    if ($new_password == $confirm_password) {
        $update = "update signup set password='" . $new_password . "' where email='" . $user_email . "'";
        mysqli_query($conn, $update);
        header("location:user_change_password.php?pcs=Password Changed Successfully");
    } else {
        header("location:user_change_password.php?npnm=New Password is Not Matched");
    }

} else {
    header("location:user_change_password.php?opw=Old Password is Wrong");
}