<?php
$error=[];
if (isset($_POST["submit"])){
    if (isset($_POST["fullname"])&&($_POST["username"])&&($_POST["email"])&&($_POST["phone"])&&($_POST["password"])&&($_POST["password"])&&($_POST["confirm"])&&($_POST["gender"])&&($_POST["brith"])&&($_POST["address"])){
        $fullname=$_POST["fullname"];
        $gender=$_POST["gender"];
        $brith=$_POST["brith"];
        $address=$_POST["address"];
        if (strlen($_POST["username"])<6){
            $error["username"]="Username must be least 6 character!";
        }
        else{
            $username=$_POST["username"];
        }
        if (!preg_match("/^[a-zA-Z]\w{5,}@gmail\.com$/",$_POST["email"])){
            $error["email"]="Email is invalid!";          
        }
        else{
            $email=$_POST["email"];
        }
        if (!preg_match("/^(0|\+\d{2,3})\d{9}$/",$_POST["phone"])){
            $error["phone"]="Number phone is invalid!";
        }
        else{
            $phone=$_POST["phone"];
        }
        if (strlen($_POST["password"])<6){
            $error["password"]="Password must be least 6 character!";
        }
        else{
            $password=$_POST["password"];
            if($_POST["confirm"]!=$password){
                $error["confirm"]="confirm password is invalid!";
            }
        }
        
    }
    else{
        $error["all"]="you need to input enough infomation!";
    }

}
?>