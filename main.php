<?php
include 'validateLogin.php';
?>
<html>
    <head>
        <title>Login</title>
        <?php
        include 'mainHeader.php';
        ?>
        <title>Welcome</title>
    </head>
    <body>
        <div style="padding-top:50px">
            <?php
            include "connection.php";
            ?>
        </div>
        
        <h3 class="text-center">Welcome 
            <?php include 'getName.php'; ?>
        </h3>


        <footer style="padding-top:50px">
            <section class="copyright-w3-agileits">
                <?php
                include "footer.php";
                ?>
            </section>
        </footer>
    </body>
</html>
