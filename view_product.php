<?php
include "connection.php";
include "login_header.php";
?>
<!DOCTYPE html>
<html>

<head>

    <link href="css/bootstrap.css" rel="stylesheet">

</head>


<body id="clr">
<div class="container">
    <div class="text-center">
        <h3>VIEW PRODUCT</h3>
    </div>

<br><br>

    <?php


    $s="select * from products";

    $result=mysqli_query($conn,$s);

    $ans="<table class='table table-bordered'";
    $ans=$ans."<tr>";
    $ans=$ans."<td>Product Id</td>";
    $ans=$ans."<td>Product Name</td>";
    $ans=$ans."<td>Selling Price</td>";
    $ans=$ans."<td>Taxslab</td>";
    $ans=$ans."<td>MRP</td>";
    $ans=$ans."<td>Stock</td>";
    $ans=$ans."<td>Photo</td>";
    $ans=$ans."<td>Description</td>";
    $ans=$ans."<td>Supplier Id</td>";
    $ans=$ans."<td>Edit</td>";
    $ans=$ans."<td>delete</td>";
    $ans=$ans."</tr>";
    $i=1;

    while($row=mysqli_fetch_array($result))

    {

        $ans=$ans."<tr>";
        $ans=$ans."<td>".$row[0]."</td>";
        $ans=$ans."<td>".$row[1]."</td>";
        $ans=$ans."<td>".$row[2]."</td>";
        $ans=$ans."<td>".$row[3]."</td>";
        $ans=$ans."<td>".$row[4]."</td>";
        $ans=$ans."<td>".$row[5]."</td>";
        $ans=$ans."<td><img height='100px'width='100px' src='".$row[6]."'</td>";
        $ans=$ans."<td>".$row[7]."</td>";
        $ans=$ans."<td>".$row[8]."</td>";
        $ans=$ans.'<td><a href="edit_product.php?pid='.$row[0].'"><img style="width:45px;height:45px" src="edit.png"> </a></td>';
        $ans=$ans.'<td><a href="delete_product.php?id='.$row[0].'"><img style="width:45px;height:45px" src="delete.png"> </a></td>';
        $ans=$ans."</tr>";
        $i=$i+1;
    }
    $ans=$ans."</table>";

    echo $ans;

    ?>


</div>
<br><br><br><br><br>
<?php
include "footer.php";
?>
</body>
</html>