<?php
namespace models;


class Form
{
    public $username;
    public $usersurname;
    public $email;
    public $comment;
    public $file;
    public $query;
    private $tablename;
    private $dbsettings;

    public function __construct(){
        $this->tableName();
    }

    private function tableName(){
         $this->tablename = 'form_users';
    }


    public function buildQuery(){
        $this->query = "INSERT INTO ".$this->tablename. "( username, usersurname, email, comment, file ) VALUES (". $this->username .",". $this->usersurname .",". $this->email .",". $this->comment .",". $this->file .")";
    }

    public function save(){
        $this->dbsettings = require_once __DIR__.'../inc/config.php';
        $dsn = 'mysql:dbname='.$this->dbsettings['db'].';host='.$this->dbsettings['host'];
        $db = new \PDO($dsn, $this->dbsettings['dbuser'], $this->dbsettings['dbpass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    }

}