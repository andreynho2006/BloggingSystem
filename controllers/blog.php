<?php

include_once "models/Blog_Entry_Table.class.php";

$entryTable = new Blog_Entry_Table( $db );

//fetch data from the first row as StdClass object
//$oneEntry = $entries->fetchObject();

//print the object
//$test = print_r( $oneEntry, true );

$isEntryClicked = isset( $_GET['id'] );

if ( $isEntryClicked ) {
    //show one entry ... soon
    $entriId = $_GET['id'];
    $blogOutput = "will soon show entry with entry_id = \$entryId";
} else {
    //list all entries
    //$entries is the PDOStatement returned from getAllEntries
    $entries = $entryTable->getAllEntries();
    
    //load the view
    $blogOutput = include_once "views/list-entries-html.php";
}

return "<pre>$blogOutput</pre>";