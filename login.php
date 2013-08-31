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
<?php include("include/header.php"); ?>

<div class="loginForm">
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>