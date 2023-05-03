<?php
require "./models/FunctionModel.php";
class Controller extends FunctionModel{
    public function view($view,$data=[]){
        require "./Views/".$view.".php";
    }
    public function model($model){
        return new $model;
    }
}
?>