<?php
namespace app;
class Validator{
    public $data;
    public $errors;
    public function __construct($data)
    {
        $this->data=$data;
    }
    public function isAlpha($key,$message){
        if(empty($this->getValue($key)) || !preg_match()('/^[a-zA-Z]+$/',$this->getValue($key))){
            $this->errors[$key]=$message;
        }
    }
    public function isNum($key,$message){
        if(empty($this->getValue($key)) || !preg_match()('/^[0-9]+$/',$this->getValue($key))){
            $this->errors[$key]=$message;
        }
    }
    public function getValue($key){
        if(isset($this->data->$key)){
            return $this->data->$key;
        }
        return null;
    }
    public function isValide(){
        if(!empty($errors)){
            return false;
        }
        return true;
    }
    public function getErrors(){
        if($errors){
            return $errors;
        }
        return null;
    }
}