<?php

require('core.php');
$Form = new Form();

$f_name = mysql_real_escape_string($_POST['f_name']);
$l_name = mysql_real_escape_string($_POST['l_name']);
$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
$pass = hash('sha256', $_POST['password']);
$re_pass = hash('sha256', $_POST['re_password']);

if (empty($_POST['password']) || empty($_POST['re_password'])) {
    $Form->setError('empty_password', 'You cannot keep password fields empty!');
    $Form->return_msg_to('register.php');
} else if ($pass !== $re_pass) {
    $Form->setError('match_password', 'Passwords do not match!');
    $Form->return_msg_to('register.php');
} else {

    $username_check = mysql_query('SELECT username FROM users WHERE username = "' . $username . '"');
    $username_result = mysql_num_rows($username_check);

    if ($username_result != 0) {
        $Form->setError('username', 'Username exists!');
        $Form->return_msg_to('register.php');
    } else {
        $data = array(
            'firstname' => $f_name,
            'lastname' => $l_name,
            'email' => $email,
            'username' => $username,
            'password' => $pass,
            'registration_date' => date('y/m/d')
        );

        $result = insertQuery('users', $data);
        if ($result) {
            $Form->return_msg_to('/userhome.php');
        }
    }
}
