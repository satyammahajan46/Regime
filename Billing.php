<body id="clr">
<?php
include 'cart.php';
include 'login_header.php';
include  "connection.php";
$product = "select * from products";
$product_result = mysqli_query($conn, $product);

?>
<br>
<script type="text/javascript">
    function addToCart() {
        var id = document.getElementById('product').value;
        var qty = document.getElementById('qty').value;
        window.location.href = "add_to_cart.php?product=" + id + "&qty=" + qty;
    }
</script>
<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
</head>

<div class="container">
    <div class="text-center">
        <h3>CREATE BILL</h3>
    </div>
    <br><br>
    <?php
    if (isset($_REQUEST['er'])) {
        echo "<span class='text-danger'>" . $_REQUEST['er'] . "</span>";
    }
    ?>
    <div class="row">
        <div class="col-sm-2"><STRONG>Choose Product</STRONG></div>
        <div class="col-sm-6"><select class="form-control" id="product" name="product">
                <option>--Choose--</option>
                <?php
                while ($product_row = mysqli_fetch_array($product_result)) {
                    ?>
                    <option value="<?php echo $product_row[0] ?>"><?php echo $product_row[1]; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="col-sm-1"><strong>Quantity</strong></div>
        <div class="col-sm-2"><input type="number" name="qty" id="qty" min="1" class="form-control">

        </div>
        <div class="col-sm-1"><input type="button" value="Go" class="btn btn-primary" onclick="addToCart()"></div>
    </div>
    <br><br>
    <form action="insert_bill.php" method="post">
        <div class="col-sm-9">
            <?php
            if(isset($_REQUEST['msg']))
            {
                echo $_REQUEST['msg'];
            }
            if (isset($_SESSION['products'])) {
                ?>
                <table border="1" class="table table-responsive">
                    <tr>
                        <th>Sr No</th>

                        <th>HSN Code</th>
                        <th>Product Name</th>
                        <th>Photo</th>
                        <th>Selling Price</th>
                        <th>CGST</th>
                        <th>SGST</th>
                        <th>Total GST</th>
                        <th>MRP</th>
                        <th>Quantity</th>
                        <th>Sub Total</th>
                    </tr>
                    <?php
                    $j = 0;
                    $ar = array();
                    $ar = $_SESSION['products'];
                    //            print_r($ar);
                    $total=0;
                    for ($i = 0; $i < count($ar); $i++) {
                        $total=$total+$ar[$i]->qty * $ar[$i]->mrp;
                        ?>
                        <tr>
                            <td><?php echo ++$j; ?></td>
                            <td><?php echo $ar[$i]->code; ?></td>
                            <td><?php echo $ar[$i]->product_name; ?></td>
                            <td><img src="<?php echo $ar[$i]->photo; ?>" height="50" width="50"></td>
                            <td><?php echo $ar[$i]->sp; ?></td>
                            <td><?php echo $ar[$i]->CGST; ?></td>
                            <td><?php echo $ar[$i]->SGST; ?></td>
                            <td><?php echo $ar[$i]->TotalGST; ?>%</td>
                            <td><?php echo $ar[$i]->mrp; ?></td>
                            <td><?php echo $ar[$i]->qty; ?></td>
                            <td><?php echo $ar[$i]->qty * $ar[$i]->mrp; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td colspan="10"><strong>Grand Total</strong></td>
                        <td><?php echo $total; ?><input type="hidden" name="total" value="<?php echo $total; ?>"></td>
                    </tr>
                </table>
                <?php
            }
            ?>
        </div>
        <div class="col-sm-3">

            <div class="form-group">
                <input type="radio" value="RETAIL INVOICE" name="invoice_type">Retail Invoice
                <input type="radio" value="GST INVOICE"  name="invoice_type">GST Invoice
            </div>
            <div id="customers">
            <div class="form-group">

                Enter Full Name
                <input type="text" name="fullname" data-rule-required="true" data-msg-required="Please enter your name"
                       class="form-control">
            </div>
            <div class="form-group">
                Enter Phone
                <input type="text" name="phone" id="pass" data-rule-required="true"
                       data-msg-required="Please enter your mobile number"  data-rule-number="true"
                       data-msg-number="Mobile number must be in digits" class="form-control">
            </div>
            <div class="form-group">
                Enter Email
                <input type="text" name="email"  data-rule-email="true"
                       data-msg-required="Email should be in correct format" data-rule-required="true" data-msg-required="Please enter Required Email"
                       class="form-control">
            </div>
            <div class="form-group">
                Enter GST No. (optional)
                <input type="number" name="gstno" class="form-control">
            </div>

        </div>
            <div id="cust_detail"></div>
        </div>
        <div class="text-right"><input type="submit" value="Pay" class="btn btn-primary"></div>
    </form>
</div>
<?php
include 'footer.php';
?>
</body>
