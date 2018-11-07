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


<div class="container">
<h1 class="center-block">Genre</h1>
<?php
    include "searchBooks.php";
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

