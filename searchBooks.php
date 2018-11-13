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
        <div class="container">
            <?php
            include "connection.php";
            include "printTable.php";
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