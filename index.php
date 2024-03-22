<?php
include "model/pdo.php";
include "global.php";
include "public/header.php";
include "model/tour.php";
include "model/danhmuc_mien.php";
include "model/danhmuc_mua.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhsachtour':
            $mien = all_danhmuc_mien();
            $mua = all_danhmuc_mua();
            $load_hot_tuor = load_top3_hot_tuor();
            include "public/hottuor.php";
            include "public/danhsach_tour.php";
            break;

        case 'dang_nhap':
            include "public/dangki_dangnhap/dangnhap.php";
            break;
        
        case 'dang_ki':
            include "public/dangki_dangnhap/dangki.php";
            break;
        
        case 'lien_he':
            include "public/lienhe.php";
            break;
        
        case 'gioi_thieu':
            include "public/gioithieu.php";
            break;

        case 'taiKhoan_Tourcuatoi':
            include "public/taiKhoanvatourcuatoi.php";
            break;

        default:
            # code...
            break;
    }
}else{
    include "public/trangchu.php";
}

include "public/footer.php";
?>