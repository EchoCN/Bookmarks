<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once ("bookmark_fns.php");
session_start();

$old_user = $_SESSION['valid_user'];

unset($_SESSION['valid_user']);
$result_dest = session_destroy();

do_html_header('Logging out');

if(!empty($old_user)){
    if($result_dest){
        echo 'Logged out';
        do_html_URL('login.php','Login');
    }else {
        echo 'Could not log you out.<br/>';
    }
    }else{
        echo 'you were not logged in,and so have not benen logged out.<br/>';
        do_html_URL('login.php','Login');
    }
    do_html_footer();
