<?php

include_once "models/Admin_Table.class.php";

$loginFormSubmitted = isset( $_POST['log-in']);
if( $loginFormSubmitted ) {
    //$admin->login();
    $email = $_POST['email'];
    $password = $_POST['password'];
    //create an object for comunicating with the database table
    $adminTable = new Admin_Table( $db );
    try {
        //try to login user
        $adminTable->checkCredentials( $email, $password );
        $admin->login();
    } catch ( Exception $e ) {
        //login failed
    }
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