<?php
ob_start();
include 'login_header.php';

?>

<table class="table table-responsive table-bordered">

    <tr>
        <th rowspan="2">GSTIN/ UIN of Supplier</th>
        <th colspan="3">Invoice Details</th>
        <th rowspan="2">Taxable Value</th>
        <th colspan="3">Amount of Tax</th>
        <th rowspan="2">Place of Supply </th>
        <th rowspan="2">ITC Amount</th>
        <th colspan="3">Amount of ITC Available</th>

    </tr>
    <tr>

        <th>No</th>
        <th>Date</th>
        <th>Value</th>
        <th>Integrated Tax</th>
        <th>Central Tax</th>
        <th>State Tax</th>
        <th>Integrated Tax</th>
        <th>Central Tax</th>
        <th>State Tax</th>
    </tr>
    <?php
      $s="SELECT * FROM `gstr_2` INNER JOIN `suppliers` ON `suppliers`.`supplier_id`=`gstr_2`.`supplier`";
      $result=mysqli_query($conn,$s);
      while ($row=mysqli_fetch_array($result))
      {
          ?>
          <td><?php echo $row['gst_no'] ?></td>
          <td><?php echo $row['invoice_no'] ?></td>
          <td><?php echo $row['date'] ?></td>
          <td><?php echo $row['invoice_value'] ?></td>
          <td><?php echo $row['tax_value'] ?></td>
          <td><?php echo $row['central_tax']+$row['state_tax'] ?></td>
          <td><?php echo $row['central_tax'] ?></td>
          <td><?php echo $row['state_tax'] ?></td>
          <td><?php echo $row['address'] ?></td>
          <td><?php echo $row['itc_amount'] ?></td>
          <td><?php echo $row['state']+$row['central'] ?></td>
          <td><?php echo $row['state'] ?></td>
          <td><?php echo $row['central'] ?></td>
    <?php
      }
    ?>
</table>