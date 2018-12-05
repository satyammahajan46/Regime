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
<?php
include "public_header.php";
?>
<div class="conatiner">
    <div class="text-center">
        <h3>CONTACT US</h3>
        <br>
    </div>
    <div class="row" >
        <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.895810139339!2d74.8721093147632!3d31.636702981331258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39196357d4fdd50f%3A0xbc63a447f674b0e9!2sVMM+Education!5e0!3m2!1sen!2sin!4v1498807034839" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <hr>
        </div>
        <div class="col-sm-6">

            <form action="c_insert.php" id="myform1" method="POST">
            <div class="form-group">
                <label>Enter name</label>
            <input type="text"  class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Enter Mobile Number</label>
            <input  type="text" class="form-control" name="mob">
        </div>
        <div class="form-group">
            <label>Enter enquiry</label>
            <input  type="text" class="form-control" name="enq">
        </div>

                <input type="submit"class="btn btn-primary form-control"  >



            </form>
        </div>
        </div>
</div>
</body>
</html>
<?php
include 'footer.php';
?>

