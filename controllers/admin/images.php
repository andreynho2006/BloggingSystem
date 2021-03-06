<?php

include_once "models/Uploader.class.php";
$imageSubmitted = isset( $_POST['new-image'] );

//if the upload form was submitted
if ( $imageSubmitted ) {
    //create an Uploader object
    $uploader = new Uploader( 'image-data' );
    //indicate destination folder on server
    $uploader->saveIn( "img" );
    //try to save the upload file
    try{
        $uploader->save();
        //create an upload message that confirms succesuful upload
        $uploadMessage = "file uploaded!";
        //catch any exception thrown
    } catch ( Exception $exception ) {
        //use the exception to create an upload message
        $uploadMessage = $exception->getMessage();
    }
}

//if a delete link was clicked
$deleteImage = isset ( $_GET['delete-image'] );
if ( $deleteImage ) {
    //grab teh src of the image to delete
    $whichImage = $_GET['delete-image'];
    unlink($whichImage);
} 

$imageManagerHTML = include_once "views/admin/images-html.php";
return $imageManagerHTML;