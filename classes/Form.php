<?php
namespace classes;
class Form
{
    public $username;
    public $usersurname;
    public $email;
    public $comment;


    public function __construct(){
        $this->getUsername();
        $this->getUsersurname();
        $this->getEmail();
        $this->getComment();

    }

    public function setUsername(){
        $this->username = $_POST['username'];
        $max = 50;
// The file must exist with at least 2 lines on it
        $file = "uploads/log.txt";
        addNew($file, date("H:m:s m.d.Y") . ' : $this->username    => ' . $this->username    , $max);
        return $this->username;
    }

    public function getUsername(){
        return $this->setUsername();
    }

    public function setUsersurname(){
        $this->usersurname = $_POST['usersurname'];
        return $this->usersurname;
    }

    public function getUsersurname(){
        return $this->setUsersurname();
    }

    public function setEmail(){
        $this->email = $_POST['email'];
        return $this->email;
    }

    public function getEmail(){
        return $this->setEmail();
    }

    public function setComment(){
        $this->comment = $_POST['comment'];
        return $this->comment;
    }

    public function getComment(){
        return $this->setComment();
    }
}
