<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body id="clr">
<?php
include "login_header.php";

include "connection.php";
$select = "select * from signup WHERE email='" . $_SESSION["username"] . "'";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="text-center">
        <h3>CHANGE A PASSWORD</h3>
    </div>
    <form method="post" action="user_change_password_check.php">
        <div class="form-group">
            <label>User Email</label>
            <input type="email" readonly name="user_email" class="form-control"
                   value="<?php echo $row[0]; ?>">
        </div>
        <div class="form-group">
            <label>Old Password</label>
            <input required type="password" name="old_password" class="form-control">
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input type="password" name="new_password" class="form-control">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary">
        </div>
    </form>

    <?php

    if (isset($_GET["pcs"])) {
        echo $_GET["pcs"];
    }
    if (isset($_GET["npnm"])) {
        echo $_GET["npnm"];
    }
    if (isset($_GET["opw"])) {
        echo $_GET["opw"];
    }

    ?>
</div>
<?php
include "footer.php";
?>
</body>
</html>