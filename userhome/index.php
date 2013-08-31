<?php

require('../core.php');

$session->loginRequired('user'); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dwetech Traffic</title>
    <link rel="stylesheet" href="<?php echo WEBSITE_URL; ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo WEBSITE_URL; ?>css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="<?php echo WEBSITE_URL; ?>css/style.css"/>

    <script type="text/javascript" src="<?php echo WEBSITE_URL; ?>js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo WEBSITE_URL; ?>js/bootstrap-collapse.js"></script>
</head>
<body>


<div id="bgTraffic">

</div>

<?php include("../include/header.php"); ?>

<div id="midBody">
    <div class="container">
        <div class="content">
            <h1><img src="img/dwetech-traffic.png" alt=""/></h1>
            <div class="row">
            	<div class="span12">
            		<h1 style="text-align:center">Please choose whatever you are a rider or a driver</h1>
            		<br>
            	</div>
            </div>
            <div class="row">
            	<div class="span6">
            		<div class="well">
            			<a class="btn btn-block btn-large">I'm a Rider</a>
            		</div>
            	</div>
            	<div class="span6">
            		<div class="well">
            			<a class="btn btn-block btn-large">I'm a Driver</a>
            		</div>
            	</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>