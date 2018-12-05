<?php
ob_start();
?>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#myform").validate();

        })
    </script>
</head>
<body id="clr">
<?php
include "login_header.php";
?>
<div class="container">
    <br>
    <form id="myform" action="insert_gstr2.php" method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="col-sm-7">

                <div class="form-group">

                    Invoice No
                    <input type="text" name="invoice_no" data-rule-required="true" data-msg-required="Please enter  Product name"
                           class="form-control">
                </div>
                <div class="form-group">
                    Date
                    <input type="date" name="date"  data-rule-required="true" data-msg-required="Please enter Description"
                           class="form-control">
                </div>
                <div class="form-group">
                    Supplier Name
                    <?php
                    include "connection.php";
                    $w="select * from suppliers";
                    $res=mysqli_query($conn,$w);
                    $sel1='<select name="supplier"  class="form-control">';

                    while($row=mysqli_fetch_array($res)) {

                        $sel1 = $sel1 . "<option value='".$row[0]."'>" . $row[1] . "</option>";
                    }

                    $sel1=$sel1." </select>";
                    echo $sel1;
                    ?>


                </div>
                <div class="form-group">
                    Invoice Value
                    <input type="text" name="invoice_value"   data-rule-required="true" data-msg-required="Please enter Your Stock"
                           class="form-control">
                </div>

                <div class="form-group">
                    Tax Value
                    <input type="text" name="tax_value"  data-rule-required="true" data-msg-required="Please Upload Image"
                           class="form-control">
                </div>
                <div class="form-group">
                    State Tax
                    <input type="text" name="state_tax" id="state_tax" data-rule-required="true" data-msg-required="Please enter Selling Price" data-rule-number="true" data-msg-number="Mobile Number must be in digits"
                           class="form-control">
                </div>
                <div class="form-group">
                    Central Tax
                    <input type="text" name="central_tax" id="central_tax" data-rule-required="true" data-msg-required="Please enter Selling Price" data-rule-number="true" data-msg-number="Mobile Number must be in digits"
                           class="form-control">
                </div>

                <div class="form-group">
                    ITC Amount
                    <input type="text" name="itc_amount" id="itc_amount"  class="form-control">
                </div>

                <div class="form-group">
                    State
                    <input type="text" name="state" id="state"  class="form-control">
                </div>
                <div class="form-group">
                    Central
                    <input type="text" name="Central" id="Central"  class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="Submit" class="form-control btn btn-success">
                </div>

    </form>
</div>
<div class="col-sm-5" >
    <?php
    if(isset($_GET["msg"]))
    {
        echo '<h3 class="text-center text-success">'.$_GET["msg"].'</h3>';
    }
    ?>
</div>
<div>
</div>
</body>
</html>