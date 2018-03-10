<?php


namespace classes;


class FileUpload
{
    public $errors;
    public $file_name;
    public $file_size;
    public $file_tmp;
    public $file_type;
    public $file_ext;
    public $extensions;
    public $up_dir;
    public $settings;

    public function __construct(){
        $this->settings = include __DIR__.'../inc/config.php';

        if(isset($_FILES['file'])) {
            $this->errors = array();
            $this->file_name = $_FILES['file']['name'];
            $this->file_size = $_FILES['file']['size'];
            $this->file_tmp = $_FILES['file']['tmp_name'];
            $this->file_type = $_FILES['file']['type'];
            $this->file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
            $this->extensions = array("jpeg","jpg","png");
            $this->up_dir = $this->settings['uploads'].str_replace('@','_',$_POST['email']);
        }
    }

    public function ifExtension(){
        if(in_array($this->file_ext,$this->extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
    }

    public function ifFileSize(){
        if($this->file_size > 2097152) {
            $errors[]='File size must be excately 2 MB';
        }
    }

    public function ifNoErrors(){
        if(empty($this->errors)==true){
            return true;
        }else{
            return false;
        }
    }

    public function ifUpDirExists(){
        if (is_dir($this->up_dir)){
            return true;
        }else{
            return false;
        }
    }

    public function createUpDir(){
        if(mkdir ($this->up_dir, 0777,true)) {
            return true;
        }else{
            return false;
        }
    }

    public function moveFile(){
        if(move_uploaded_file($this->file_tmp,$this->up_dir.'/'.$this->file_name)){
            return true;
        }else{
            return false;
        }
    }
}