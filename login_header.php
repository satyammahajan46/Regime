<style>
    #clr
    {
        background-color: lightgray;
    }
</style>
<?php
include  'header_files.php';
session_start();
if (is_null($_SESSION["username"])) {
    header("location:public_login.php");
}
else
{
    $username=$_SESSION["username"];
}
?>
<?php
include 'connection.php';
if(isset($_SESSION["username"]))
{
    $username=$_SESSION["username"];
    $user_sql="select * from signup WHERE email='".$username."'";
    $user_sql_result=mysqli_query($conn,$user_sql);
    $user_sql_row=mysqli_fetch_array($user_sql_result);
}
?>

<style>
    .logotext
    {
        font-family:"Calibri";
    }
</style>
<!-- banner -->
<div class="banner">
    <div class="header">
        <div class="container">
            <div class="header-left">
                <div class="w3layouts-logo">
                    <h1 class="logotext">
                        <a href="index.php">Regime</a>
                    </h1>
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="container">
                            <ul class="nav nav-pills navbar-right ">
                                <li><a href="public_home.php">User Home</a> </li>
                                <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Supplier<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="add_supplier.php">Add Supplier</a> </li>
                                        <li><a href="view_supplier.php">View Supplier</a> </li>
                                    </ul></li>
                                <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Product<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="add_product.php">Add Product</a> </li>
                                        <li><a href="view_product.php">View Product</a> </li>
                                    </ul></li>
                                <li><a href="Billing.php">Billing</a> </li>
                                <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Report<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gstr_1.php">GSTR_1</a> </li>
                                        <li><a href="show_gstr_2.php">GSTR_2</a> </li>
                                    </ul></li>
                                <li><a href="gstr_2.php">Add GSTR_2</a> </li>
                                <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="user_change_password.php">Change Password</a> </li>
                                        <li><a href="public_login.php">Logout</a> </li>
                                    </ul></li>

                            </ul>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>


