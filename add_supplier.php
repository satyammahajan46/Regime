<?php
include "login_header.php";
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



    <form action="insert_supplier.php" id="myform1" method="post">
        <div class="text-center">
            <h3> ADD SUPPLIER</h3>
        </div>
        <div class="form-group">
            <input type="hidden" name="tsid" value="<?php echo $row[0]; ?>">
        </div>
        <div class="form-group">
            <label>Supplier Name</label>
            <input type="text" data-rule-required="true" data-msg-required="name Cannot be blank"
                   class="form-control" name="sname">
        </div>
        <div class="form-group">
            <label> GST Number</label>
            <input data-rule-required="true" data-msg-required=" gst number cannot be blank"
             type="text" class="form-control" name="sgst">
        </div>
        <div class="form-group">
            <label>PAN Number</label>
            <input data-rule-required="true" data-msg-required="pan number cannot be blank"
                   type="text" class="form-control" name="pno">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input data-rule-required="true" data-msg-required="mobile number cannot be blank" type="text"
                   class="form-control"
                   name="smobile">
        </div>

            <div class="form-group">
                <label>Email</label>
                <input data-rule-required="true" data-msg-required="email cannot be blank" type="text"
                       class="form-control"
                       name="semail">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="sadd" class="form-control" data-rule-required="true"
                          data-msg-required="address cannot be blank"></textarea>
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
