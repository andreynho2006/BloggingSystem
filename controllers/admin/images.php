<?php

include_once "models/Uploader.class.php";
$imageSubmitted = isset( $_POST['new-image'] );

//if the upload form was submitted
if ( $imageSubmitted ) {
    //create an Uploader object
    $uploader = new Uploader( 'image-data' );
    //indicate destination folder on server
    $uploader->saveIn( "img" );
    $uploader->save();
    $uploadMessage = "file probably uploaded!";
}

$imageManagerHTML = include_once "views/admin/images-html.php";
return $imageManagerHTML;