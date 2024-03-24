<?php
session_start();
include "model/pdo.php";
include "global.php";
include "model/tour.php";
include "model/danhmuc_mien.php";
include "model/danhmuc_mua.php";
include "model/hinh_anh.php";
include "model/taikhoan.php";

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

        case 'lien_he':
            include "public/lienhe.php";
            break;

        case 'gioi_thieu':
            include "public/gioithieu.php";
            break;

        case 'taiKhoan_Tourcuatoi':
            include "public/taiKhoanvatourcuatoi.php";
            break;

             // Đăng ký
        case 'dang_ky':
            if (isset($_POST['dangky'])) {
                $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';
                $mat_khau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
        
                if (!empty($ho_ten) && !empty($mat_khau) && !empty($email)) {
                    insert_taikhoan($ho_ten, $mat_khau, $email);
                    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập";
                } else {
                    $thongbao = "Vui lòng điền đầy đủ thông tin đăng ký.";
                }
            }
            include "public/dangki_dangnhap/dangki.php";
            break;

        // Đăng nhập
        case 'dang_nhap':
            if (isset($_POST['dangnhap']) && !empty($_POST['ho_ten']) && !empty($_POST['mat_khau'])) {
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['mat_khau'];
                $checkuser = check_user($ho_ten, $mat_khau);
                if ($checkuser !== false) {
                $_SESSION['ho_ten'] = $checkuser;
                 $thongbao = "Đăng nhập thành công!";
            header('Location:public/trangchu.php');
                exit;
                } else {
            $thongbao = "Tài khoản không tồn tại hoặc mật khẩu không đúng!";
                }
            }
         include "public/dangki_dangnhap/dangnhap.php";
         break;

       // Tìm tour
        case 'tim_tour':
            if(isset($_POST['word']) && ($_POST['word']!="")){
                $word = $_POST['word'];
            } else {
                $word = "";
            }
                if(isset($_GET['id_tuor']) && ($_GET['id_tuor'] > 0)){
                    $id_tuor = $_GET['id_tuor'];
                } else {
                    $id_tuor = 0;
                 }

            $load_all_tour = load_all_tour_tim_kiem($word, $id_tuor);

            if(empty($load_all_tour)){
            $error_message = "Không tìm thấy tour phù hợp.";
            }
        include "public/timkiem_tour.php";
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