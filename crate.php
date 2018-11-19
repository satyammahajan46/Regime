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
    
    $count= "SELECT COUNT(*) AS C FROM `book name` bn, `book price` bp, `buys` b  WHERE bn.BName=bp.BName AND b.UID =".$UIDrow["UID"]." AND b.BID = bn.BID";
        $result2 = $conn->query($count);
        $row2 = $result2->fetch_assoc();
    echo '<h3 class="center-block">Total Books Bought:&nbsp'. $row2["C"]."</h3>" ;
       
?>
