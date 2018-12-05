<?php
include "admin_header.php";
?>
<!DOCTYPE html>
<html>

<head>

    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            $("#myform1").validate()
        })
    </script>

</head>
<body id="clr">
<div class="container">
    <div class="text-center">
        <h3>CHANGE PASSWORD
        </h3>
    </div>


    <form action="change_pass_admin.php" id="myform1" method="post">
        <div class="form-group">
            <label> Enter Email Address</label>
            <input value="<?php echo $username ?>" readonly type="text" data-rule-required="true" data-msg-required="Email Cannot be blank"
                   data-rule-email="true" class="form-control" name="email">
        </div>


        <div class="form-group">
            <label>old Password</label>
            <input data-rule-required="true" data-msg-required="Password cannot be blank" type="password" class="form-control" name="pass">
        </div>
        <div class="form-group">
            <label>new Password</label>
            <input data-rule-required="true" data-msg-required="Password cannot be blank" type="password" class="form-control" name="new_pass">
        </div>


        <div class="form-group">
            <label>Confirm Password</label>
            <input data-rule-required="true" data-msg-required="confirm password cannot be blank"  type="password" class="form-control" name="cpass">
        </div>


        <div class="form-group">
            <input type="submit"class="btn btn-primary form-control"  >
        </div>
    </form>
    <?php
    if(isset($_REQUEST['er']))
    {
        $val=$_REQUEST['er'];
        if($val==1)
        {
            echo "<p class='text-danger'>Invalid Email or Password</p>";
        }
        elseif($val==2)
        {
            echo "<p class='text-danger'>Password and Confirm Password does not Match</p>";
        }
        else
        {
            echo "<p class='text-success'>Password changed Successfully</p>";
        }
    }
    ?>
</div>
</body>
</html>
<?php
include 'footer.php';
?>