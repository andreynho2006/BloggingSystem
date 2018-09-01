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
        $this->errorCode = ( $_FILES[$key]['error'] );
    }

    public function saveIn( $folder ) {
        $this->destination = $folder;
    }

    public function save() {
        $folderIsWriteAble = is_writable( $this->destination);
        if ( $this->readyToUpload() ) {
            move_uploaded_file( $this->fileData, "$this->destination/$this->filename" );
        } else {
            //if not create an exception - pass error message as argument
            $exc = new Exception( $this->errorMessage );
            //throw the exception
            throw $exc;
        }
    }

    private function readyToUpload() {
        $folderIsWriteAble = is_writable( $this->destination );
        if( $folderIsWriteAble === false ) {
            //provide a meaninful error message
            $this->errorMessage = "Error: destination folder is: ";
            $this->errorMessage .= "not writable, change permission";
            //indicate that code is NOT ready to upload file
            $canUpload = false;
        } else if ( $this->errorCode === 1 ){
            $maxSize = init_get( 'uploaded_max_filesize' );
            $this->errorMessage = "Error: File is too big. ";
            $this->errorMessage .= "Max file size is $maxSize";
            $canUpload = false;
        } else {
            //assume no errors - indicate we're ready to upload
            $canUpload = true;
        }
        return $canUpload;
    }
}