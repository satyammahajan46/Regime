<?php

include 'connection.php';
    
$query = "SELECT * from `user information`";
$isStu = 0;

$result = mysqli_query($conn, $query);


if($_POST['type'] == "Student")
    $isStu = 1;

$matchCheck = 0;

while($row = mysqli_fetch_array($result))
{
    if($row[0]==$_POST['EmailID'])
    {
        $matchCheck = 1;
        break;
    }
}

if($_POST['Password']!=$_POST['CPassword'])
{
     header("location:signup.php?pass=0");

}
else if ($matchCheck == 1)
{
    header("location:signup.php?email=0");
}
else
{
    
    $insertQueryLogin = "INSERT INTO `user login`(UEmail, UPassword) VALUES ('".$_POST['EmailID']."', '".$_POST['Password']."')";
    
    $insertQuery = "INSERT INTO `user information` VALUES ('".$_POST['EmailID']."', '".$_POST['Password']."', '".$_POST['FullName']."', '".$_POST['Address']."', $isStu)";
    if ($conn->query($insertQueryLogin) === TRUE && $conn->query($insertQuery) === TRUE){
        header("location:signup.php?succ=1");
    }else{
        header("location:signup.php?succ=0");
    }
    
}

?>