<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php

    include "connection.php";

//    echo $_GET["tsid"];
    $ans = "select * from suppliers WHERE supplier_id='" . $_GET["tsid"] . "'";
    $result = mysqli_query($conn, $ans);
    $row = mysqli_fetch_array($result);
    ?>
    <form action="save_supplier.php" method="POST">

        <div class="container">

            <?php
            include "login_header.php";
            ?>
            <form action="save_supplier.php" id="myform1" method="post">
                <div class="form-group">
                    <input type="hidden" name="tsid" value="<?php echo $row[0]; ?>">
                </div>
                <div class="form-group">
                    <label>Supplier Name</label>
                    <input type="text" data-rule-required="true" data-msg-required="name Cannot be blank"
                           class="form-control" name="sname" value="<?php echo $row[1]; ?>">
                </div>
                <div class="form-group">
                    <label>GST Number</label>
                    <input data-rule-required="true" data-msg-required=" GST number cannot be blank"
                           data-msg-number="value should be numeric " type="text" class="form-control" name="sgst"
                           value="<?php echo $row[2]; ?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input data-rule-required="true" data-msg-required="Address cannot be blank"
                           data-msg-number="value should be numeric " type="text" class="form-control" name="sadd"
                           value="<?php echo $row[3]; ?>">
                </div>
                <div class="form-group">
                    <label>PAN Number</label>
                    <input data-rule-required="true" data-msg-required="PAN Number cannot be blank" type="text"
                           class="form-control" name="pno" value="<?php echo $row[4]; ?>">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input data-rule-required="true" data-msg-required="Mobile Number cannot be blank" type="text"
                           class="form-control" name="smobile" value="<?php echo $row[5]; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input data-rule-required="true" data-msg-required="Email cannot be blank" type="text"
                           class="form-control" name="semail" value="<?php echo $row[6]; ?>">
                </div>
                <div class="form-group">
                    <input type="submit"class="btn btn-primary form-control"  >
                </div>
            </form>

        </div>
</body>
</html>
<?php
include 'footer.php';
?>