<?php
include "connection.php";
include "validateLogin.php";
if(isset($_POST['buy'])){
    $UEmail = $_SESSION["UEmail"];
    $BID = $_POST['buy'];
    $query = "INSERT INTO buys VALUES ((SELECT UID FROM `user login` WHERE UEmail = '".$UEmail."'),".$BID.")";
    mysqli_query($conn,$query);

    $query2 ="SELECT BName FROM `book name` WHERE BID =".$BID;
    $result = mysqli_query($conn,$query2);
    $string = $result->fetch_assoc();
    $bought = "Thank you for buying ".$string["BName"];
    header("location:search.php?b=".$bought);
}


?>