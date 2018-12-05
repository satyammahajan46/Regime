<?php
include "admin_header.php";

?>
<!DOCTYPE html>
<html>

<head>

    <link href="css/bootstrap.css" rel="stylesheet">*
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
        <h3>ADD ADMIN</h3>
    </div>


    <form action="insert_admin.php" id="myform1" method="post">
        <div class="form-group">
           <label> Enter Email Address</label>
            <input type="text" data-rule-required="true" data-msg-required="Email Cannot be blank"
                   data-rule-email="true" class="form-control" name="email">
        </div>


        <div class="form-group">
           <label> Enter Password</label>
            <input data-rule-required="true" data-msg-required="Password cannot be blank" type="password" class="form-control" name="pass">
        </div>


        <div class="form-group">
            <label>Confirm Password</label>
            <input data-rule-required="true" data-msg-required="confirm password cannot be blank"  type="password" class="form-control" name="cpass">
        </div>


        <div class="form-group">
            <label>Enter Mobile Number</label>
            <input data-rule-required="true" data-msg-required="Mobile Number cannot be blank" data-rule-number="true" data-msg-number="Mobile Number can only contain numerics" type="text" class="form-control" name="mobile">
        </div>


        <div class="form-group">
            <label>Enter Type</label>
            <select name="sel1" class="form-control">
                <option>Admin</option>
                <option>Limited User</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit"class="btn btn-primary form-control"  >
        </div>
    </form>
    <?php
    if(isset($_GET["q"]))
    {
        $val=$_GET["q"];
    if($val==1)
    {
        echo "duplicate email";
    }
    elseif($val==2)
    {
        echo "password and confirm password does not match";
    }
    else{
        echo "admin added sucessfully";
    }
    }

    ?>
    <br><br>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
