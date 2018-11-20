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

            <?php

            $query = "SELECT BName FROM `book name`";
            $result = mysqli_query($conn,$query);
            if ($result->num_rows > 0) {
                // output data of each row
                echo '<h1 class="center-block">Books</h1>';

                echo '<table class="table table-bordered table hover" >';
                echo '<tr><th>Book Name</th></tr>';
                while($row = $result->fetch_assoc()) {  
                    echo '<tr><td>'.$row["BName"]. ' </td></tr>';
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

