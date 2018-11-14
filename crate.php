<?php
    
    include "connection.php";
    $select = "SELECT bn.BID, bn.BName, bp.BEdition, bp.BPrice FROM `book name` bn, `book price` bp WHERE bn.BName=bp.BName";
    $result = $conn->query($select);

    if ($result){
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["BID"]. " - Name: " . $row["BName"]. " " . $row["BPrice"]. "<br>";
        }
    } else {
        echo "0 results";
    }
?>
