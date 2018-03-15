<?php


namespace classes;

//todo у сессии должно быть имя
class SessionHelper
{
    static $session_live_time;

    public function __construct(){
        $this->setSessionLiveTime();
        $this->setSessionLastActive();
    }

    public function setSessionLiveTime($t = 5){
        $this::$session_live_time = $t;
    }

    public function setSessionLastActive(){
        if (!isset($_SESSION['LAST_ACTIVITY']) ) {
            $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
        }
    }

    public function sessionDestroy(){
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage
    }

    public function isSessionTimePast(){
         if(time() - $_SESSION['LAST_ACTIVITY'] > $this::$session_live_time){
             $this->sessionDestroy();
         }
    }

}