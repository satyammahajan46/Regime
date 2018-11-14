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
<h1 class="center-block">Order details</h1>
<?php
    include "crate.php";
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


