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
        <h3>ADD GST</h3>
    </div>



    <form action="insert_gst.php" id="myform1" method="post">
        <div class="form-group">
            <label> Enter Goods Names</label>
            <input type="text" data-rule-required="true" data-msg-required="name Cannot be blank"
                   class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Enter CGST</label>
            <input data-rule-required="true" data-msg-required=" cgst cannot be blank"
                   data-msg-number="value should be numeric " type="text" class="form-control" name="cgst">
        </div>
        <div class="form-group">
            <label>Enter SGST</label>
            <input data-rule-required="true" data-msg-required="sgst cannot be blank"
                   data-msg-number="value should be numeric " type="text" class="form-control" name="sgst">
        </div>
        <div class="form-group">
            <label> Enter HSN Code</label>
            <input data-rule-required="true" data-msg-required="code cannot be blank" type="text" class="form-control" id="code"
                   name="code">
        </div>
        <div class="form-group">
            <input type="submit"class="btn btn-primary form-control"  >
        </div>
    </form>

</div>
<?php
include "footer.php";
?>
</body>
</html>
