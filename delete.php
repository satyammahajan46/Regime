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
        <style>
      h3 {
          font-size:3em;
          font-weight:bold;
          }
        </style>
    </head>
    <body>
        <div>
            <?php
            include "connection.php";
            ?>
            <h3>For security, please renter your password</h3>
            <div class="container" style="padding-bottom:10;padding-top:10px;">
                <h1 class="center-block">Provide following details</h1>
                <form action="checkdeleteaccount.php" id="loginForm" method="post">

                    <div class="form-group">
                        Enter Email Address
                        <input type="text" readonly data-rule-required="true" value="<?php echo $_SESSION["UEmail"];?>"
                               class="form-control" name="EmailID">
                    </div>

                    <div class="form-group">
                        Enter your Password
                        <input placeholder="Enter you Password" data-rule-required="true" data-msg-required="Password cannot be blank" type="password"
                               class="form-control" name="pass">
                    </div>
                    <div class="form-group">
                        Why you want to delete your account? (OPTIONAL)
                        <input placeholder="Reason to delete your account" data-rule-required="false" type="text"
                            class="form-control">
                        </div>
                     <div class="form-group">
                        <input type="submit" value="Delete account" class="btn btn-success">
                    </div>

                </form> </div>
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
