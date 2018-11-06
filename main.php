<?php
include 'validateLogin.php';
?>
<html>
    <head>
        <title>Login</title>
        <?php
        include 'header_files.php';
        ?>
        <title>Welcome</title>
    </head>
    <body>
        <div>
            <?php
            include "mainHeader.php";
            include "connection.php";
            ?>
            
        </div>

        <h3 class="right-align">Welcome 
            <?php include 'getName.php'; ?>
        </h3>


        <footer>
            <section class="copyright-w3-agileits">
                <?php
                include "footer.php";
                ?>
            </section>
        </footer>
    </body>
</html>
