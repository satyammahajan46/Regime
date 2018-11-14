<?php
    
    include "connection.php";
    $user = $_SESSION["UEmail"];
    $UIDquery = "SELECT UID FROM `user login` WHERE UEmail = '".$user."'";
    $UIDget = mysqli_query($conn,$UIDquery);
    $UIDrow = $UIDget->fetch_assoc();

    $select = "SELECT bn.BID, bn.BName, bp.BEdition, bp.BPrice FROM `book name` bn, `book price` bp, `buys` b  WHERE bn.BName=bp.BName AND b.UID =".$UIDrow["UID"]." AND b.BID = bn.BID";
    $result = $conn->query($select);

    if ($result){
        while($row = $result->fetch_assoc()) {
            echo "<br>";
            echo "id: " . $row["BID"]. " - Name: " . $row["BName"]. " " . $row["BPrice"]. "<br>";
        }
    } else {
        echo "0 results";
    }
?>
