
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
         <h3>VIEW SUPPLIER</h3>
     </div>
    <br><br><br>

    <?php


    $s="select * from suppliers";

    $result=mysqli_query($conn,$s);

    $ans="<table  class='table table-bordered' >";
    $ans=$ans."<tr>";
    $ans=$ans."<td>Supplier Id</td>";
    $ans=$ans."<td>Supplier Name</td>";
    $ans=$ans."<td>GST Number</td>";
    $ans=$ans."<td>Address</td>";
    $ans=$ans."<td>PAN Number</td>";
    $ans=$ans."<td>Mobile Number</td>";
    $ans=$ans."<td>Email</td>";
    $ans=$ans."<td>User Email</td>";
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
        $ans=$ans."<td>".$row[6]."</td>";
        $ans=$ans."<td>".$row[7]."</td>";
        $ans=$ans.'<td><a href="edit_supplier.php?tsid='.$row[0].'"><img style="width:45px;height:45px" src="edit.png"> </a></td>';
        $ans=$ans.'<td><a href="delete_supplier.php?tsid='.$row[0].'"><img style="width:45px;height:45px" src="delete.png"> </a></td>';
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