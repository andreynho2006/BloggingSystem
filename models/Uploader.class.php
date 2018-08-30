<?php

class Uploader {
    private $filename;
    private $fileData;
    private $destination;
    //property for an error message
    private $errorMessage;
    //property for a standars error code
    private $errorCode;

    public function __construct ( $key ) {
        $this->filename = $_FILES[$key]['name'];
        $this->fileData = $_FILES[$key]['tmp_name'];
        $this->errorCode = ( $FILES[$key]['error'] );
    }

    public function saveIn( $folder ) {
        $this->destination = $folder;
    }

    public function save() {
        $folderIsWriteAble = is_writable( $this->destination);
        if ( $folderIsWriteAble ) {
            $name = "$this->destination/$this->filename";
            $succes = move_uploaded_file($this->fileData, $name);
        } else {
            trigger_error("cannot write to $this->destination");
            $succes = false;
        }
        return $succes;
    }

    private function readyToUpload() {
        $folderIsWriteAble === is_writable( $this->destination );
        if( $folderIsWriteAble === false ) {
            //provide a meaninful error message
            $this->errorMessage = "Error: destination folder is: ";
            $this->errorMessage .= "not writable, change permission";
            //indicate that code is NOT ready to upload file
            $canUpload = false;
        } else {
            //assume no errors - indicate we're ready to upload
            $canUpload = true;
        }
        return $canUpload;
    }
}