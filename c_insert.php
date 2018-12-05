<?php

include "connection.php";


$name=$_POST["name"];
$mob=$_POST["mob"];
$enq=$_POST["enq"];


    $s="insert into contacts VALUES(null,'".$name."','".$mob."','".$enq."')";
    mysqli_query($conn,$s);

    echo $s;
    header ("location: contact_us.php")
    ?>