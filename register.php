<?php
require('core.php');
$Form = new Form();
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

        <div class="regForm">
            <div class="container">
                <div class="row">
                    <div class="span6 offset3">

                        <?php if ($Form->error('empty_password')) { ?>
                            <p class="alert alert-error">You cannot keep password fields empty!</p>
                        <? }
                        ?>
                        <?php if ($Form->error('match_password')) { ?>
                            <p class="alert alert-error">Password fields do not match!</p>
                        <? }
                        ?>
                        <form class="form-horizontal" method="post" action='action-register.php'>

                            <div class="control-group <?php echo $Form->error('f_name') ? 'error' : ''; ?>">
                                <label class="control-label" for="inputEmail">First Name</label>
                                <div class="controls">
                                    <input type="text" id="inputEmail" placeholder="First Name" name='f_name'>
                                    <?php echo '<span class="alert-error">' . $Form->error('f_name') . '</span>'; ?>
                                </div>
                            </div>
                            <div class="control-group <?php echo $Form->error('l_name') ? 'error' : ''; ?>">
                                <label class="control-label" for="inputEmail">Last Name</label>
                                <div class="controls">
                                    <input type="text" id="inputEmail" placeholder="Last Name" name='l_name'>
                                    <?php echo '<span class="alert-error">' . $Form->error('l_name') . '</span>'; ?>
                                </div>
                            </div>
                            <div class="control-group <?php echo $Form->error('username') ? 'error' : ''; ?>">
                                <label class="control-label" for="inputEmail">Username</label>
                                <div class="controls">
                                    <input type="text" id="inputEmail" placeholder="Username" name='username'>
                                    <?php echo '<span class="alert-error">' . $Form->error('username') . '</span>'; ?>
                                </div>
                            </div>
                            <div class="control-group <?php echo $Form->error('email') ? 'error' : ''; ?>">
                                <label class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                    <input type="email" id="inputEmail" placeholder="Email" name='email'>
                                    <?php echo '<span class="alert-error">' . $Form->error('email') . '</span>'; ?>
                                </div>
                            </div>
                            <div class="control-group <?php echo $Form->error('password') ? 'error' : ''; ?>">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="password" id="inputPassword" placeholder="Password" name='password'>
                                    <?php echo '<span class="alert-error">' . $Form->error('password') . '</span>'; ?>
                                </div>
                            </div>
                            <div class="control-group <?php echo $Form->error('re_password') ? 'error' : ''; ?>">
                                <label class="control-label" for="inputPassword">Confirm Password</label>
                                <div class="controls">
                                    <input type="password" id="inputPassword" placeholder="Password" name='re_password'>
                                    <?php echo '<span class="alert-error">' . $Form->error('re_password') . '</span>'; ?>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" value='submit' name='submit' class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
