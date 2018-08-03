<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once ('bookmark_fns.php');
session_start();

$username = $_POST['username'];
$passwd = $_POST['passwd'];

//登入表单
if($username && $passwd){
    try{
        login($username,$passwd);
        $_SESSION['valid_user'] = $username;
    }catch (Exception $e){
        do_html_header('Problem:');
        echo 'you could not be logged in.
        you must be logged in to view this page';
        do_html_URL('login.php','Login');
        do_html_footer();
        exit;
    }
}
//登入页
do_html_header('home');
check_valid_user();
if($url_array = get_user_urls($_SESSION['valid_user'])){
    display_user_urls($url_array);
}

display_user_menu();

do_html_footer();