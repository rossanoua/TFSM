<?php
//require_once '../inc/config.php';
namespace classes;
class UploadPath
{
    public $path;

    public function __construct(){
        $this->getPath();
    }

    public function setPath(){
        global $config;
        $this->path = $config['uploads'];
    }

    public function getPath(){
        return $this->setPath();
    }

}
