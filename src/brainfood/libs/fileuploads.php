<?php

namespace Brainfood\libs;

class FileUploads{
	protected $_ext;
	protected $_max_file_size;
	protected $_location;
	protected $_file;
  protected $_uploadDir;

	public function __construct($ext,$maxfilesize,$location,$file, $pathToUpload){
		$this->_ext = $ext;
		$this->_max_file_size = $maxfilesize;
		$this->_location = $location;
		$this->_file = $file;
    $this->_uploadDir = $pathToUpload;

	}

	public function doUpload(){

		$result = [];
		$state = TRUE;

		$rnd = uniqid(rand(0000, 9999), true);
    $filename = $this->_file['name'];
    $loc = $this->_location.$rnd.$filename;
    $pathToUpload = $this->_uploadDir.$rnd.$filename;
     	

    if($this->_file['size'] > $this->_max_file_size) {

     	$state = FALSE;
     	$result[] = $state;					
      $result[] = "file too large buddy, see instructions";

   	}
      // be sure file extension is allowed
    if(!in_array($this->_file['type'], $this->_ext)){

      $state = FALSE;
      $result[] = $state;
   	  $result[] = "file format not accepted, see instructions";

   	}
        
      // the location uploaded files would be sent to
    if(!move_uploaded_file($this->_file['tmp_name'], $loc)){

      $state = FALSE;
      $result[] = $state;
   	  $result[] = "file upload failed. please contact admin";

    }
           
    if($state == FALSE){
      return $result;

    } else {

      $result[] = $state;
      $result[] = $pathToUpload;

      return $result;
      
    }
	}	
}
