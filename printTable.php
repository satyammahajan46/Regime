<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['genre_list'])){
        $num = 0;
        $string = "";
        foreach($_POST['genre_list'] as $selected){
            if (count($_POST['genre_list']) - 1 == $num ){
                $string .= " bg.BGenre = " ."'" .$selected."'";
            }else{
                $string .= " bg.BGenre = " . "'" .$selected ."' OR ";
                $num++;
            }
        }

        $UEmail = $_SESSION["UEmail"];
        $typeQuery = "SELECT UType FROM `user information` WHERE UEmail = '".$UEmail."'";
        $typeResult = mysqli_query($conn,$typeQuery);
        $type = $typeResult->fetch_assoc();

        if($type["UType"] == false){
            $query2 = "SELECT bn.BName, a.AName, bn.BID, bp.BPrice * 0.8 AS BPrice, bp.BEdition FROM `book name` bn, `book genre` bg, `book key` bk, `book price` bp, `authors` a, `writes` w WHERE 
            bn.BISBN = bg.BISBN AND 
            w.BID = bn.BID AND 
            a.AID = w.AID AND 
            bp.BEdition = bk.BEdition AND 
            bp.BName = bn.BName AND 
            bn.BID = bk.BID AND 
            (" . $string.")";   
        }else{
            $query2 = "SELECT bn.BName, a.AName, bn.BID, bp.BPrice, bp.BEdition FROM `book name` bn, `book genre` bg, `book key` bk, `book price` bp, `authors` a, `writes` w WHERE 
            bn.BISBN = bg.BISBN AND 
            w.BID = bn.BID AND 
            a.AID = w.AID AND 
            bp.BEdition = bk.BEdition AND 
            bp.BName = bn.BName AND 
            bn.BID = bk.BID AND 
            (" . $string.")";
        }

        
        $result2 = mysqli_query($conn,$query2);

        if ($result2->num_rows > 0) {
            // output data of each row
            echo '<h1 class="center-block">Books</h1>';
            echo '<form action="buy.php" method="post">';
            echo '<table class="table table-bordered table hover">';
            echo '<tr>
                <th>Book Name</th>
                <th>Edition</th>
                <th>Author</th>
                <th>Price</th>
                <th>Purchase</th>
                </tr>';
            while($row2 = $result2->fetch_assoc()) {  
                echo "<tr><th>". $row2["BName"]. "</th><th>".$row2["BEdition"]. "</th><th>". $row2["AName"]."</th><th>". $row2["BPrice"]."</th><th><button type='submit' name='buy' value='". $row2["BID"]."' >Buy</button></tr>";
            }
            echo "</table></form>";

        } else {
            echo "No Books Found ";
        }

    }

}


?>