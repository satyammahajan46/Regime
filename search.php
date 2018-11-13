<?php
include "validateLogin.php";
?>
<html>
    <head>
        <title>Login</title>
        <?php
        include "mainHeader.php";
        ?>
        <title>Welcome</title>
    </head>
    <body>

        <?php
        include "connection.php";
        ?>

        <?php
        if(isset($_GET["s"])){
            include "printTable.php";

        }
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
                    echo '<td><input type="checkbox" name="genre_list[]" value="'.$row["BGenre"].'"><label> &nbsp'.$row["BGenre"].'</label> &nbsp </td>';

                }
                echo '</td></table><br><input type="submit" name="submit" value="Submit"/> </form>';
            } else {
                echo "No Books Found";
            }

            if(isset($_GET["s"])){
                echo '<h1 class="center-block">Books</h1>';
                echo $final;
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

