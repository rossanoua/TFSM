<?php
//require_once '../inc/config.php';
namespace classes;
class UploadPath
{
    public $path;

    public function setPath(){
        $this->path = $config['uploads'];
    }

    public function getPath(){
        return $this->setPath();
    }

}
