<?php
session_start();
require "./Views/processForm/ProcessRegister.php";
$process=$data["data"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Register</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(to right,rgb(0, 204, 255),rgb(6, 131, 73));
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        p{
            color: red;
            font-weight: 500;
        }
        form{
            height: 520px;
            width: 580px;
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius:5px;
        }
        .wrap-input{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        .wrap-input div:not(.wrap-gender){
            display: flex;
            flex-direction: column;

        }
        .wrap-input div{
            margin-bottom: 15px;
        }
        h1{
            text-align: center;
            margin:8px 0px;
            transition: color 0.3s linear;
        }
        input[type=text],input[type=password]{
            width: 250px;
            height: 35px;
            padding-left: 10px;
            border: 1px solid rgb(202, 201, 201);
            outline: none;
            border-radius: 5px;
            font-size: 14px;
            margin-top: 3px;
        }
        .wrap-brith input{
            width: 250px;
            height: 35px;
            border: 1px solid rgb(202, 201, 201);
            border-radius: 5px;
            padding-left: 10px;
            font-size: 15px;
            
        }
        body{
            overflow: hidden;
        }
        label{
            font-weight: 500;
        }
        h2{
            font-size: 17px;
            font-weight: 500;
            margin-bottom: 3px;
        }
        .wrap-gender label{
            font-size: 15px;
            margin-right: 10px;
        }
        .wrap-gender{
            width: 250px;
        }
        textarea{
            resize: none;
            width: 540px;
            height: 50px;
            border: 1px solid rgb(202, 201, 201);
            outline: none;
            padding-left: 10px;
            font-size: 15px;
            border-radius: 5px;
            margin-top: 5px;
        }
        input[type=submit]{
            border: none;
            outline: none;
            background-color: green;
            color: white;
            font-size: 20px;
            width: 250px;
            border-radius: 25px;
            height: 45px;
            box-shadow: 0px 10px 0px 0px rgb(20, 196, 24);
            transition: all 0.3s linear;
            cursor: pointer;
        }
        .wrap-submit{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input[type=submit]:active{
            transform: translateY(8px);
            box-shadow: 0px 2px 0px 0px rgb(24, 196, 24);

        }
        .error{
            position: absolute;
            right: 0px;
            top: 10px;
            display: flex;
            align-items: center;
            background-color: rgb(226, 92, 92);
            padding: 15px 20px;
            border-radius: 5px;
            animation: slide 5s linear forwards;

        }
        .error span{
            color: white;
            font-size: 20px;
            margin-right: 10px;
        }
        .error div{
            font-size: 19px;
            color: white;
        }
        @keyframes slide {
    	    0% {
		        transform: translateX(100%);
	        }
	        15% {
		        transform: translateX(-10%);
	        }
	        30% {
		        transform: translateX(0%);
	        }
	        50% {
		        transform: translateX(-10px);
	        }
            65% {
		        transform: translateX(-10px);
	        }
	        80% {
		        transform: translateX(0%);
	        }
	        90% {
		        transform: translateX(-10%);
	        }
	        100% {
		        transform: translateX(120%);
	        }
        }

        
        
    </style>
    <form action="" method="post">
        <h1>Registion</h1>
        <div class="wrap-input">
            <div class="wrap-fullname">
                <label for="fullname">Full name</label>
                <input type="text" name="fullname" id="fullname" placeholder="Enter your name" value="<?php if(isset($_POST["fullname"])){echo $_POST["fullname"];} ?>">
            </div>
            <div class="wrap-username">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" value="<?php if(isset($_POST["username"])){echo $_POST["username"];} ?>">
                <?php if (isset($error["username"])){echo "<p>{$error['username']}</p>";} ?>

            </div>
            <div class="wrap-email">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter your email" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>"> 
                <?php if (isset($error["email"])){echo "<p>{$error['email']}</p>";} ?>

            </div>
            <div class="wrap-phone">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone" value="<?php if(isset($_POST["phone"])){echo $_POST["phone"];} ?>">
                <?php if (isset($error["phone"])){echo "<p>{$error['phone']}</p>";} ?>

            </div>
            <div class="wrap-password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <?php if (isset($error["password"])){echo "<p>{$error['password']}</p>";} ?>

            </div>
            <div class="wrap-confirm">
                <label for="confirm">Confirm Password</label>
                <input type="password" name="confirm" id="confirm" placeholder="Enter confirm password">
                <?php if (isset($error["confirm"])){echo "<p>{$error['confirm']}</p>";} ?>

            </div>
            <div class="wrap-gender">
                <h2>Gender</h2>
                    <input type="radio" name="gender" id="male" value="Male" checked="checked">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" value="Other">
                    <label for="other">Other</label>
                
            </div>
            <div class="wrap-brith">
                <label for="brith">Brith Date</label>
                <input type="date" name="brith" id="brith" value="<?php if(isset($_POST["brith"])){echo $_POST["brith"];} ?>">
            </div>
            <div class="wrap-address">
                <label for="address">Address</label>
                <textarea name="address" id="address" placeholder="Enter your address" value="<?php if(isset($_POST["address"])){echo $_POST["address"];} ?>"></textarea>
            </div>  
        </div>
        <div class="wrap-submit">
            <input type="submit" value="Register" name="submit">
        </div>
        
    </form>
    <?php
        if(isset($error["all"])){
            echo "<div class='error'>
            <span><i class='fa-solid fa-triangle-exclamation'></i></span>
            <div>You need to input enough infomation</div>
            </div>";
        }
    ?>
    
    <script>
        var title=document.querySelector("h1")
        var color1=0
        var color2=0
        var color3=0
        function getColor(){
            color1=Math.round(Math.random()*(250-0)+0)
            color2=Math.round(Math.random()*(250-0)+0)
            color3=Math.round(Math.random()*(250-0)+0)
            title.style.color="rgb("+color1+","+color2+","+color3+")"
            
        }
        setInterval(getColor,3000)
    </script>
</body>
</html>