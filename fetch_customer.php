<?php
include 'connection.php';
$cust_id=$_REQUEST['q'];
$s="select * from customers where id=".$cust_id;
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<div class="form-group">
    <input type="hidden" name="cust_id"  readonly value="<?php echo $row[0] ?>"data-rule-required="true"
           data-msg-required="Please enter your name"
           class="form-control">
</div>

<div class="form-group">

    Enter Full Name
    <input type="text" name="fullname"  readonly value="<?php echo $row[1] ?>"data-rule-required="true"
           data-msg-required="Please enter your name"
           class="form-control">
</div>
<div class="form-group">
    Enter Phone
    <input type="text" readonly value="<?php echo $row[2] ?>" name="phone" id="pass" data-rule-required="true"
           data-msg-required="Please enter your mobile number"  data-rule-number="true"
           data-msg-number="Mobile number must be in digits" class="form-control">
</div>
<div class="form-group">
    Enter Email
    <input type="text" name="email"  readonly value="<?php echo $row[3] ?>"  data-rule-email="true"
           data-msg-required="Email should be in correct format" data-rule-required="true" data-msg-required="Please enter Required Email"
           class="form-control">
</div>
<div class="form-group">
    Enter GST No.
    <input type="number"  readonly value="<?php echo $row[4] ?>"name="gstno" class="form-control">
</div>

