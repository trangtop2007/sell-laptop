
<?php
class Process extends Controller{
    public function index(){
        echo __METHOD__;
    }
    public function showid(){
        return $this->view("showid",["data"=>$this->model("FunctionModel")]);
    }
    public function register(){
        return $this->view("register",["data"=>$this->model("FunctionModel")]);
    }
    
}
?>