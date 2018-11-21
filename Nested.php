<?php
include "validateLogin.php";
?>
<html>
    <head>
        <?php
        include "mainHeader.php";
        ?>
    </head>
<body>
    <h1>Books having price greater than average book price</h1>
    <form action="Nested.php" method= "post"> 
        <button type='submit' name='search'>Search</button>
    </form>
    <?php
    include "connection.php";
    if(isset($_POST['search'])){
    //construct the query
    $query = "SELECT BName, BEdition, BPrice FROM `book price` WHERE BPrice > (SELECT AVG(BPrice) FROM `book price`) GROUP BY BName, BEdition";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "<table align=\"center\" border= \"1\">";
        echo "<tr>
        <th>BName</th>
        <th>BEdition</th>
        <th>BPrice</th>
        </tr>
        <tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["BName"]. "</td><td>" . $row["BEdition"]. "</td><td>" . $row["BPrice"]. "</td></tr>";
    }
        echo "</table>";
    }else {
    echo "0 results";
    }
        $count = "SELECT AVG(BPrice) AS Average FROM `book price`";
        $result2 = $conn->query($count);
        $row2 = $result2->fetch_assoc();
        echo '<h3> Average Book Price: &nbsp'. $row2["Average"]. "</h3>";
}
?>
    <footer style="padding-top:50px">
        <section class="copyright-w3-agileits">
            <?php
            include "footer.php";
            ?>
        </section>
    </footer>
    </body>
</html>  