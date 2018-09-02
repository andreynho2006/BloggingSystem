<?php

$loginFormSubmitted = isset( $_POST['log-in']);
if( $loginFormSubmitted ) {
    $admin->login();
}

$loggingOut = isset( $_POST['logout']);
if( $loggingOut ) {
    $admin->logout();
}

if( $admin->isLoggedIn() ) {
    $view = include_once "views/admin/logout-form-html.php";
} else {
    $view = include_once "views/admin/login-form-html.php";
}

//$view = include_once "views/admin/login-form-html.php";
return $view;