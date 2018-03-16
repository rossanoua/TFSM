<?php


namespace classes;

//todo у сессии должно быть имя
class SessionHelper
{
    static $session_live_time;

    public function __construct(){
        $this->setSessionLiveTime();
        $this->setSessionLastActive();
        $this->isSessionTimePast();
    }

    public function setSessionLiveTime($t = 3){
        $this::$session_live_time = $t;
    }

    public function setSessionLastActive(){
        if (!isset($_SESSION['LAST_ACTIVITY']) ) {
            session_start();
            $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
        }elseif ( isset($_SESSION['LAST_ACTIVITY']) && $this->isSessionTimePast() ){
             $this->sessionDestroy();
             $this->setSessionLastActive();
        }
    }

//    public function

    public function sessionDestroy(){
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage
    }

    public function isSessionTimePast(){
         if(time() - $_SESSION['LAST_ACTIVITY'] > $this::$session_live_time){
             return true;
         }elseif(time() - $_SESSION['LAST_ACTIVITY'] < $this::$session_live_time){
             var_dump($_SESSION['LAST_ACTIVITY']);
             var_dump(time());
             var_dump(time() - $_SESSION['LAST_ACTIVITY']);
             exit();
             $_SESSION['LAST_ACTIVITY'] = time();
         }else{
             return false;
         }
    }

}