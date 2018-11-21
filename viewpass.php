<?php
    include "validateLogin.php";
    ?>
<html>
<head>
<title>View User Details</title>
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
<form action="viewpass.php" method="post">;
	<div class="container" style="padding-bottom:10;padding-top:10px;">
		<input type="checkbox" name="details[]" value="id"><label>View User ID &nbsp</label>
		<input type="checkbox" name="details[]" value="password"><label>View Password &nbsp</label>
		<input type="submit" name="submit" value="Submit"/>
	</div>
</form>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['details'])){;
    $list = $_POST['details'];
	$email = $_SESSION["UEmail"];
		if(in_array("id", $list)){
			$UID = "SELECT UID FROM `user login` WHERE UEmail ='".$email."'";
			$result = $conn->query($UID);
			$row = $result->fetch_assoc();
			echo '<h3 class="center-block">Your User ID is:&nbsp'. $row["UID"]."</h3>" ;
		}
		if(in_array("password", $list)){
			$password = "SELECT UPassword FROM `user login` WHERE UEmail ='".$email."'";
			$result2 = $conn->query($password);
			$row2 = $result2->fetch_assoc();
			echo '<h3 class="center-block">Your Password is:&nbsp'. $row2["UPassword"]."</h3>" ;
		}
	}
}
?>
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




