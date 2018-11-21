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


            <form action="bookList.php" method="post">;
            <div class="container" style="padding-bottom:10;padding-top:10px;">
                <input type="checkbox" name="details[]" value="name"><label>View Book Name &nbsp</label>
                <input type="checkbox" name="details[]" value="isbn"><label>View ISBN &nbsp</label>
                <input type="submit" name="submit" value="Submit"/>
            </div>
            </form>

            <?php
            if(isset($_POST['submit'])){
                if(!empty($_POST['details'])){;
                    $list = $_POST['details'];
                    $details = "SELECT BName, BISBN FROM `book name`";
                    $result = $conn->query($details);
                    $row = $result->fetch_assoc();
                    echo '<h1 class="center-block">Books</h1>';

                    echo '<table class="table table-bordered table hover" >';
                    echo '<tr>';
                if(in_array("name", $list)){
                    echo '<th>Book Name</th>';
                }
                if(in_array("isbn", $list)){
                    echo '<th>Book ISBN</th>';
                }
                echo '</tr>';
                 while($row = $result->fetch_assoc()) {  
                    echo '<tr>';
                    if(in_array("name", $list)){
                        echo '<td>'.$row["BName"]. '</td>'; 
                    }
                    if(in_array("isbn", $list)){
                        echo '<td>'.$row["BISBN"]. '</td>'; 
                    }
                    echo '</tr>';
                }
                echo "</table>";
            }
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

