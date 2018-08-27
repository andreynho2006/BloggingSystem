<?php

include_once "models/Table.class.php";

class Comment_Table extends Table {

    //declare a new method inside the Comment_Table class
    public function saveComment ( $entryId, $author, $txt ) {
        $sql = "INSERT INTO comment ( entry_id, author, txt ) VALUES (?, ?, ?)";
        $data = array( $entryId, $author, $txt );
        $statement = $this->makeStatement( $sql, $data );
        return $statement;
    }
}