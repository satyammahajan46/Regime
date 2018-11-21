<?php
include "validateLogin.php";
?>
<html>

    <head>
        <title>View All Books</title>
        <?php
        include "mainHeader.php";
        ?>

    </head>
    <body>

        <?php
        include "connection.php";
        ?>

        <div class="container">
            <form action="bookList.php?d=1" id="bookForm" method="post">
                <h3 class="center-block">Do you need Book's ISBN as well</h3>      
                <input type="checkbox" name="ISBN" value="ISBN">
                <label>Book ISBN</label>
                <input type="submit" value="Submit" >
            </form>
        </div>

        <div class="container">

            <?php
            if(isset($_GET["d"])){
                $query = "SELECT BName, BISBN FROM `book name`";
            }
            else{
                $query = "SELECT BName FROM `book name`";
            }
            $result = mysqli_query($conn,$query);
            if ($result->num_rows > 0) {
                // output data of each row
                echo '<h1 class="center-block">Books</h1>';

                echo '<table class="table table-bordered table hover" >';
                echo '<tr><th>Book Name</th>';
                if (isset($_GET["d"])){
                    echo '<th>Book ISBN</th>';
                }
                echo '</tr>';
                while($row = $result->fetch_assoc()) {  
                    echo '<tr><td>'.$row["BName"]. '</td>'; 
                    if (isset($_GET["d"])){
                        echo '<td>'.$row["BISBN"].'</td>';
                    }
                    
                    echo '</tr>';
                }
                echo "</table>";
            }

            ?>


        </div>


        <footer style="padding-top:50px">
            <section class="copyright-w3-agileits">
                <?php
                include "footer.php";
                ?>
            </section>
        </footer>
    </body>
</html>

