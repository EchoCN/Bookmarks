<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once ("bookmark_fns.php");
do_html_header('Resetting password');

$username = $_POST['username'];

try{
    $password = reset_password($username);
    notify_password($username,$password);
    echo 'your new password has been emailed to you<br \>';
}
catch(Exception $e){
    echo 'your password could not be reset-please try again later';
}
do_html_url('login.php','Login');
do_html_footer();