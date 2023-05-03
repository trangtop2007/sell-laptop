<?php
class App{
    public $controller="Home";
    public $action="index";
    public $params=[];
    public function __construct()
    {
        return $this->index();
    }
    public function index(){
        if (isset($_REQUEST["controller"])){
            $controller=$_REQUEST["controller"];
            if(file_exists("./Controllers/".$controller.".php")){
                $this->controller=$controller;
            }
        }
        require "./Controllers/".$this->controller.".php";
        if (isset($_REQUEST["action"])){
            $action=$_REQUEST["action"];
            if (method_exists(new $this->controller,$action)){
                $this->action=$action;
            }
        }
        call_user_func_array([new $this->controller,$this->action],$this->params);
    }
}
?>