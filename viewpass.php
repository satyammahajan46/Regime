<?php
include "validateLogin.php";
?>
<html>
    <head>
        <title>View User Details</title>
        <?php
        include "mainHeader.php";
        ?>
        <title>Welcome</title>
    </head>
    <body>
        <div>
            <?php
            include "connection.php";
            ?>
            <form action="viewpass.php" method="post">;
                <div class="container" style="padding-bottom:10;padding-top:10px;">
                    <input type="checkbox" name="details[]" value="id"><label>View User ID &nbsp</label>
                    <input type="checkbox" name="details[]" value="password"><label>View Password &nbsp</label>
                    <input type="submit" name="submit" value="Submit"/>
                </div>
            </form>
            <?php
            if(isset($_POST['submit'])){
                if(!empty($_POST['details'])){
                    $list = $_POST['details'];
                    $email = $_SESSION["UEmail"];
                    $details = "SELECT UID, UPassword FROM `user login` WHERE UEmail ='".$email."'";
                    $result = $conn->query($details);
                    $row = $result->fetch_assoc();
                    if(in_array("id", $list)){
                        echo '<h3 class="center-block">Your User ID is:&nbsp'. $row["UID"]."</h3>" ;
                    }
                    if(in_array("password", $list)){
                        echo '<h3 class="center-block">Your Password is:&nbsp'. $row["UPassword"]."</h3>" ;
                    }
                }
            }
            ?>
        </div>

        <footer>
            <section class="copyright-w3-agileits">
                <?php
                include "footer.php";
                ?>
            </section>
        </footer>
    </body>
</html>




