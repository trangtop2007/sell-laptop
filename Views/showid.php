<?php
$Dulieu=$data["data"];
$id=$_REQUEST["id"];
$result=$Dulieu->getId($id);
while($row=$result->fetch_assoc()){
    $val=$row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    show product
    <table>
        <thead>
            <th>id</th>
            <th>cpu</th>
            <th>don_gia</th>
            <th>don_vi_ban</th>
            <th>don_vi_kho</th>
            <th>dung_luong_pin</th>
            <th>he_dieu_hanh</th>
            <th>man_hinh</th>
            <th>ram</th>
            <th>ten_san_pham</th>
            <th>thiet_ke</th>
            <th>thong_tin_bao_hanh</th>
            <th>thong_tin_chung</th>
            <th>ma_danh_muc</th>
            <th>ma_hang_sx</th>
        </thead>
        <?php
         
        echo "<tbody>
                <tr>
                    <td>".$val['id']."</td>".
                    "<td>". $val['cpu']."</td>".
                    "<td>". $val['don_gia']."</td>".
                    "<td>". $val['don_vi_ban']."</td>".
                    "<td>". $val['don_vi_kho']."</td>".
                    "<td>". $val['dung_luong_pin']."</td>".
                    "<td>". $val['he_dieu_hanh']."</td>".
                    "<td>". $val['man_hinh']."</td>".
                    "<td>". $val['ram']."</td>".
                    "<td>". $val['ten_san_pham']."</td>".
                    "<td>". $val['thiet_ke']."</td>".
                    "<td>". $val['thong_tin_bao_hanh']."</td>".
                    "<td>". $val['thong_tin_chung']."</td>".
                    "<td>". $val['ma_danh_muc']."</td>".
                    "<td>". $val['ma_hang_sx']."</td>".
                "</tr>".
            "</tbody>"
        ?>
    </table>
    
</body>
</html>