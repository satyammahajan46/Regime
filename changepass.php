<?php
    include "validateLogin.php";
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



<h3 class="right-align">You are logged in as
<?php include 'getName.php'; ?>
</h3>

<div class="container">
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
class="form-control" name="newpass">
</div>

<div class="form-group">
<input type="submit" value="Change Password" class="btn btn-success">
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

<footer>
<section class="copyright-w3-agileits">
<?php
    include "footer.php";
    ?>
</section>
</footer>
</body>
</html>

