<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL blog";
$pageData->addCSS("css/blog.css");

$dbInfo ="mysql:host=localhost;dbname=simple_blog";
$dbUser = "root";
$dbPassword = "";
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$pageRequested = isset ( $_GET['page'] );
//default controller is blog
$controller = "blog";
if ( $pageRequested ) {
    //if user submited the search form
    if ( $_GET['page'] === "search" ) {
        //load the search by overwriting default controller
        $controller = "search";
    } 
}

//include search view before the blog controller
$pageData->content .= include_once "views/search-form-html.php";

//include blog controller
//pageData->content .=include_once "controllers/blog.php";
$pageData->content .= include_once "controllers/$controller.php";


$page = include_once "views/page.php";
echo $page;