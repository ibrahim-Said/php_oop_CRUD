<?php
namespace app;
use \PDO;
class Database{
    public  $pdo;
    public function __construct($dbname,$dbhost,$dbuser,$dbpass)
    {
        $this->pdo=new PDO("mysql:dbname=$dbname;host=$dbhost;charset=utf8",$dbuser,$dbpass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }
    public function query($statement,$attribute=null){
        if($attribute===null){
            $res=$this->pdo->query($statement);
        }
        $res=$this->pdo->prepare($statement);
            $res->execute($attribute);

        return $res;
    }
    public function lastInsertId(){
        return $thiss->pdo->lastInsertId();
    }
}