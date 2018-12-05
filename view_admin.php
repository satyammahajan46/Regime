<?php
include "admin_header.php";
?>
<!DOCTYPE html>
<html>

<head>

    <link href="css/bootstrap.css" rel="stylesheet">

</head>


<body id="clr">
<div class="container">



    <?php


    if(isset($_REQUEST['q']))
    {
        $val=$_REQUEST['q'];
        if($val==1)
        {
            echo'<h3 class="text-danger">duplicate data</h3>';

        }

    }
    else
    {
        echo "<h5 class='text-success'>Admin Added Sucessfully</h5>";
    }

    include "connection.php";

    $s="select * from admins";

    $result=mysqli_query($conn,$s);

    $ans="<table class='table table-bordered'>";
    $ans=$ans."<tr>";
    $ans=$ans."<td>srno</td>";
    $ans=$ans."<td>email</td>";
    $ans=$ans."<td>mobile_no</td>";
    $ans=$ans."<td>type</td>";
    $ans=$ans."<td>edit</td>";
    $ans=$ans."<td>delete</td>";
    $ans=$ans."</tr>";
    $i=1;

    while($row=mysqli_fetch_array($result))

    {

        $ans=$ans."<tr>";
        $ans=$ans."<td>".$i."</td>";
        $ans=$ans."<td>".$row[0]."</td>";
        $ans=$ans."<td>".$row[2]."</td>";
        $ans=$ans."<td>".$row[3]."</td>";
        $ans=$ans.'<td><a href="edit_admin.php?email='.$row[0].'"><img style="width:45px;height:45px" src="edit.png"> </a></td>';
        $ans=$ans.'<td><a href="delete_admin.php?email='.$row[0].'"><img style="width:45px;height:45px" src="delete.png"> </a></td>';
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