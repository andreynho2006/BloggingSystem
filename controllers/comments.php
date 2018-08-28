<?php

//include class definition
include_once "models/Comment_Table.class.php";

//create a new object , pass it a PDO Database connection object
$commentTable = new Comment_Table( $db );

//insert a test comment for entry_id = 1
//assuming an entry_id of 1
$commentTable->saveComment( 1, "me", "testing, testing" );

$comments = include_once "views/comment-form-html.php";

return $comments;