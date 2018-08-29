<?php

//load the model
include_once "models/Blog_Entry_Table.class.php";
$blogTable = new Blog_Entry_Table( $db );

//get PDOStatement object from model
$searchData = $blogTable->searchEntry( "YelpCamp" );

//get first row from result set
$firstResult = $searchData->fetchObject();

//inspect first row
$searchOutput = print_r($firstResult, true);
$searchForm = include_once "views/search-form-html.php";
$searchOutput .= $searchForm;

//display all output on index.php
return $searchOutput;