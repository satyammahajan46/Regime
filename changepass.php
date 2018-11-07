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
        <div>
            <?php
            include "connection.php";
            ?>
            <div class="container" style="padding-bottom:10;padding-top:10px;">
                <h1 class="center-block">Provide following details</h1>
                <form action="checkchangepass.php" id="loginForm" method="post">

                    <div class="form-group">
                        Enter Email Address
                        <input type="text" readonly data-rule-required="true" value="<?php echo $_SESSION["UEmail"];?>"
                               class="form-control" name="EmailID">
                    </div>

                    <div class="form-group">
                        Enter your current Password
                        <input placeholder="Enter you current Password" data-rule-required="true" data-msg-required="Password cannot be blank" type="password"
                               class="form-control" name="pass">
                    </div>

                    <div class="form-group">
                        Enter your new Password
                        <input placeholder="Enter you new Password" data-rule-required="true" data-msg-required="Password cannot be blank" type="password"
                               class="form-control" name="newpass">
                    </div>

                    <div class="form-group">
                        Confirm your Password
                        <input placeholder="Confirm your Password" data-rule-required="true" data-msg-required="Password cannot be blank" type="password"
                               class="form-control" name="cnewpass">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Change Password" class="btn btn-success">
                    </div>

                </form>
                <?php
                if(isset($_GET["succ"])){
                    if($_GET["succ"] == "pcus"){
                        echo "Error Occured, Try again!";
                    }
                    else if($_GET["succ"] == "pcs"){
                        echo "Password Changed Successful";
                    }
                    else if($_GET["succ"] == "wep") {
                        echo "Wrong current Password";
                    }
                    else if($_GET["succ"] == "pncn"){
                        echo "Password and confirm password should be same";
                    }
                }
                ?>
            </div>
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

