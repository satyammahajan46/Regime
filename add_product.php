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

<div class="text-center">
    <h3>ADD PRODUCT</h3>
</div>

    <form action="insert_product.php" id="myform1" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Supplier Name</label>
            <select class="form-control" name="snam">
                <option>--Choose--</option>
                <?php
                $s="select * from suppliers";
                $result=mysqli_query($conn,$s);
                while ($row=mysqli_fetch_array($result))
                {
                    ?>
                    <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                <?php
                }
                ?>
            </select>
            </div>
        <div class="form-group">
            <label> Product Name</label>
            <input data-rule-required="true" data-msg-required=" product name cannot be blank"
                   type="text" class="form-control" name="pnam">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input data-rule-required="true" data-msg-required="description cannot be blank"
                   type="text" class="form-control" name="des">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input data-rule-required="true" data-msg-required="stock cannot be blank" type="text"
                   class="form-control"
                   name="stk">
        </div>
            <div class="form-group">
                <label>Photo</label>
                <input  type="file" name="photo">
            </div>
            <div class="form-group">
                <label>Selling Price</label>
                <input name="sprice" id="selp" type="number" class="form-control" data-rule-required="true"
                          data-msg-required="selling price cannot be blank">
            </div>
            <div class="form-group">
                <label>Taxslab</label>
                <select  class="form-control" name="tax" onchange="showMRP(this.value)">
                    <option>--Choose--</option>
                    <?php
                    $tax="select * from taxslab";
                    $tax_result=mysqli_query($conn,$tax);
                //    $sel2='<select name="sel2" onchange="showMRP(this.value)" class="form-control">';
                    while ($tax_row=mysqli_fetch_array($tax_result))
                    {
                        ?>
                        <option value="<?php echo $tax_row[0] ?>"><?php echo $tax_row[1] ?></option>
                        <?php
                    }
                  //  echo $sel2;
                    ?>
                </select>
            </div>
        <div class="row">
            <div  class="col-sm-3">
                <label>Central Taxs</label>
                <input name="cgst" id="cgst" disabled type="text" class="form-control" data-rule-required="true"
                       data-msg-required="central taxs cannot be blank">

            </div>
            <div  class="col-sm-3">
            <label>State Taxs</label>
                <input name="sgst" disabled id="sgst" type="text" class="form-control" data-rule-required="true"
                       data-msg-required="state taxs cannot be blank">
            </div>
            <div class="col-sm-3">
                <label>Total Taxs</label>
                <input name="tgst" disabled type="text" id="tgst" name="tgst" class="form-control" data-rule-required="true"
                       data-msg-required="total taxs  cannot be blank">
            </div>
            <div class="col-sm-3">
                <label>HSN Code</label>
                <input name="hsn" readonly id="hsn" name="hsn" type="text" class="form-control" data-rule-required="true"
                       data-msg-required="field is required" <?php $row['code']; ?>>
            </div>
</div>

            <div class="form-group">
                <label>MRP</label>
                <input name="mrp" readonly  type="text" id="mrp" class="form-control" data-rule-required="true"
                       data-msg-required="mrp cannot be blank">
            </div>
            <div class="form-group">
                <input type="submit"class="btn btn-primary form-control"  >
            </div>
    </form>
    <?php
    if(isset($_GET["pa"]))
    {
        echo $_GET["pa"];
    }
    ?>

</div>
<?php
include 'footer.php';
?>
</body>
</html>
