<?php
include "admin_header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body id="clr">
<div class="container">
    <?php

    include "connection.php";
    $ans = "select * from taxslab WHERE tsid='" . $_GET["tsid"] . "'";
    $result = mysqli_query($conn, $ans);
    $row = mysqli_fetch_array($result);
    ?>
    <form action="save_gst.php" method="POST">

        <h3 class="text-center">EDIT THE DETAILS</h3>


            <form action="insert_gst.php" id="myform1" method="post">
                <div class="form-group">
                    <input type="hidden" name="tsid" value="<?php echo $row[0]; ?>">
                </div>
                <div class="form-group">
                    <label>Enter Product name</label>
                    <input type="text" data-rule-required="true" data-msg-required="name Cannot be blank"
                           class="form-control" name="name" value="<?php echo $row[1]; ?>">
                </div>
                <div class="form-group">
                    <label>Enter CGST</label>
                    <input data-rule-required="true" data-msg-required=" cgst cannot be blank"
                           data-msg-number="value should be numeric " type="text" class="form-control" name="cgst"
                           value="<?php echo $row[2]; ?>">
                </div>
                <div class="form-group">
                    <label>Enter SGST</label>
                    <input data-rule-required="true" data-msg-required="sgst cannot be blank"
                           data-msg-number="value should be numeric " type="text" class="form-control" name="sgst"
                           value="<?php echo $row[3]; ?>">
                </div>
                <div class="form-group">
                    <label>Enter Code</label>
                    <input data-rule-required="true" data-msg-required="code cannot be blank" type="text"
                           class="form-control" name="code" value="<?php echo $row[4]; ?>">
                </div>
                <div class="form-group">
                    <input type="submit"class="btn btn-primary form-control"  >
                </div>
            </form>

        </div>
        <?php
        include 'footer.php';
        ?>
</body>
</html>
