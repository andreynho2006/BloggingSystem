<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include_once "models/Page_Data.class.php";

$pageData = new Page_Data();
$pageData->title = "PHP/MySQL blog";
$pageData->addCSS("css/blog.css");
$pageData->addScript("js/editor.js");
//load navigation
//$pageData->content = include_once "views/admin/admin-navigation.php";

//make new PDO object to connect to database
$dbInfo = "mysql:host=localhost;dbname=simple_blog";
$dbUser = "root";
$dbPassword = "";
$db = new PDO( $dbInfo, $dbUser, $dbPassword);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

//$navigationIsClicked = isset( $_GET['page']);
//if ( $navigationIsClicked ) {
//    //prepare to load corresponding controller
//    $contrl = $_GET['page'];
//} else {
    // prepare to load default controller
//    $contrl = "entries";
//}
include_once "models/Admin_User.class.php";
$admin = new Admin_User();
$pageData->content = include_once "controllers/admin/login.php";
//show admin module only if user is logged in
if( $admin->isLoggedIn() ) {
    $pageData->content .= include_once "views/admin/admin-navigation.php";
    $navigationIsClicked = isset( $_GET['page']);
    if( $navigationIsClicked ) {
        $controller = $_GET['page'];
    } else {
        $controller = "entries";
    }
    $pathtoController = "controllers/admin/$controller.php";
    $pageData->content .= include_once $pathtoController;
 }

$page = include_once "views/page.php";
echo $page;