<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            ' . $xoasp_th . '
        </tr>';

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;


        if ($del == 1) {
            $xoasp_td = '<th><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></th>';
        } else {
            $xoasp_td = '';
        }
        echo '
                <tr>
                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $ttien . '</td>
                    ' . $xoasp_td . '
            
                </tr>';
        $i += 1;
    }
    echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>

                <td>' . $tong . '</td>
                ' . $xoasp_td2 . '
            </tr>';
}

//bill chi tiết
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;


    echo '<tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>';

    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];

        echo '
                <tr>
                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td>' . $cart['name'] . '</td>
                    <td>' . $cart['price'] . '</td>
                    <td>' . $cart['soluong'] . '</td>
                    <td>' . $cart['thanhtien'] . '</td>
                </tr>';
        $i += 1;
    }
    echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>

                <td>' . $tong . '</td>
            </tr>';
}

// TỔNG ĐƠN HÀNG
function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}


function insert_cart($id_user, $id_product, $image, $name, $price, $sugar, $size, $ice, $topping, $quantity, $cash, $id_bill,$id_giohang)
{
    $sql = "INSERT INTO cart (iduser ,idpro ,img,name,price,sugar,size,ice,topping,soluong,thanhtien,idbill,id_giohang ) VALUES ($id_user,'$id_product','$image','$name','$price','$sugar','$size','$ice','$topping','$quantity','$cash','$id_bill','$id_giohang') ";
    pdo_execute($sql);
}
function  insert_giohang($id, $id_user, $product_name, $image, $sugar, $size, $ice, $topping, $product_price, $quantity, $total, $status)
{
    $sql = "INSERT INTO giohang (idsp,id_user ,tensp,image,sugar,size,ice,topping,gia,soluong,thanhtien,status) VALUES ('$id','$id_user','$product_name','$image','$sugar','$size','$ice','$topping','$product_price','$quantity','$total','$status') ";
    pdo_execute($sql);
}

function select_cart_idBill($id_bill)
{
    $sql = "SELECT * FROM cart WHERE idbill  = $id_bill";
    $result = pdo_query($sql);
    return $result;
}
function  delete_giohang($id)
{
    $sql = "DELETE FROM giohang WHERE id = $id";
    pdo_execute($sql);
}
function  upgrade_quantity_giohang($id, $quantity)
{
    $sql = "UPDATE giohang SET soluong ='$quantity' WHERE id =$id";
    pdo_execute($sql);
}
function  upgrade_quantity_total_giohang($id, $quantity,$total)
{
    $sql = "UPDATE giohang SET soluong ='$quantity',thanhtien = '$total' WHERE id =$id";
    pdo_execute($sql);
}
function  upgrade_status_giohang($status, $id)
{
    $sql = "UPDATE giohang SET status ='$status' WHERE id =$id";
    pdo_execute($sql);
}

function loadall_cart($idbill)
{
    $sql = "select*from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_idUser($idUser)
{
    $sql = "SELECT * FROM giohang WHERE id_user= $idUser AND status = 1 ";
    $bill = pdo_query($sql);
    return $bill;
}
// function loadall_cart_idUser_done($idUser)
// {
//     $sql = "SELECT * FROM giohang WHERE id_user= $idUser AND status = 3 ";
//     $bill = pdo_query($sql);
//     return $bill;
// }
function count_giohang_idUser($idUser)
{
    $sql = "SELECT * FROM giohang WHERE id_user= $idUser AND status = 1 ";
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_cart_count($idbill)
{
    $sql = "select*from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_alreadyHav_giohang($sugarValue,$iceValue,$sizeValue,$toppingValue,$idValue,$id_userValue){
    $sql = "SELECT * FROM giohang WHERE id_user= $id_userValue AND idsp  = $idValue AND sugar = $sugarValue AND size = $sizeValue AND ice = $iceValue AND topping = $toppingValue AND status = 1  ";
    $bill = pdo_query_one($sql);
    return $bill;

}





function handleInsertToCart($productValue, $priceValue, $sugarValue, $iceValue, $sizeValue, $toppingValue, $imageValue, $idValue, $id_userValue, $quantityValue)
{

    $product_name = isset($productValue) ? $productValue : "";
    $product_price = isset($priceValue) ? $priceValue : 1;
    $sugar = isset($sugarValue) ? $sugarValue : 1;
    $ice = isset($iceValue) ? $iceValue : 1;
    $size = isset($sizeValue) ? $sizeValue : 1;
    $topping = isset($toppingValue) ? $toppingValue : 1;
    $image = isset($imageValue) ? $imageValue : "";
    $id = isset($idValue) ? $idValue : 0;
    $id_user = $id_userValue;
    if(isset($quantityValue) && $quantityValue != ""){
        $quantity =  $quantityValue ;

    }
    else{
        $quantity = 1;
    }
    if($topping == null){
        $topping = 0;
    }
    $stringTopping = 0;
    if (is_array($topping) && $topping != null) {
        for ($i = 0; $i < count($topping); $i++) {
            $stringTopping += floatval($topping[$i]);
        }
    }
    else{
        $stringTopping = 0;
    }
    $result = ($product_price + floatval($sugar) + floatval($size) + floatval($ice) + floatval($stringTopping)) * floatval($quantity);
    $status = 1;
    $product_giohang = loadall_alreadyHav_giohang(
        $sugarValue,
        $iceValue,
        $sizeValue,
        $stringTopping,
        $idValue,
        $id_userValue,
    );
    
    if(is_array($product_giohang) && $product_giohang !== null){
        $idGioHang = $product_giohang['id'];
        $quantityBeforeProduct = $product_giohang['soluong'];
        $totalQuantity = $quantityBeforeProduct + $quantity;
        $priceBeforeProduct = $product_giohang['gia'];
        $pricBeforeProduct = $product_giohang['thanhtien'];
        $priBeforeProduct = $product_giohang['soluong'];        
        $totalBeforeProduct = $pricBeforeProduct / $priBeforeProduct ;
        $total = $totalBeforeProduct * $totalQuantity;
        upgrade_quantity_total_giohang($idGioHang, $totalQuantity,$total);
    }
    else{
        insert_giohang($id, $id_user, $product_name, $image, $sugar, $size, $ice, $stringTopping, $product_price, $quantity, $result, $status);
    }


         
    
}
