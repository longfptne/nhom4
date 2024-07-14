<?php
ob_start();
session_start();
// if(isset($_SESSION['user'])&&($_SESSION['user']['role'])){\
include "../model/pdo.php";
include "../model/danhmuc.php";
// include "../model/thongke";
include "../model/sanpham.php";
include "../model/bill.php";
include "../model/cart.php";
include "header.php";
$sum_total_cash = loadall_bill_by_day();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra người dùng có lick ko 
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST["tenloai"];
                insert_danhmuc($tenloai);
                $thongbao = " ban da them thanh cong ";

            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            if (isset($_POST['SubmitFindCate'])) {
                $id = $_POST['findCate'];
                $listdanhmuc = loadall_danhmuc($id);
            } else {
                $listdanhmuc = loadall_danhmuc(0);

            }
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc(0);
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $tenloai = $_POST["tenloai"];
                $id = $_POST["id"];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc(0);
            include "danhmuc/list.php";
            break;
        case 'addsp':
            // kiểm tra xem người dùng có click vào nút add không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST["iddm"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $mota = $_POST["mota"];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date_product = date('H:i:sa d/m/Y');
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm, $date_product);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc(0);
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                //$kyw khai báo key word 
                $kyw = $_POST['kyw'];// key word = $_post kyw
                $iddm = $_POST['iddm'];// key word = $_post iddm
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc(0);
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc(0);
            include "sanpham/update.php";
            break;
        case 'updatesp':

            if (isset($_POST['capnhat'])) {
                $id = $_POST["id"];
                $iddm = $_POST["iddm"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $mota = $_POST["mota"];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc(0);
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'listbill':

            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $ttdh = $_POST["ttdh"];
                $id = $_POST["id"];
                // $id = 121;

                update_bill($id, $ttdh);
                // $thongbao = $id.",".$ttdh;
                $listbill = loadall_bill(0);

            }

            $listbill = loadall_bill(0);
            include "bill/listbill.php";

            break;
        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill("", 0);
            include "bill/listbill.php";
            break;


    }
} else {
    include "home.php";
}

// }