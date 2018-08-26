<?php

class Blog_Entry_Table {
    private $db;
    //notice there are two underscore characters in __construct
    public function __construct ( $db ) {
        $this->db = $db;
    }

    public function saveEntry ( $title, $entry ) {
        //notice placeholders in SQL string. ? is a placeholder
        //notice the order of attributes: first title, next entry_text
        $entrySQL = "INSERT INTO blog_entry ( title, entry_text )
                     VALUES ( ?, ? )";
        //create an array with dynamic data
        //Order is important: $title must come first, $entry second
        $formData = array( $title, $entry );

        //$this is the object's way of saying my
        //$this->makestatement calls makeStatement of Blog_Entry_Table
        $entryStatement = $this->makestatement( $entrySQL, $formData );
    }

    public function getAllEntries() {

        $sql = "SELECT entry_id, title, SUBSTRING(entry_text, 1, 150) AS intro FROM blog_entry";

        $statement = $this->makeStatement( $sql );

        return $statement;
    }

    public function getEntry( $id ) {
        $sql = "SELECT entry_id, title, entry_text, date_created FROM blog_entry WHERE entry_id = ?";
        $statement = $this->db->prepare( $sql );
        $data = array( $id );

        //call the new makeStatement method
        $statement = $this->makeStatement( $sql, $data );
        $model = $statement->fetchObject();
        return $model;
    }

    public function makeStatement ( $sql, $data = NULL ) {
        //create a PDOStatement object
        $statement = $this->db->prepare( $sql );
        try {
            //use dynamic data and run the query
            $statement->execute( $data );
        } catch ( Exception $e ) {
            $exceptionMessage = "<p>You tried to run this sql: $sql</p>
                                 <p>Exception: $e</p>";
            trigger_error( $exceptionMessage );
        }
        //return the PDOStatement object
        return $statement;
    }
}