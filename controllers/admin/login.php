<?php

$loginFormSubmitted = isset( $_POST['log-in']);
if( $loginFormSubmitted ) {
    $admin->login();
}

$view = include_once "views/admin/login-form-html.php";
return $view;