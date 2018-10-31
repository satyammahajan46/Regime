<?php
include "connection.php";

$email = $_SESSION["UEmail"];



$select = "select UName from `user information` where UEmail='$email'";

$result = mysqli_query($conn,$select);

$row=mysqli_fetch_array($result);

echo $row[0];
?>