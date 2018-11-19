<?php
    
    include "connection.php";
    $user = $_SESSION["UEmail"];
    $UIDquery = "SELECT UID FROM `user login` WHERE UEmail = '".$user."'";
    $UIDget = mysqli_query($conn,$UIDquery);
    $UIDrow = $UIDget->fetch_assoc();

    $select = "SELECT bn.BID, bn.BName, bp.BEdition, bp.BPrice FROM `book name` bn, `book price` bp, `book key` bk, `buys` b WHERE 
        bn.BName=bp.BName AND 
        bp.BEdition = bk.BEdition AND 
        bp.BName = bn.BName AND 
        bn.BID = bk.BID AND 
        b.BID = bn.BID AND 
        b.UID =".$UIDrow["UID"];
    $result = $conn->query($select);

    if ($result){
        while($row = $result->fetch_assoc()) {
            echo "<br>";
            echo "id: " . $row["BID"]. " - Name: " . $row["BName"]. " " . $row["BPrice"]. "<br>";
        }
<<<<<<< HEAD
=======

>>>>>>> a4b4daaf1aa971824697fdbed7f68b4cf2b712f6
    } else {
        echo "0 results";
    }
    
    $count= "SELECT COUNT(*) FROM `book name` bn, `book price` bp, `buys` b  WHERE bn.BName=bp.BName AND b.UID =".$UIDrow["UID"]." AND b.BID = bn.BID";
        $result2 = $conn->query($count);
        $row2 = $result2->fetch_assoc()
       echo row2[count(*)];
?>
