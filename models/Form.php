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
//    private $dbsettings;

    public function __construct(){
        $this->tableName();
    }

    private function tableName(){
         $this->tablename = 'form_users';
    }

    public function escapeVal(){

    }

    public function buildQuery(){
        $this->query = "INSERT INTO form_users ( username, usersurname, email, comment, file ) VALUES (:username, :usersurname, :email, :comment, :file)";
    }

    public function save(){
        global $config;


        $dsn = "mysql:dbname=".$config['db'].";host=".$config['host'].";charset=utf8";

        $db = new \PDO($dsn, $config['dbuser'], $config['dbpass']);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $stmt = $db->prepare($this->query);

        $stmt->execute(array(
            'username'=>$this->username,
            'usersurname'=>"$this->usersurname",
            'email'=>"$this->email",
            'comment'=>"$this->comment",
            'file'=>"$this->file",

        ));

    }

}