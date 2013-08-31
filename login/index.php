<?php
require('../core.php');
$Form = new Form();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dwetech Traffic</title>
    <link rel="stylesheet" href="<?php echo WEBSITE_URL ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo WEBSITE_URL ?>css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="<?php echo WEBSITE_URL ?>css/style.css"/>

    <script type="text/javascript" src="<?php echo WEBSITE_URL ?>js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo WEBSITE_URL ?>js/bootstrap-collapse.js"></script>
</head>
<body>
<?php include("../include/header.php"); ?>

<div class="loginForm">
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
                <form action="action.php" method="post" class="form-horizontal">
                    <div class="control-group <?php if( $Form->error('email') ) echo 'error'?>">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" name="email" id="inputEmail" value="<?php echo $Form->value('email')?>" placeholder="Email">
                            <?php if( $Form->error('email') ) { echo '<span class="help-inline">'.$Form->error('email').'</span>'; } ?>
                        </div>
                    </div>
                    <div class="control-group <?php if( $Form->error('email') ) echo 'error'?>">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input type="password" name="password" id="inputPassword" placeholder="Password">
                            <?php if( $Form->error('password') ) { echo '<span class="help-inline">'.$Form->error('password').'</span>'; } ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>