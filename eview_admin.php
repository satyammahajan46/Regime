<?php
include "admin_header.php";

include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>

    <link href="css/bootstrap.css" rel="stylesheet">

</head>


<body id="clr">
<div class="container">
    <h3>Enquiry</h3>
    <br><br>




    <?php


    $s="select * from contacts";

    $result=mysqli_query($conn,$s);
    $ans="<table class='table table-bordered'>";
    $ans=$ans."<tr>";
    $ans=$ans."<td>id</td>";
    $ans=$ans."<td>name</td>";
    $ans=$ans."<td>mobile_no</td>";
    $ans=$ans."<td>enquiry</td>";
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
        $ans=$ans.'<td><a href="edelete_admin.php?id='.$row[0].'"><img style="width:45px;height:45px" src="delete.png"> </a></td>';
        $ans=$ans."</tr>";
        $i=$i+1;
    }
    $ans=$ans."</table>";

    echo $ans;

    ?>


</div>

</body>
</html>
    <br><br><br><br><br><br>
<?php
include 'footer.php';
?>