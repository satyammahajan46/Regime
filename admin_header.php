<style>
    #clr
    {
     background-color: lightgray;
    }
</style>
<?php
session_start();
include 'connection.php';
ob_start();
if (is_null($_SESSION["username"])) {
    header("location:login.php");
}
else
{
    $username=$_SESSION["username"];
}
?>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script rel="stylesheet" src="css/jquery-ui.css"></script>
<script rel="stylesheet" type="text/css" src="css/bootstrap.css"></script>
<?php
include 'connection.php';
include 'header_files.php';
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
                        <a href="index.html">Regime</a>
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
                        <ul class="nav nav-pills">
                            <li><a href="admin_home.php">Admin Home</a> </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Admin <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="add_admin.php">Add New Admin</a> </li>
                                    <li><a href="view_admin.php">View Admins</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">GST <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="add_gst.php">GST</a> </li>
                                    <li><a href="view_gst.php">View GST</a> </li>
                                </ul>
                            </li>
                            <li><a href="eview_admin.php">Enquiry</a> </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Setting<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="change_admin.php">Change Password</a> </li>
                                    <li><a href="login.php">Logout</a> </li>
                                </ul>
                            </li>


                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>
<!-- //banner -->
