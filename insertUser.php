<?php

include 'connection.php';
    
$query = "SELECT * from user";
$isStu = 0;



$result = mysqli_query($conn, $query);

$isStu = 0;
echo ".$isStu.";

if($_GET['type'] == "Student")
    $isStu = 1;

$matchCheck = 0;

while($row = mysqli_fetch_array($result))
{
    if($row[3]==$_GET['EmailID'])
    {
        $matchCheck = 1;
        break;
    }
}

if($_GET['password']!=$_GET['cPassword'])
{
     header("location:signup.php?pass=0");

}


if ($matchCheck == 1)
{
    header("location:signup.php?succ=0");
}
else
{
   $insertQuery = "INSERT INTO user (UName, UAddress, UEmail, UType, password) VALUES('".$_GET['FullName']."','".$_GET['Address']."','".$_GET['EmailID']."', '$isStu', '".$_GET['Password']."')";
mysqli_query($conn, $insertQuery);
   header("location:signup.php?succ=1");
}

?>