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

    public function escapeVal(){

    }

    public function buildQuery(){
        $this->query = "INSERT INTO $this->tablename ( username, usersurname, email, comment, file ) VALUES (". "'". $this->username . "'" . ", " . "'" .$this->usersurname . "'" .", ". "'" . $this->email. "'" .", ". "'" . $this->comment . "'" .", ". "'" . $this->file . "')";
    }

    public function save(){
        global $config;

        $dsn = 'mysql:dbname='.$config['db'].';host='.$config['host'].'';
//var_dump($dsn);
//exit();
        $db = new \PDO($dsn, $config['dbuser'], $config['dbpass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $db->exec($this->query);

    }

}