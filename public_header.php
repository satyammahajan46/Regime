<style>
    #clr
    {
        background-color: lightgray;
    }
</style>
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
                        <?php
                        include 'menu.php';
                        ?>
                        <div class="clearfix"> </div>
                    </div>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>
<!-- //banner -->

