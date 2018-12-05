<?php
include "public_header.php";
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

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



    <form action="insert_signup.php" id="myform1" method="post">
        <div class="form-group">
            <label>Enter Email Address</label>
            <input type="text" data-rule-required="true" data-msg-required=" email Cannot be blank"
                   class="form-control" name="cemail">
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input data-rule-required="true" data-msg-required=" password cannot be blank"
                type="password" class="form-control" name="pas">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input data-rule-required="true" data-msg-required=" password cannot be blank"
                   type="password" class="form-control" name="cpas">
        </div>
        <div class="form-group">
            <label>Enter Mobile Number</label>
            <input data-rule-required="true" data-msg-required="mobileno cannot be blank"
                   data-msg-number="value should be numeric " type="text" class="form-control" name="cmobile">
        </div>

        <div class="form-group">
            <label>Enter GST Number</label>
            <input data-rule-required="true" data-msg-required="number cannot be blank"
                   data-msg-number="value should be numeric " type="text" class="form-control" name="gstno">
        </div>

        <div class="form-group">
            <label>Enter Entity Name</label>
            <input type="text" data-rule-required="true" data-msg-required=" email Cannot be blank"
                   class="form-control" name="ename">
        </div>

            <div class="form-group">
                <label>Gender</label>
                <input type="radio"   value="Male" name="grp1">Male
                <input type="radio" value="Female" name="grp1">Female
            </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Signup">
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
</div>
<?php
include "footer.php";
?>
</body>
</html>