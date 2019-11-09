<?php
namespace app;
class Form{
    public $data;
    public function __construct($data){
        $this->data=$data;
    }
    public function getValue($key){
        if(isset($this->data->$key)){
            return $this->data->$key;
        }else{
            return null;
        }
    }
    public function input($type,$name,$placeholder=null){
        if($placeholder===null){
            $placeholder=$name;
        }
    if($type!='textarea'){
        return "
        <div class='form-group'>
        <label for=$name></label>
        <input class='form-control' name=$name type=$type placeholder=$placeholder required value=".$this->getValue($name)." >
        </div>
        ";
    }
    return "
        <div class='form-group'>
        <label for=$name></label>
        <textarea class='form-control' name=$name placeholder=$placeholder required>".$this->getValue($name)."</textarea>
        </div>
        ";
    }

}