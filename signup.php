<html>
<head>
     <title>Login</title>
    <?php
    include 'header_files.php';
    ?>
    <!--<script src="dist/jquery-1.11.3.min.js"></script>-->
    <script src="dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            $("#signUpForm").validate()
        })
    </script>
</head>
   
<body>
    <div>
        <?php
        include "commonHeader.php";
        include "connection.php";
        ?>
        
          
        <div class="container">
    <h1 class="center-block">Provide following details</h1>
    <form action="insertUser.php" id="signUpForm" method="post">
        <div class="form-group">
            Enter Full Name
            <input type="text" placeholder="Enter Name" data-rule-required="true" data-msg-required="Name Cannot be blank"
                   data-rule-name="true" class="form-control" name="FullName">
        </div>
        <div class="form-group">
            Enter Email Address
            <input type="text" placeholder="Enter Email Address" data-rule-required="true" data-msg-required="Email Cannot be blank"
                    class="form-control" name="EmailID">
        </div>
        <div class="form-group">
            Enter Password
            <input placeholder="Enter Password" data-rule-required="true" data-msg-required="Password cannot be blank" type="password"
                   class="form-control" name="Password">
        </div>
         <div class="form-group">
            Enter Password Again
            <input placeholder="Enter Password" data-rule-required="true" data-msg-required="Password cannot be blank" type="password"
                   class="form-control" name="cPassword">
        </div>
        <div class="form-group">
            Enter Address
            <input type="text" placeholder="Enter Address" data-rule-required="true" data-msg-required="Address Cannot be blank"
                    class="form-control" name="Address">
        </div>
        <div class="form-group">
            Are You:
            <input type="radio" checked="checked" name="type" value="Student"> Student
            <input type="radio" name="type" value="Instrutor"> Instrutor<br>
        </div>

        <div class="form-group">
            <input type="submit" value="Sign up" class="btn btn-success">
        </div>

    </form>
    <?php
    if (isset($_GET["succ"])) {
        if($_GET["succ"] == 1){
            echo '<h5 class="text-danger text-info"> Signed-up successfully </h5>';
        }
        else if(isset($_GET["pass"]) && $_GET["pass"] == 0 ){
            echo '<h5 class="text-danger text-info"> Password MisMatch error </h5>';
        }
        
        else{
             echo '<h5 class="text-danger text-info"> Signed-up failed </h5>';
        }
    }
    ?>
</div>
</div>
    <footer><?php include "footer.php";?> </footer>
    </body>
</html>
    