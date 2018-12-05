<?php

session_start();
$_SESSION["username"]=null;
session_abort();
session_destroy();
header("locations:public_login.php")
?>