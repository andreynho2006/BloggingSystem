<?php

//include class definition and create an object
include_once "models/Blog_Entry_Table.class.php";

$entryTable = new Blog_Entry_Table( $db );

//was editor form submitted?
$editorSubmitted = isset( $_POST['action'] );

if ( $editorSubmitted ) {
    $buttonClicked = $_POST['action'];

    //was "save" button clicked
    $save = ( $buttonClicked === 'save' );
    //get the entry id from the hidden input in editor form
    $id = $_POST['id'];

    //if id = 0 the editor was empty
    //so user tries to save a new entry
    $insertNewEntry = ( $save and $id === '0');
    //was "delete" button clicked
    $deleteEntry = ( $buttonClicked === 'delete');

    //if $insertNewEntry is false you know that entry_id was NOT 0; that happens when an existing entry was displayed in editor(user tries to save an existing entry)
    $updateEntry = ( $save and $insertNewEntry === false );

    //get the title and entry data from editor form
    $title = $_POST['title'];
    $entry = $_POST['entry'];
    
    

    if ( $insertNewEntry ) {
        $saveEntryId = $entryTable->saveEntry( $title, $entry );
    } else if ( $updateEntry ) {
        $entryTable->updateEntry ( $id, $title, $entry );
        //in case an entry was updated
        //overwrite the variable with the id of the updated entry
        $saveEntryId = $id;
    } else if ( $deleteEntry ) {
        $entryTable->deleteEntry( $id );
    }
}

$entryRequested = isset( $_GET['id']);
//create a new if statement
if ( $entryRequested ) {
    $id = $_GET['id'];
    //load model of existing entry
    $entryData = $entryTable->getEntry( $id );
    $entryData->entry_id = $id;
    $entryData->message = "";
}

//new code below: an entry was saved or updated
$entrySaved = isset ( $saveEntryId );
if ( $entrySaved ) {
    $entryData = $entryTable->getEntry( $saveEntryId );
    //display a confirmation message
    $entryData->message = "Entry was saved";
}

//load relevant view
$editorOutput = include_once "views/admin/editor-html.php";

return $editorOutput;