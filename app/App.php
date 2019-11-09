<?php
namespace app;
use app\Database;
class App{
    public static $_instance;
    public static function getDb(){
        if(self::$_instance===null){
            self::$_instance=new Database('test','localhost','root','');
        }
        return self::$_instance;
    }
}