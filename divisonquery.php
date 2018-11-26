<?php
if(isset($_POST['submit'])){
    include "connection.php";
    $user = $_SESSION["UEmail"];
    $UIDquery = "SELECT UID FROM `user login` WHERE UEmail = '".$user."'";
    $result = mysqli_query($conn,$UIDquery);
    $row = $result->fetch_assoc();

    if($row){
        echo "User(s) that bought all the books: ";
        $divison="SELECT ui.UName FROM `user login` u, `user information` ui WHERE (NOT EXISTS (SELECT bn.BID from `book name` bn WHERE NOT EXISTS (SELECT b.uid from `buys` b where b.UID = u.UID AND bn.bid=b.bid))) AND ui.UEmail = u.UEmail";
        $result2 = mysqli_query($conn,$divison);
        $row2 = $result2->fetch_assoc();
        echo $row2["UName"];
    }
}

?>
