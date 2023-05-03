<?php
$count=12;
if(isset($_REQUEST["page"])){
    $offset=($_REQUEST["page"]-1)*12;
}
else{
    $offset=0;
}
$result=$data["data"]->dividePage($count,$offset);
while($row=$result->fetch_assoc()){
    $val[]=$row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Shop</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
</head>
<body>
    <style>
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
    @media screen and (min-width:1100px){
        .login-register{
            height: 100px;
         
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: space-around;
            padding: 0 60px ;
        }
        body::-webkit-scrollbar{
            width: 7px;
        }
        body::-webkit-scrollbar-thumb{
            background-color:rgb(209, 221, 254);
            border-radius: 25px;
        }
        body::-webkit-scrollbar-track{
            width: 7px;
            background-color: transparent;
            border-radius: 25px;
        }

        .login-register div a{
            text-decoration: none;
            color: black;
            font-weight: 500;
            padding: 10px;
            display: inline-block;
            border-radius: 5px;
        }
        .login-register div a:hover{
            background-color: rgb(212, 212, 212);
        }
        #cart{
            color: red;
        }
        #cart span{
            color: black;
        }
        .login-register div:first-child{
            margin-right: 35px;
            position: relative;
        }
        .login-register div:first-child input{
            height: 35px;
            width: 220px;
            padding-left: 10px;
            outline: none;
            font-size: 15px;
            border: 1px solid gray;
            border-right: none;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;

            
        }
        #search{
            position: absolute;
            height: 100%;
            width: 35px;
            right: -35px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            border: 1px solid gray;
            
        }
        #search:hover{
            background-color: rgb(194, 192, 192);
            transition: all 0.3s ease;
        }
        
        header{
            height: 55px;
            background-color: rgb(90, 207, 90);
            display: flex;
            justify-content: space-between;
           
            padding: 0 60px;
        }
        
        #logo{
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        #logo span:first-child{
            color: rgb(158, 158, 158);
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 40px;
            font-weight: lighter;
            margin-right: 5px;

        }
        #logo span:last-child{
            color:rgb(240, 240, 240);
            font-size: 22px;
            
        }
        .wrap-category {
            display: flex;
            justify-content: space-around;
           
        }
        .child-category{
            text-transform: uppercase;
            text-decoration: none;
            color: rgb(250, 250, 250);
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px; 
        }
        .child-category:hover{
            background-color: green;
        }
        #wrap-list-shop:hover > #list-shop{
            display: block;
        }
        #wrap-list-shop{
            cursor: pointer;
            position: relative;
        }
        #list-shop{
            z-index: 999;
            display: none;
            position: absolute;
            background-color: rgb(90, 207, 90);
            list-style: none;
            top: 0;
            transform: translate(0,55px);
            width: 220px;
            border: none;
            box-shadow: 0px 1px 5px 0px black;
            
        }
        #list-shop li{
            padding: 10px 8px ;
        }
        #list-shop li:hover{
            background-color: white;
            color: black;
            transition: all 0.3s ease;
        }
        
        #wrap-list-shop span{
            margin-left: 5px;
        }

        #list-shop a{
            text-decoration: none;
            color: white;
        }
        main{
            margin: 20px 60px;
            overflow: hidden;
            background-color: rgba(194, 191, 191, 0.1);

        }
        body{
            overflow-y: scroll;
        }
        
       
        .intro{
            display: flex;
            align-items: center;
            animation: scrollimg 100s ease infinite;
        
        }
        
        @keyframes scrollimg{
            0%{
                transform: translateX(0);
            }
            4.1666667%{
                transform: translateX(0);
            }
            8.33333%{
                transform: translateX(-100%);
            }
            12.5%{
                transform: translateX(-100%);
            }
            16.66666667%{
                transform: translateX(-200%);
            }
            20.8333333%{
                transform: translateX(-200%);
            }
            25%{
                transform: translateX(-300%);
            }
            29.1666667%{
                transform: translateX(-300%);
            }
            33.33333336%{
                transform: translateX(-400%);
            }
            37.5%{
                transform: translateX(-400%);
            }
            41.66666667%{
                transform: translateX(-500%);
            }
            45.83333336%{
                transform: translateX(-500%);
            }
            50%{
                transform: translateX(-500%);
            }
            54.16666666667%{
                transform: translateX(-500%);
            }
            58.33333336%{
                transform: translateX(-400%);
            }
            62.5%{
                transform: translateX(-400%);
            }
            66.66666667%{
                transform: translateX(-300%);
            }
            70.8333333334%{
                transform: translateX(-300%);
            }
            79.16666667%{
                transform: translateX(-200%);
            }
            83.3333334%{
                transform: translateX(-200%);
            }
            87.5%{
                transform: translateX(-100%);
            }
            91.6666667%{
                transform: translateX(-100%);
            }
            95.83333334%{
                transform: translateX(0);
            }
            100%{
                transform: translateX(0);
            }



        }
        .wrap-donor{
            display: flex;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 15px;
        }
        .wrap-donor a{
            width: 32%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items:center;
            height: 180px;
            position: relative;
            box-shadow: 0px 0px 5px 0px rgb(99, 99, 99);
        }
        .wrap-donor a p{
            position: absolute;
            width: 100%;  
            height: 50px;
            background-color: rgb(90, 207, 90);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            bottom: 0;
            box-shadow: 0px 0px 5px 0px black;
            transform: translateY(100%);

        }
        
        .wrap-show{
            margin-top: 100px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        aside .wrap-danhmuc{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        .wrap-danhmuc a{
            text-decoration: none;
            text-transform: uppercase;
            color: black;
            display: inline-block;
            padding: 10px 13px;
            transition: all 0.3s ease;
        }
        aside h1{
            font-weight: 500;
            margin-left: 13px;
            margin-bottom: 10px;
        }
        .wrap-danhmuc a:hover{
            background-color: rgb(238, 238, 238);
            color: rgb(90, 207, 90);
        }
        .wrap-product h1{
            font-weight: 500;
        }
        .wrap-product{
            width: 80%;
            
        }
        .product{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
           
            
        }
        .product img{
            height: 200px;
            width: auto;
        }
        .san-pham{
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 2px rgb(0, 0, 0,.4);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            padding: 15px 5px 15px 5px;
            text-decoration: none;
            width: 300px;
            height: 350px;
            margin: 30px 0px;

            
        }
        .name-product{
            font-size: 16px;
            font-weight: 500;
            color: black;
            text-align: center;
        }
        .price-product{
            color: black;
        }
        .order-product{
            border: none;
            outline: none;
            background-color: rgb(255, 146, 43);
            color: white;
            height: 35px;
            width: 120px;
            border-radius: 5px;
            cursor: pointer;
            
        }
        
        
        .more-info{
            background-color: rgb(90, 207, 90);
            text-decoration: none;
            color: white;
            height: 35px;
            width: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
            border-radius: 5px;
        }
        .more-info:hover{
            background-color: rgb(59, 230, 59) ;
        }
        .more-order{
            display: flex;

        }
        #eye-more{
            margin-right: 5px;
        }
        .order-product:hover{
            background-color:rgb(241, 123, 69);
        }
        .wrap-divide{
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .wrap-divide a{
            text-decoration: none;
            color: black;
            padding: 10px 15px;
            border: 1px solid gray;
            margin-right: 10px;
        }
    

        
        
    }   
    </style>
    <div class="login-register">
        <div>
            <input type="text" name="" id="content-search" placeholder="Tìm kiếm...">
            <button id="search"><i class="fa-solid fa-magnifying-glass"></i></button>

        </div>
        <div>
            <a href="index.php?controller=Process&action=register" id="register">Đăng kí</a>
            <a href="" id="login">Đăng nhập</a>
            <a href="" id="cart">Giỏ hàng <span><i class="fa-solid fa-cart-shopping"></i></span></a>
            
        </div>
    </div>
    <header>
        <a href="" id="logo">
            <span>Laptop</span>
            <span>Store</span>
        </a>
        <div class="wrap-category">
            <a href="" class="child-category">Trang chủ</a>
            <div href="" class="child-category" id="wrap-list-shop">Cửa hàng <span><i class="fa-solid fa-angle-down"></i></span>
                <ul id="list-shop">
                    <a href=""><li>LAPTOP</li></a>
                    <a href=""><li>PC ĐỒNG BỘ & PC GAMING</li></a>
                    <a href=""><li>TB NGHE NHÌN & GIẢI TRÍ</li></a>
                    <a href=""><li>LINH KIỆN ĐIỆN THOẠI</li></a>
                    <a href=""><li>THIẾT BỊ LƯU TRỮ</li></a>
                    <a href=""><li>THIẾT BỊ MẠNG</li></a>
                    <a href=""><li>CAMERA GIÁM SÁT</li></a>
                    <a href=""><li>PHỤ KIỆN CÁC LOẠI</li></a>
                    <a href=""><li>THIẾT BỊ VĂN PHÒNG</li></a>
                </ul>
            </div>
            <a href="" class="child-category">Miễn phí dịch chuyển</a>
            <a href="" class="child-category">Bảo hành tận nơi</a>
            <a href="" class="child-category">Liên hệ</a>
        </div>
    </header>

    <main>
        <div class="wrap-intro">
            <div class="intro">
                <img src="./img/dell-1200-300-1200x300.png" alt="">
                <img src="./img/hp-1200-300-1200x300.png" alt="">
                <img src="./img/itel-1200-300-1200x300.png" alt="">
                <img src="./img/macbook-1200-300-1200x300-1.png" alt="">
                <img src="./img/Masstel-1200-300-1200x300-1.png" alt="">
                <img src="./img/asus-1200-300-1200x300-1.png" alt="">
            </div>
            <div class="wrap-donor">
                <a href="" id="acer">
                    <img src="./img/acer.jpg" alt="">
                    <p>Thương hiệu nối tiếng</p>
                </a>
                <a href="" id="lenovon">
                    <img src="./img/lenovopng.png" alt="">
                    <p>Thương hiệu nối tiếng</p>
                </a>
                <a href="" id="dell">
                    <img src="./img/dell.jpg" alt="">
                    <p>Thương hiệu nối tiếng</p>
                </a>
            </div>
            
        </div>
        <div class="wrap-show">
            <div class="wrap-product">
                <h1>Danh sách laptop mới nhất</h1>
                <div class="father-product">

                
                <div class="product">
                    <!-- <div href="" class="san-pham">
                        <img src="./img/9152_lenovo_ip_1_11igl05__7.jpg" alt="" class="img-product">
                        <p class="name-product">Macbook Air 13 MQD32SA/A (2017)</p>
                        <p class="price-product">7.490.000 VND</p>
                        <div id="more-order">
                            <a href="" class="more-info">Xem thêm</a>
                            <button class="order-product"><span><i class="fa-solid fa-cart-shopping"></i></span> Đặt hàng</button>
                        </div>
                        
                    </div> -->
                
                    <?php
                        foreach ($val as $item){
                            echo "<div class='san-pham'>";
                            echo "<img src='./img/9152_lenovo_ip_1_11igl05__7.jpg' alt=' class='img-product'>";
                            echo "<p class='name-product'>".$item['ten_san_pham']."</p>";
                            echo "<p class='price-product'>".$item['don_gia']." VND"."</p>";
                            echo "<div class='more-order'>";
                            echo "<a href='index.php?controller=Process&action=showid&id=".$item['id']."' class='more-info'><span id='eye-more'><i class='fa-solid fa-eye'></i></span>Xem thêm</a>";
                            echo "<button class='order-product'><span><i class='fa-solid fa-cart-shopping'></i></span> Đặt hàng</button></div>";
                            echo "</div>";
                        }
                    ?>
                    
                </div>
                    <div class="wrap-divide">
                        <?php 
                            for($i=1;$i<=12;$i++){
                                echo "<a href='index.php?controller=Home&action=index&page=$i' id='page$i'>$i</a>";
                                if (isset($_REQUEST["page"])){
                                    echo "<style>
                                            #page{$_REQUEST['page']}{
                                                background-color:green;
                                                color:white;
                                            }
                                        </style>";
                                }
                                else{
                                    echo "<style>
                                            #page1{
                                                background-color:green;
                                                color:white;
                                            }

                                        </style>";  
                                }
                                
                            }
                         ?>
                    </div>
                </div>
            </div>
            <aside>
                <h1>Danh mục</h1>
                <div class="wrap-danhmuc">
                    <a href="">Laptop</a>
                    <a href="">PC ĐỒNG BỘ - PC GAMING</a>
                    <a href="">TB NGHE NHÌN & GIẢI TRÍ</a>
                    <a href="">linh kiện máy tính</a>
                    <a href="">thiết bị lưu trữ</a>
                    <a href="">thiết bị mạng</a>
                    <a href="">camera quan sát</a>
                    <a href="">phụ kiện các loại</a>
                    <a href="">thiết bị văn phòng</a>
                </div>
            </aside>
        </div>
    </main>
   
</body>
</html>