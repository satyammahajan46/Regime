<?php
include 'cart.php';
include 'connection.php';
session_start();
$product=$_REQUEST['product'];
$qty=$_REQUEST['qty'];
$s="SELECT * FROM `products` INNER JOIN `taxslab` on `taxslab`.`tsid`=`products`.`taxslab` WHERE `products`.`id`='".$product."'";
echo $s;
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$ar=array();
$ar1=array();
echo "Stock: ".$row['stock'];
if(isset($_SESSION['products']))
{
    $ar=$_SESSION['products'];
    print_r($ar);
    if($qty>$row['stock'])
    {
     header("Location:billing.php?er=Out of Stock available Stock is ".$row['stock']);
    }
    else
    {
        $flag=0;
        $qty_flag=0;
        for($i=0;$i<count($ar);$i++)
        {
            if($ar[$i]->id==$product)
            {
                echo 'id_match';
                $total_qty=$qty+$ar[$i]->qty;
                    echo "<br>".$total_qty."<br>".$ar[$i]->stock;
                if($ar[$i]->stock<$total_qty)
                {
                    echo 'qty';
                    $qty_flag=1;
                    break;
                }
                else {
                    $ar[$i]->qty = $qty + $ar[$i]->qty;
                    $flag = 1;
                    break;
                }
            }
        }
        echo 'jhgdhsf'.$flag.' '.$qty_flag;
        if($flag!=1 && $qty_flag==0)
        {
            $ar[count($ar)]=new cart($row[0], $row['product_name'], $row['photo'], $qty, $row['stock'],
                $row['selling_price'], $row['mrp'], $row['totalgst'],$row['cgst'],$row['sgst'],$row['code']);
            $_SESSION['products'] = $ar;
            print_r($_SESSION['products']);
            header("Location:billing.php");
        }
        elseif ($qty_flag==0 || $flag==1)
        {
          header("Location:billing.php");
        }
        elseif ($qty_flag==1)
        {
           header("Location:billing.php?er=Out of Stock available Stock is ".$row['stock']);
        }

    }
}
else
{
    if($qty>$row['stock'])
    {
     header("Location:billing.php?er=Out of Stock available Stock is ".$row['stock']);
    }
    else {
        $ar[0] = new cart($row[0], $row['product_name'], $row['photo'], $qty, $row['stock'], $row['selling_price'],
            $row['mrp'], $row['totalgst'],$row['cgst'],$row['sgst'],$row['code']);
        $_SESSION['products'] = $ar;
     header("Location:billing.php");
    }
}
?>