<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $("document").ready(function()
        {
            //alert("jquery ready");
            $("#form2").validate();

        })
    </script>
</head>

<body>
<?php
include "login_header.php";
?>
<div class="container">
    <h2>WELCOME TO LOGIN PAGE</h2><br>
    <form action="user_check.php" method="POST" id="form2">
        <div class=" form-group">
            <label>Enter Email</label>
            <input type="text" class="form-control"  name="cemail" data-rule required="true" data-email-required="true" maxlength="30">
        </div>
        <div class=" form-group">
            <label>Enter Password</label>
            <input type="password" name="pas" class="form-control" data-rule required="true" maxlength="30">
        </div>
        <input type="submit" value="Login" class="btn btn-success">
    </form>
    <?php
    if(isset($_REQUEST['q']))
    {
        $val=$_REQUEST['q'];
        if($val==1)
        {
            echo '<h3 class="text-danger" ></h3>';
        }
        else
        {
            echo '<h4 class="text-danger" >Invalid Email or Password</h4>';
        }
    }
    ?>


</div>
<br><br><br><br><br>
<?php
include "footer.php";
?>
</body>
</html>