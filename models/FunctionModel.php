<?php
require "./models/Db.php";
class FunctionModel extends DB{
    public function say(){
        echo "aijsd";
    }
    public function getAll(){
        $sql="SELECT * FROM `san_pham`";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function getId($id){
        $sql="SELECT * FROM `san_pham` WHERE `id`=$id";
        $result=$this->conn->query($sql);
        return $result;
    } 
    public function deleteId($id){
        $sql="DELETE FROM `san_pham` WHERE `id`=$id";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function insertAccount($fullname,$username,$email,$phone,$password,$gender,$brith,$address){
        $sql="INSERT INTO `register` (`fullname`,`username`,`pass`,`email`,`gender`,`address`,`phone`,`brith`) VALUES ('$fullname','$username','$password','$email','$gender','$address','$phone','$brith')";
        $result=$this->conn->query($sql);
        return $result;

    }
    public function findByUser($user){
        $sql="SELECT * FROM `register` WHERE `username`='$user'";
        $result=$this->conn->query($sql);
        return $result;
        
    }
    public function dividePage($count,$offset){
        $sql="SELECT * FROM `san_pham` LIMIT $count OFFSET $offset";
        $result=$this->conn->query($sql);
        return $result;
    }


}
?>