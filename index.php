<?php
include "model/pdo.php";
include "global.php";
include "model/tour.php";
include "model/danhmuc_mien.php";
include "model/danhmuc_mua.php";

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