<?php

//include class definition
include_once "models/Comment_Table.class.php";

//create a new object , pass it a PDO Database connection object
$commentTable = new Comment_Table( $db );

//query database
$allComments = $commentTable->getAllById ( $entryId );
//get first row as a StdClass object
$firstComment = $allComments->fetchObject();

$testOutput = print_r( $firstComment, true );
die("<pre>$testOutput</pre>");

//insert a test comment for entry_id = 1
//assuming an entry_id of 1
//$commentTable->saveComment( 1, "me", "testing, testing" );

$comments = include_once "views/comment-form-html.php";

return $comments;