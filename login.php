<html>
    <head>
        <title>Login</title>
        <?php
        include 'header_files.php';
        ?>
    </head>

    <body>
        <div>
            <?php
            include "commonHeader.php";
            include "connection.php";
            ?>


            <div class="container">
                <h1 class="center-block">Provide following details</h1>
                <form action="checkLogin.php" id="loginForm" method="post">

                    <div class="form-group">
                        Enter Email Address
                        <input type="text" placeholder="Enter Email Address" data-rule-required="true" data-msg-required="Email Cannot be blank"
                               class="form-control" name="EmailID">
                    </div>
                    <div class="form-group">
                        Enter Password
                        <input placeholder="Enter Password" data-rule-required="true" data-msg-required="Password cannot be blank" type="password"
                               class="form-control" name="pass">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-success">
                    </div>

                </form>
                <?php
                if(isset($_GET["lg"]) && $_GET["lg"] == 0){
                    echo "Login credentails are required";
                }
                else if(isset($_GET["lg"]) && $_GET["lg"] == 1){
                    echo "Logout Successful";
                }
                if (isset($_GET["succ"])) {
                    echo $_GET["succ"];
                }
                ?>
            </div>
        </div>
        <footer><?php include "footer.php";?> </footer>
    </body>
</html>
