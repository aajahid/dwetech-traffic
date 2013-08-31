<?php
require('../core.php');


$Form = new Form();



if( !isset( $_POST['email'] ) || empty($_POST['email'] ) ) {
	$Form->setError('email','Please write your email!');
} 

if( !isset( $_POST['password'] ) || empty( $_POST['email'] ) ) {
	$Form->setError('password','Please write your password');
} 

if( $Form->num_errors > 0 ) {
	$Form->return_msg_to('./');
}

$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);

if( $session->checkUser($email, $password) )
{
	redirect('../userhome/');
} else
{
	$Form->setError('error_message','Wrong login information');
	$Form->return_msg_to('./');
}

?>
