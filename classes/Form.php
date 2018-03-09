<?php
namespace classes;
class Form
{
    public $username;
    public $usersurname;
    public $email;
    public $comment;
    public $file;

    public function __construct(){
        $this->getUsername();
        $this->getUsersurname();
        $this->getEmail();
        $this->getComment();
        $this->getFile();
    }

    public function setUsername(){
        $this->username = $_POST['username'];
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

    public function setFile(){
        $this->file = $_POST['file'];
        return $this->file;
    }

    public function getFile(){
        return $this->setFile();
    }
}
