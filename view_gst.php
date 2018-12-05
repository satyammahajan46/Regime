<?php
include "connection.php";
include "admin_header.php";
?>
<!DOCTYPE html>
<html>

<head>

    <link href="css/bootstrap.css" rel="stylesheet">

</head>


<body id="clr">
<div class="container">
    <div class="text-center">
        <h3>VIEW GST        </h3>
    </div>



    <?php


    $s="select * from taxslab";

    $result=mysqli_query($conn,$s);

    $ans="<table class='table table-bordered'>";
    $ans=$ans."<tr>";
    $ans=$ans."<td>TSID</td>";
    $ans=$ans."<td>Product Name</td>";
    $ans=$ans."<td>CGST</td>";
    $ans=$ans."<td>SGST</td>";
    $ans=$ans."<td>Code</td>";
    $ans=$ans."<td>TotalGST</td>";
    $ans=$ans."<td>Edit</td>";
    $ans=$ans."<td>delete</td>";
    $ans=$ans."</tr>";
    $i=1;

    while($row=mysqli_fetch_array($result))

    {

        $ans=$ans."<tr>";
        $ans=$ans."<td>".$row[0]."</td>";
        $ans=$ans."<td>".$row[1]."</td>";
        $ans=$ans."<td>".$row[2]."%</td>";
        $ans=$ans."<td>".$row[3]."%</td>";
        $ans=$ans."<td>".$row[4]."</td>";
        $ans=$ans."<td>".$row[5]."%</td>";
        $ans=$ans.'<td><a href="edit_gst.php?tsid='.$row[0].'"><img style="width:45px;height:45px" src="edit.png"> </a></td>';
        $ans=$ans.'<td><a href="delete_gst.php?tsid='.$row[0].'"><img style="width:45px;height:45px" src="delete.png"> </a></td>';
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