<?php
include "validateLogin.php";
?>
<html>

    <head>
        <title>Search Books</title>
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

            $query = "SELECT DISTINCT BGenre FROM `book genre`";
            $result = mysqli_query($conn,$query);

            if ($result->num_rows > 0) {
                // output data of each row
                echo '<h1 class="center-block">Genre</h1>';
                echo '<form action="search.php?s=1" method="post">';

                echo '<table><th>';
                while($row = $result->fetch_assoc()) {  
                    echo '<td><input type="checkbox" name="genre_list[]" value="'.$row["BGenre"]. '""><label>'.$row["BGenre"].'&nbsp</label> </td>';
                }
                echo '</th></table><br><input type="submit" name="submit" value="Submit"/></table> </form>';
            } else {
                echo "No Books Found";
            }



            if(isset($_GET["s"])){
                include "printTable.php";
            }
            if(isset($_GET["b"])){
                echo $_GET["b"];
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

