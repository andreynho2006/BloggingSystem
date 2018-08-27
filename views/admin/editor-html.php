<?php

//check if required data is available
$entryDataFound = isset ( $entryData );
if ( $entryDataFound === false ) {
    //default values for an empty editor
    $entryData = new StdClass();
    $entryData->entry_id = 0;
    $entryData->title = "";
    $entryData->entry_text = "";
}

//change object properties in <input> and <textarea>
return "
<form method='post' action='admin.php?page=editor' id='editor'>
    <input type='hidden' name='id' value='$enryData->entry_id' />
    <fieldset>
        <legend>New entry submission</legend>
        <label>Title</label>
        <input type='text' name='title' maxlength='150' value='$entryData->title' />

        <label>Entry</label>
        <textarea name='entry'>$entryData->entry_text</textarea>

        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='save' />
            <input type='submit' name='action' value='delete' />
        </fieldset>
    </fieldset>
</form>
";