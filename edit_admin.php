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
    $conn=mysqli_connect("127.0.0.1","root",null,"gst");
    $ans="select * from admins WHERE email='".$_GET["email"]."'";
    $result=mysqli_query($conn,$ans);
    $row=mysqli_fetch_array($result);
    ?>
    <form action="save_admin.php" method="POST">

<h3>EDIT THE DETAILS</h3>

            <form action="save_admin.php"  method="post">

                <div class="form-group">
                    <label>Enter Email Address</label>
                    <input type="text" value="<?php echo $row[0] ?>" readonly data-rule-required="true" data-msg-required="Email Cannot be blank"
                           data-rule-email="true" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input data-rule-required="true" value="<?php echo $row[2] ?>" data-msg-required="Mobile Number cannot be blank" data-rule-number="true"
                           data-msg-number="Mobile Number can only contain numerics" type="text" class="form-control" name="mobile">
                </div>


                <div class="form-group">
                    <label>Enter Type</label>
                    <select name="type" class="form-control">
                        <option <?php if ($row[3]=="Admin")  {  ?>selected<?php  } ?>>Admin</option>
                        <option <?php if ($row[3]=="Limited User")  {  ?>selected<?php  } ?>>Limited User</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit"class="btn btn-primary form-control"  >
                </div>
            </form>

        </div>
<br>
        <?php
        include 'footer.php';
        ?>
</body>
</html>
