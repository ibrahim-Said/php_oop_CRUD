<?php
namespace app;
class Session {
    public static $_instance;
    public static function getInstance(){
        if(self::$_instance===null){
            self::$_instance=new Session();
        }
        return self::$_instance;
    }
    public function __construct()
    {
        session_start();
    }
    public function hasFlash(){
        return !empty($_SESSION['flash']);
    }
    public function setFlash($key,$message){
        $_SESSION['flash'][$key]=$message;
    }
    public function getFlash(){
        $session=$_SESSION['flash'];
        unset($_SESSION['flash']);
        return $session ;
    }
}