<?php
include "model/pdo.php";
include "global.php";
include "model/tour.php";
include "model/danhmuc_mien.php";
include "model/danhmuc_mua.php";
include "model/hinh_anh.php";

$mien = all_danhmuc_mien();
$mua = all_danhmuc_mua();
include "public/header.php";

if (isset ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhsachtour':
            $load_hot_tuor = load_top3_hot_tuor();
            $id_mua = "";
            $id_mien = "";
            if (isset ($_GET['id_mua']) && $_GET['id_mua'] > 0) {
                $id_mua = $_GET['id_mua'];
                $id_mien = "";
                $load_tuor_dm = load_tuor_theo_danhmuc($id_mua, $id_mien);
            } else if (isset ($_GET['id_mien']) && $_GET['id_mien'] > 0) {
                $id_mien = $_GET['id_mien'];
                $id_mua = "";
                $load_tuor_dm = load_tuor_theo_danhmuc($id_mua, $id_mien);
            }
            $load_tuor_dm = load_tuor_theo_danhmuc($id_mua, $id_mien);

            include "public/hottuor.php";
            include "public/danhsach_tour.php";
            break;

        case 'chitiet_tuor':
            if(isset($_GET['id_tuor']) && $_GET['id_tuor'] > 0){
                $id_tuor = $_GET['id_tuor'];
                $loadAnhTuor = all_hinh_anh($id_tuor);
                $load_one_tour = load_one_tour($id_tuor);
                $trunggian_hang_tuor = trunggian_hang_tuor_tuor($id_tuor);
                $trunggian_thoi_gian_tuor = trunggian_thoi_gian_tuor($id_tuor);
                $trunggian_ngay_xuat_phat_tuor = trunggian_ngay_xuat_phat_tuor($id_tuor);
            }
            include "public/chitiet_tuor.php";
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
} else {
    include "public/trangchu.php";
}

include "public/footer.php";
?>