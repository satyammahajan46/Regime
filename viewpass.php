<?php
    include "validateLogin.php";
    ?>
<html>
<head>
<title>Login</title>
<?php
    include "mainHeader.php";
    ?>
<title>Welcome</title>
</head>
<body>
<div>
<?php
    include "connection.php";
    ?>
<div class="container" style="padding-bottom:10;padding-top:10px;">

<?php
$email = $_SESSION["UEmail"];
$select = "Select UID AS p from `user login` where UEmail ='".$email."'";
$result = $conn->query($select);
$row = $result->fetch_assoc();
echo '<h3 class="center-block">Your User ID is :&nbsp'. $row["p"]."</h3>" ;
?>
</div>
</div>

<footer>
<section class="copyright-w3-agileits">
<?php
    include "footer.php";
    ?>
</section>
</footer>
</body>
</html>




