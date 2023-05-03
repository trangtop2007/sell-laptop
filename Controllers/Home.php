<?php
class Home extends Controller{
    public function index(){
        return $this->view("main",["data"=>$this->model("FunctionModel")]);
    }
    public function getData(){
        echo __METHOD__;
    }
}
?>