<?php
include "connection.php";
session_start();
if(is_null($_SESSION["UEmail"])){
    header("location:login.php?lg=0");
}
?>