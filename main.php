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
            <section class="banner-w3ls">
                <div class="navbar-wrapper">
                    <div class="container">
                        <nav class="navbar navbar-inverse navbar-static-top">
                            <div id="navbar" class="navbar-collapse collapse menu--valentine">
                                <ul class="nav navbar-nav navbar-right cl-effect-5">

                                    <li><a href="test.php" class="page-scroll"><span data-hover="Books">books</span></a></li>
                                    <li><a href="test.php" class="page-scroll"><span data-hover="Order&nbsp;History">Order History</span></a></li>
                                    <li><a href="test.php" class="page-scroll"><span data-hover="Contact&nbsp;Us">Contact Us</span></a></li>
                                    <li><a href="logout.php" class="page-scroll"><span data-hover="Logout">Logout</span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <h3 class="right-align">Welcome</h3>
            </section>
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
