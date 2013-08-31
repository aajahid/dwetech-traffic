<?php
require('core.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dwetech Traffic</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
</head>
<body>


<div id="bgTraffic">

</div>

<?php include("include/header.php"); ?>

<div class="logReg">
    <div class="container">
        <div class="row">
            <div class="span4 offset4">
                <a href="<?php echo WEBSITE_URL ?>login.php" class="btn btn-block btn-info btn-block-custom">Login</a>
                <a href="<?php echo WEBSITE_URL ?>register.php" href="#" class="btn btn-block btn-primary btn-block-custom">Register</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>