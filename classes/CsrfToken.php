<?php


namespace classes;


class CsrfToken
{
    public static $token;

    public function generateToken(){
//        session_start();
        if (empty($_SESSION['token'])) {
            $_SESSION['token'] = bin2hex(random_bytes(32));
        }
        $this::$token = $_SESSION['token'];
    }

    public function validateToken($t){
//        session_start();
        if(empty($_SESSION['token']))
        {
            return false;
        }
        if ($t === $_SESSION['token']){
            return true;
        }else{
            return false;
        }
    }
}