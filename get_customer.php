<?php
include 'connection.php';

$invoice_type=$_REQUEST['q'];
if($invoice_type=='RETAIL INVOICE')
{
    ?>
    <div class="form-group">

        Enter Full Name
        <input type="text" name="fullname" data-rule-required="true" data-msg-required="Please enter your name"
               class="form-control">
    </div>
    <div class="form-group">
        Enter Phone
        <input type="text" name="phone" id="pass" data-rule-required="true" data-msg-required="Please enter your mobile number"  data-rule-number="true"
               data-msg-number="Mobile number must be in digits" class="form-control">
    </div>
    <div class="form-group">
        Enter Email
        <input type="text" name="email"  data-rule-email="true" data-msg-required="Email should be in correct format" data-rule-required="true" data-msg-required="Please enter Required Email"
               class="form-control">
    </div>
    <div class="form-group">
        Enter GST No. (optional)
        <input type="number" name="gstno" class="form-control">
    </div>

    <?php

}
else
{   $cust="select * from customers";
    $cust_result=mysqli_query($conn,$cust);
    ?>
    <select class="form-control" id="cust" name="cust" onchange="fetchCustomer(this.value)">
        <option>--Choose--</option>
        <?php
        while ($cust_row = mysqli_fetch_array($cust_result)) {
            ?>
            <option value="<?php echo $cust_row[0] ?>"><?php echo $cust_row[1]; ?></option>
            <?php
        }
        ?>
    </select>
<?php
}