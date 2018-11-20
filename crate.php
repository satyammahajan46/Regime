<?php

    include "connection.php";
    $user = $_SESSION["UEmail"];
    $UIDquery = "SELECT UID FROM `user login` WHERE UEmail = '".$user."'";
    $UIDget = mysqli_query($conn,$UIDquery);
    $UIDrow = $UIDget->fetch_assoc();
    $typeQuery = "SELECT UType FROM `user information` WHERE UEmail = '".$user."'";
    $typeResult = mysqli_query($conn,$typeQuery);
    $type = $typeResult->fetch_assoc();

    if($type["UType"] == false){
        $select = "SELECT bn.BID, bn.BName, bp.BEdition, bp.BPrice * 0.8 AS BPrice FROM `book name` bn, `book price` bp, `book key` bk, `buys` b WHERE 
            bn.BName=bp.BName AND 
            bp.BEdition = bk.BEdition AND 
            bp.BName = bn.BName AND 
            bn.BID = bk.BID AND 
            b.BID = bn.BID AND 
            b.UID =".$UIDrow["UID"];
    }else{
        $select = "SELECT bn.BID, bn.BName, bp.BEdition, bp.BPrice FROM `book name` bn, `book price` bp, `book key` bk, `buys` b WHERE 
            bn.BName=bp.BName AND 
            bp.BEdition = bk.BEdition AND 
            bp.BName = bn.BName AND 
            bn.BID = bk.BID AND 
            b.BID = bn.BID AND 
            b.UID =".$UIDrow["UID"];
    }
    $result = $conn->query($select);

    if ($result){
        echo '<table class="table table-bordered table hover">';
           echo '<tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Price</th>
                </tr>';
        while($row = $result->fetch_assoc()) {
          
            echo "<tr><td> " . $row["BID"]. "</td><td>" . $row["BName"]. "</td><td>" . $row["BPrice"]. "</td>";
        }
        echo '</table>';



    } else {
        echo "0 results";
    }
    
    $count= "SELECT COUNT(*) AS C FROM `buys` WHERE UID ='".$UIDrow["UID"]."'";
    $result2 = $conn->query($count);
    $row2 = $result2->fetch_assoc();
    echo '<h3 class="center-block">Total Books Bought:&nbsp'. $row2["C"]."</h3>" ;
    echo '<br>';

    if($type["UType"] == false){
        $sum = "SELECT SUM(bp.BPrice * 0.8) AS S FROM `book name` bn, `book price` bp, `book key` bk, `buys` b WHERE 
                bn.BName=bp.BName AND 
                bp.BEdition = bk.BEdition AND 
                bp.BName = bn.BName AND 
                bn.BID = bk.BID AND 
                b.BID = bn.BID AND 
                b.UID =".$UIDrow["UID"];
    }else{
       $sum = "SELECT SUM(bp.BPrice) AS S FROM `book name` bn, `book price` bp, `book key` bk, `buys` b WHERE 
                bn.BName=bp.BName AND 
                bp.BEdition = bk.BEdition AND 
                bp.BName = bn.BName AND 
                bn.BID = bk.BID AND 
                b.BID = bn.BID AND 
                b.UID =".$UIDrow["UID"]; 
    }
    $result3 = $conn->query($sum);
    $row3 = $result3->fetch_assoc();
    echo '<h3 class="center-block">Total Price:&nbsp'. $row3["S"]."</h3>" ;
       
?>
