<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc_mua.php";
include "../model/danhmuc_mien.php";
include "../model/tour.php";
include "../model/hang_tour.php";

if (isset ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // Danh sách các mùa
        case 'list_danhmuc_mua':
            $list_danhmuc_mua = all_danhmuc_mua();
            include_once ("danhmuc_mua/list.php");
            break;

        //Thêm danh mục mùa
        case 'add_danhmuc_mua':
            // kiểm tra xem người dùng có click vào nút add hay không
            if (isset ($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_mua = $_POST['ten_mua'];
                insert_danhmuc_mua($ten_mua);
                $thongbao = "Thêm thành công";
            }
            include_once ("danhmuc_mua/add.php");
            break;

        // Sửa danh mục mùa
        case 'suaMua';
            if (isset ($_GET['id_mua']) && ($_GET['id_mua'] > 0)) {
                $mua = load_mot_danhmuc_mua($_GET['id_mua']);
            }
            include_once ("danhmuc_mua/update.php");
            break;

        // Cập nhật mùa
        case 'update_danhmuc_mua':
            // kiểm tra xem người dùng có click vào nút cập nhật hay không
            if (isset ($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_mua = $_POST['ten_mua'];
                $id_mua = $_POST['id_mua'];
                update_mua($id_mua, $ten_mua);
                $thongbao = "Cập nhật thành công";
            }
            $list_danhmuc_mua = all_danhmuc_mua();
            include_once ("danhmuc_mua/list.php");
            break;

        // Xóa mùa
        case 'xoaMua';
            if (isset ($_GET['id_mua']) && ($_GET['id_mua'] > 0)) {
                delete_danhmuc_mua($_GET['id_mua']);
            }
            $list_danhmuc_mua = all_danhmuc_mua();
            include_once ("danhmuc_mua/list.php");
            break;


        // Danh sách các mùa
        case 'list_danhmuc_mien':
            $list_danhmuc_mien = all_danhmuc_mien();
            include_once ("danhmuc_mien/list.php");
            break;

        //Thêm danh mục miền
        case 'add_danhmuc_mien':
            // kiểm tra xem người dùng có click vào nút add hay không
            if (isset ($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_mien = $_POST['ten_mien'];
                insert_danhmuc_mien($ten_mien);
                $thongbao = "Thêm thành công";
            }
            include_once ("danhmuc_mien/add.php");
            break;

        // Sửa danh mục miền
        case 'suaMien';
            if (isset ($_GET['id_mien']) && ($_GET['id_mien'] > 0)) {
                $mien = load_mot_danhmuc_mien($_GET['id_mien']);
            }
            include_once ("danhmuc_mien/update.php");
            break;

        // Cập nhật miền
        case 'update_danhmuc_mien':
            // kiểm tra xem người dùng có click vào nút cập nhật hay không
            if (isset ($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_mien = $_POST['ten_mien'];
                $id_mien = $_POST['id_mien'];
                update_mien($id_mien, $ten_mien);
                $thongbao = "Cập nhật thành công";
            }
            $list_danhmuc_mien = all_danhmuc_mien();
            include_once ("danhmuc_mien/list.php");
            break;

        // Xóa miền
        case 'xoaMien';
            if (isset ($_GET['id_mien']) && ($_GET['id_mien'] > 0)) {
                delete_danhmuc_mien($_GET['id_mien']);
            }
            $list_danhmuc_mien = all_danhmuc_mien();
            include_once ("danhmuc_mien/list.php");
            break;
        
        // Danh sách tour
        case 'list_tour':
            $load_all_tour = load_all_tour();
            include "tour/list.php";
            break;
        
        // Thêm tour
        case 'add_tour':
            $list_danhmuc_mien = all_danhmuc_mien();
            $list_danhmuc_mua = all_danhmuc_mua();
            if (isset ($_POST['add_new_tour']) && ($_POST['add_new_tour'])) {
                $ten_tuor = $_POST['ten_tour'];
                $gia = $_POST['gia'];
                $tong_quan = $_POST['tong_quan'];
                $hanh_trinh = $_POST['hanh_trinh'];
                $so_luong = $_POST['so_luong'];
                $dia_diem = $_POST['dia_diem'];
                $phuong_tien = $_POST['phuong_tien'];
                $id_mien = $_POST['ma_mien'];
                $id_mua = $_POST['ma_mua'];
                add_new_tour($ten_tuor, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $id_mien, $id_mua);
                $thongbao = "Thêm thành công";
            }
            include_once "Tour/add.php";
            break;
        
        case 'sua_tour':
            $list_danhmuc_mien = all_danhmuc_mien();
            $list_danhmuc_mua = all_danhmuc_mua();
            if(isset ($_GET['id_tuor']) && ($_GET['id_tuor'] > 0)){
                $load_one_tour = load_one_tour($_GET['id_tuor']);
            }
            include "tour/update.php";
            break;
        
        case 'update_tour':
            // kiểm tra xem người dùng có click vào nút cập nhật hay không
            if (isset ($_POST['update_tour']) && ($_POST['update_tour'])) {
                $ten_tuor = $_POST['ten_tour'];
                $gia = $_POST['gia'];
                $tong_quan = $_POST['tong_quan'];
                $hanh_trinh = $_POST['hanh_trinh'];
                $so_luong = $_POST['so_luong'];
                $dia_diem = $_POST['dia_diem'];
                $phuong_tien = $_POST['phuong_tien'];
                $id_mien = $_POST['ma_mien'];
                $id_mua = $_POST['ma_mua'];
                $id_tuor = $_POST['id_tuor'];
                update_tour($ten_tuor, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $id_mien, $id_mua, $id_tuor);
                $thongbao = "Cập nhật thành công";
            }
            $load_all_tour = load_all_tour();
            include "tour/list.php";
            break;

        case 'xoa_tour';
            if (isset ($_GET['id_tuor']) && ($_GET['id_tuor'] > 0)) {
                delete_tour($_GET['id_tuor']);
            }
            $load_all_tour = load_all_tour();
            include "tour/list.php";
            break;
        
        
        //Hiển thi danh sách hạng tour
        case 'list_hang_tuor':
            $list_hang_tuor = all_hang_tuor();
            include_once ("hang_tour/list.php");
            break;
        
        // Thêm hạng Tuor
        case 'add_hang_tuor':
            $load_all_tour = load_all_tour();
            if (isset ($_POST['add_hang_tuor']) && ($_POST['add_hang_tuor'])) {
                $ten_hang_tuor = $_POST['ten_hang_tuor'];
                $muc_tang = $_POST['muc_tang'];
                $id_tuor = $_POST['id_tuor'];
                add_hang_tour($ten_hang_tuor,$muc_tang,$id_tuor);
                $thongbao = "Thêm thành công";
            }
            include_once "hang_tour/add.php";
            break;
        
        // Xóa Hạng Tour
        case 'xoa_hang_tour';
        if (isset ($_GET['id_hang_tuor']) && ($_GET['id_hang_tuor'] > 0)) {
            delete_hang_tour($_GET['id_hang_tuor']);
        }
        $list_hang_tuor = all_hang_tuor();
        include "hang_tour/list.php";
        break;

        // Sửa Hạng tour
        case 'sua_hang_tour':
            $load_all_tour = load_all_tour();
            if(isset ($_GET['id_hang_tuor']) && ($_GET['id_hang_tuor'] > 0)){
                $load_one_hang_tour = load_one_hang_tour($_GET['id_hang_tuor']);
            }
            include "hang_tour/update.php";
            break;
        // Update hạng tour
        case 'update_hang_tour':
            // kiểm tra xem người dùng có click vào nút cập nhật hay không
            if (isset ($_POST['update_hang_tour']) && ($_POST['update_hang_tour'])) {
                $ten_hang_tuor = $_POST['ten_hang_tuor'];
                $muc_tang = $_POST['muc_tang'];
                $id_tuor = $_POST['id_tuor'];
                $id_hang_tuor = $_POST['id_hang_tuor'];
                update_hang_tour($ten_hang_tuor,$muc_tang,$id_tuor,$id_hang_tuor);
                $thongbao = "Cập nhật thành công";
            }
            $list_hang_tuor = all_hang_tuor();
            include "hang_tour/list.php";
            break;



        default:
            # code...
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>