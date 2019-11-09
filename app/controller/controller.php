<?php
namespace app\controller;
class Controller{
    protected $template='default';
    protected $viewpath=ROOT.'/pages';
    public function render($view,$attribue=[]){
        extract($attribue);
        $view=str_replace('.','/',$view);
        ob_start();
        require($this->viewpath.'/'.$view.'.php');
        $contunue=ob_get_clean();
        require($this->viewpath.'/'.$this->template.'.php');
    }
}