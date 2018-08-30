<?php

$imageSubmitted = isset( $_POST['new-image'] );
if ( $imageSubmitted ) {
    $testOutput = "<pre>";
    $testOutput .=print_r($_FILES, true);
    $testOutput .= "</pre>";
return $testOutput;
}

$imageManagerHTML = include_once "views/admin/images-html.php";
return $imageManagerHTML;