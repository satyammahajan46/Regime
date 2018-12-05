
<?php
ob_start();
include 'login_header.php';


?>
<script>
    function display() {
        var print_button=document.getElementById("print");
        print_button.style.visibility="hidden";
        window.print();
        print_button.style.visibility="visible";

    }
</script>
<table class="table table-responsive table-bordered">
    <form action="" method="post">
    <tr>
        <th colspan="13"><h2 class="text-center">Form GST R-1</h2></th>
    </tr>
    <tr>
        <td colspan="13"><h3>Details of Outward Supplies</h3></td>
    </tr>
    <tr>
        <th>1</th>
        <td colspan="2">GSTIN</td>
        <td colspan="10"><?php echo $user_sql_row[4] ?></td>
    </tr>
    <tr><th>2</th>
    <th colspan="2">Name of the Taxable Person</th>
        <td colspan="10"><?php echo $user_sql_row[3] ?></td>
    </tr>
    <tr>
        <th>3</th>
        <td colspan="2">Aggregate Turnover of the Taxable Person in the Previous FY</td>
        <td colspan="10"><input type="text" required class="form-control/" name="turnover"></td>
    </tr>
    <tr>
        <th>4</th>
        <th colspan="2">Period:</th>

        <td colspan="10">FROM<input type="date" id="from"  name="from">TO<input type="date"  id="to" name="to"><input type="submit"
                                                                                                     value="go"> </td>
    </tr>
    <tr>
        <th>5</th>
        <th colspan="12"><h3>Taxable Outward Supplies to a Registered Person</h3></th>
    </tr>
    </form>
    <tr>

        <th>GSTIN/ UIN</th>
        <th colspan="6">Invoice</th>
        <th colspan="2">IGST</th>
        <th colspan="2">CGST</th>
        <th colspan="2">SGST</th>

    </tr>
    <tr>
        <th></th>
        <th>No</th>
        <th>Date</th>
        <th>Value</th>
        <th>Goods/Services</th>
        <th>HSN/SAC</th>
        <th>Taxable Value</th>
        <th>Rate</th>
        <th>Amount</th>
        <th>Rate</th>
        <th>Amount</th>
        <th>Rate</th>
        <th>Amount</th>

    </tr>
    <?php
    if(isset($_REQUEST['from'])and isset($_REQUEST['to'])) {
        $i = 0;
        $from=$_REQUEST['from'];
        $to=$_REQUEST['to'];
        $bill = "select * from bill where email='" . $username . "' and bill_date between '".$from."' and '".$to."'";
        $bill_result = mysqli_query($conn, $bill);
        while ($bill_row = mysqli_fetch_array($bill_result)) {

            $tax_info = "SELECT * FROM `products` LEFT JOIN `bill_details` ON `bill_details`.`product_id`=`products`.`id`
 RIGHT JOIN `taxslab` ON `products`.`taxslab`=`taxslab`.`tsid` WHERE `bill_details`.`bill_id`='" . $bill_row[0] . "' Limit 0,1";
            $tax_info_result = mysqli_query($conn, $tax_info);
            $tax_info_row = mysqli_fetch_array($tax_info_result);

            $count_bill = "SELECT COUNT(`id`) as total FROM `bill_details` WHERE `bill_id`=" . $bill_row[0];
            $count_bill_result = mysqli_query($conn, $count_bill);
            $count_bill_row = mysqli_fetch_array($count_bill_result);
            ?>
            <tr>
                <td <?php if ($count_bill_row['total'] > 1) { ?> rowspan="<?php echo $count_bill_row['total'] ?>" <?php } ?>></td>
                <td <?php if ($count_bill_row['total'] > 1) { ?> rowspan="<?php echo $count_bill_row['total'] ?>" <?php } ?>>
                    <?php echo $bill_row[0] ?>
                </td>
                <td <?php if ($count_bill_row['total'] > 1) { ?> rowspan="<?php echo $count_bill_row['total'] ?>" <?php } ?>>
                    <?php echo $bill_row['bill_date'] ?>
                </td>
                <td <?php if ($count_bill_row['total'] > 1) { ?> rowspan="<?php echo $count_bill_row['total'] ?>" <?php } ?>>
                    <?php echo $bill_row['total'] ?>
                </td>
                <td <?php if ($count_bill_row['total'] > 1) { ?> rowspan="<?php echo $count_bill_row['total'] ?>" <?php } ?>>
                    Goods
                </td>
                <td>
                    <?php echo $tax_info_row['code']; ?>
                </td>
                <td>
                    <?php echo (($tax_info_row['total_gst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty']?>
                </td>
                <td><?php echo $tax_info_row['total_gst'] ?></td>
                <td><?php echo (($tax_info_row['total_gst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty'] ?></td>
                <td><?php echo $tax_info_row['cgst'] ?></td>
                <td><?php echo (($tax_info_row['cgst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty'] ?></td>
                <td><?php echo $tax_info_row['sgst'] ?></td>
                <td><?php echo (($tax_info_row['sgst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty']?></td>

            </tr>
            <?php
            $ar = array();
            $num = 1;
            //echo $count_bill_row['total'];
            if ($count_bill_row['total'] > 1) {
                $tax = "SELECT * FROM `products` LEFT JOIN `bill_details` ON `bill_details`.`product_id`=`products`.`id`
 RIGHT JOIN `taxslab` ON `products`.`taxslab`=`taxslab`.`tsid` WHERE `bill_details`.`bill_id`=" . $bill_row[0];
//echo $tax;
                $tax_result = mysqli_query($conn, $tax);
                //echo mysqli_num_rows($tax_result);
                while ($tax_row = mysqli_fetch_array($tax_result)) {
                    $ar[$num] = (array)$tax_row;
                    $num++;
                }
                ?>
                <?php
                for ($k = 1; $k < mysqli_num_rows($tax_result); $k++) {
                    ?>
                    <tr>
                        <td><?php echo $ar[$k]['code'] ?></td>
                        <td>
                            <?php echo (($tax_info_row['total_gst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty'] ?>
                        </td>
                        <td><?php echo $tax_info_row['total_gst']; ?></td>
                        <td><?php echo (($tax_info_row['total_gst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty'] ?></td>
                        <td><?php echo $tax_info_row['cgst'] ?></td>
                        <td><?php echo (($tax_info_row['cgst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty'] ?></td>
                        <td><?php echo $tax_info_row['sgst'] ?></td>
                        <td><?php echo (($tax_info_row['sgst'] * $tax_info_row['price']) / 100) * $tax_info_row['qty']?></td>
<td></td>
                    </tr>
                    <?php
                }
                ?>
                <?php
            }
        }
    }
    ?>
</table>
<div >
    <input id="print" type="button"class="btn-primary" value="print" onclick="display()">
</div>
<?php
include "footer.php";
?>
