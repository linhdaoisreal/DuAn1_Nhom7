<?php
ob_start();
session_start();
include "header.php";
include "../global.php";
include "../model/pdo.php";
include "../model/danhmuc_mua.php";
include "../model/danhmuc_mien.php";
include "../model/tour.php";
include "../model/hinh_anh.php";
include "../model/hang_tour.php";
include "../model/ngay_xuat_phat.php";
include "../model/thoi_gian.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/don_hang.php";
include "../model/thongke.php";

if(isset($_SESSION['ho_ten'])) {
   if(isset($_SESSION['vai_tro']) && $_SESSION['ho_ten']['vai_tro']==1){
    echo $_SESSION['vai_tro'];
    die;
    if (isset($_GET['act'])) {
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
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ten_mua = $_POST['ten_mua'];
                    insert_danhmuc_mua($ten_mua);
                    $thongbao = "Thêm thành công";
                }
                include_once ("danhmuc_mua/add.php");
                break;
    
            // Sửa danh mục mùa
            case 'suaMua';
                if (isset($_GET['id_mua']) && ($_GET['id_mua'] > 0)) {
                    $mua = load_mot_danhmuc_mua($_GET['id_mua']);
                }
                include_once ("danhmuc_mua/update.php");
                break;
    
            // Cập nhật mùa
            case 'update_danhmuc_mua':
                // kiểm tra xem người dùng có click vào nút cập nhật hay không
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
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
                if (isset($_GET['id_mua']) && ($_GET['id_mua'] > 0)) {
                    // delete_tuor_theo_IDMua($_GET['id_mua']);
                    delete_danhmuc_mua($_GET['id_mua']);
                    move_tuor_theoMua_To_Uncategorize($_GET['id_mua']);
                }
                $list_danhmuc_mua = all_danhmuc_mua();
                include_once ("danhmuc_mua/list.php");
                break;
    
            case 'khoiPhucMua':
                if (isset($_GET['id_mua']) && ($_GET['id_mua'] > 0)) {
                    khoiphuc_danhmucmua($_GET['id_mua']);
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
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ten_mien = $_POST['ten_mien'];
                    insert_danhmuc_mien($ten_mien);
                    $thongbao = "Thêm thành công";
                }
                include_once ("danhmuc_mien/add.php");
                break;
    
            // Sửa danh mục miền
            case 'suaMien';
                if (isset($_GET['id_mien']) && ($_GET['id_mien'] > 0)) {
                    $mien = load_mot_danhmuc_mien($_GET['id_mien']);
                }
                include_once ("danhmuc_mien/update.php");
                break;
    
            // Cập nhật miền
            case 'update_danhmuc_mien':
                // kiểm tra xem người dùng có click vào nút cập nhật hay không
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
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
                if (isset($_GET['id_mien']) && ($_GET['id_mien'] > 0)) {
                    delete_danhmuc_mien($_GET['id_mien']);
                    move_tuor_theoMien_To_Uncategorize($_GET['id_mien']);
                }
                $list_danhmuc_mien = all_danhmuc_mien();
                include_once ("danhmuc_mien/list.php");
                break;
    
            case 'khoiPhucMien':
                if (isset($_GET['id_mien']) && ($_GET['id_mien'] > 0)) {
                    khoiphuc_danhmucmien($_GET['id_mien']);
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
                $listThoiGian = all_thoi_gian();
                if (isset($_POST['add_new_tour']) && ($_POST['add_new_tour'])) {
                    $ten_tuor = $_POST['ten_tour'];
                    $gia = $_POST['gia'];
                    $tong_quan = $_POST['tong_quan'];
                    $hanh_trinh = $_POST['hanh_trinh'];
                    $so_luong = $_POST['so_luong'];
                    $dia_diem = $_POST['dia_diem'];
                    $phuong_tien = $_POST['phuong_tien'];
                    $xuat_phat = $_POST['xuat_phat'];
                    $id_mien = $_POST['ma_mien'];
                    $id_mua = $_POST['ma_mua'];
                    $id_thoi_gian = $_POST['ma_thoi_gian'];
    
                    $hinh_anh_mau = $_FILES['hinh_anh_mau']['name'];
                    $target_dir = "../gallery/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh_mau"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_anh_mau"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    add_new_tour(
                        $ten_tuor,
                        $gia,
                        $tong_quan,
                        $hanh_trinh,
                        $so_luong,
                        $dia_diem,
                        $phuong_tien,
                        $xuat_phat,
                        $id_mien,
                        $id_mua,
                        $id_thoi_gian,
                        $hinh_anh_mau
                    );
                    $thongbao = "Thêm thành công";
                }
                include_once "Tour/add.php";
                break;
    
            case 'sua_tour':
                $list_danhmuc_mien = all_danhmuc_mien();
                $list_danhmuc_mua = all_danhmuc_mua();
                $listThoiGian = all_thoi_gian();
                if (isset($_GET['id_tuor']) && ($_GET['id_tuor'] > 0)) {
                    $load_one_tour = load_one_tour($_GET['id_tuor']);
                }
                include "tour/update.php";
                break;
    
            case 'update_tour':
                // kiểm tra xem người dùng có click vào nút cập nhật hay không
                if (isset($_POST['update_tour']) && ($_POST['update_tour'])) {
                    $ten_tuor = $_POST['ten_tour'];
                    $gia = $_POST['gia'];
                    $tong_quan = $_POST['tong_quan'];
                    $hanh_trinh = $_POST['hanh_trinh'];
                    $so_luong = $_POST['so_luong'];
                    $dia_diem = $_POST['dia_diem'];
                    $phuong_tien = $_POST['phuong_tien'];
                    $xuat_phat = $_POST['xuat_phat'];
                    $id_mien = $_POST['ma_mien'];
                    $id_mua = $_POST['ma_mua'];
                    $id_thoi_gian = $_POST['ma_thoi_gian'];
                    $id_tuor = $_POST['id_tuor'];
    
                    $hinh_anh_mau = $_FILES['hinh_anh_mau']['name'];
                    $target_dir = "../gallery/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh_mau"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_anh_mau"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    update_tour(
                        $ten_tuor,
                        $gia,
                        $tong_quan,
                        $hanh_trinh,
                        $so_luong,
                        $dia_diem,
                        $phuong_tien,
                        $id_mien,
                        $id_mua,
                        $id_thoi_gian,
                        $xuat_phat,
                        $id_tuor,
                        $hinh_anh_mau
                    );
                    $thongbao = "Cập nhật thành công";
                    // }
                }
                $load_all_tour = load_all_tour();
                include "tour/list.php";
                break;
    
            case 'xoa_tour';
                if (isset($_GET['id_tuor']) && ($_GET['id_tuor'] > 0)) {
                    delete_hinh_anh_tuor($_GET['id_tuor']);
                    delete_tuor_nxp($_GET['id_tuor']);
                    delete_don_hang_theoTour($_GET['id_tuor']);
                    delete_tour($_GET['id_tuor']);
    
                }
                $load_all_tour = load_all_tour();
                include "tour/list.php";
                break;
    
            //Thêm hình ảnh
            case 'add_hinh_anh':
                // kiểm tra xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ten_hinh_anh = $_FILES['ten_hinh_anh']['name'];
                    $target_dir = "../gallery/";
                    $target_file = $target_dir . basename($_FILES["ten_hinh_anh"]["name"]);
                    if (move_uploaded_file($_FILES["ten_hinh_anh"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    $id_tour = $_POST['id_tour'];
                    insert_hinh_anh($ten_hinh_anh, $id_tour);
                    $thongbao = "Thêm thành công";
                }
                $load_ten_tour = ten_tour();
                include_once ("hinh_anh/add.php");
                break;
    
            // Danh sách hình ảnh
            case 'list_hinh_anh':
                //Tìm kiếm hình ảnh theo tour
                if (isset($_POST['listsearch']) && ($_POST['listsearch'])) {
                    // $keyword=$_POST['keyword'];
                    $id_tour = $_POST['id_tour'];
                } else {
                    // $keyword='';
                    $id_tour = 0;
                }
                $load_ten_tour = ten_tour();
                // Load danh sách ảnh
                $list_hinh_anh = all_hinh_anh($id_tour);
                include_once ("hinh_anh/list.php");
                break;
    
            // Sửa hình ảnh
            case 'suaHinhAnh';
                if (isset($_GET['id_hinh_anh']) && ($_GET['id_hinh_anh'] > 0)) {
                    $hinh_anh = load_mot_hinh_anh($_GET['id_hinh_anh']);
                }
                $load_ten_tour = ten_tour();
                include_once ("hinh_anh/update.php");
                break;
    
            // Cập nhật hình ảnh
            case 'update_hinh_anh':
                // kiểm tra xem người dùng có click vào nút cập nhật hay không
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id_hinh_anh = $_POST['id_hinh_anh'];
                    $ten_hinh_anh = $_FILES['ten_hinh_anh']['name'];
                    $target_dir = "../gallery/";
                    $target_file = $target_dir . basename($_FILES["ten_hinh_anh"]["name"]);
                    if (move_uploaded_file($_FILES["ten_hinh_anh"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    $id_tour = $_POST['id_tour'];
                    update_hinh_anh($id_hinh_anh, $ten_hinh_anh, $id_tour);
                    $thongbao = "Cập nhật thành công";
                }
                $list_hinh_anh = all_hinh_anh($id_tour);
                include_once ("hinh_anh/list.php");
                break;
    
            case 'xoaHinhAnh';
                if (isset($_GET['id_hinh_anh']) && ($_GET['id_hinh_anh'] > 0)) {
                    delete_hinh_anh($_GET['id_hinh_anh']);
                }
                $list_hinh_anh = all_hinh_anh();
                include_once ("hinh_anh/list.php");
                break;
    
            //Ngày xuất phát
            case 'list_ngay_xuat_phat':
                $listNgayXuatPhat = all_ngay_xuat_phat();
                include_once ("ngay_xuat_phat/list.php");
                break;
    
            case 'add_ngay_xuat_phat':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ngay = $_POST['ngay'];
                    insert_ngay_xuat_phat($ngay);
                    $thongbao = "Thêm thành công";
                }
                include_once ("ngay_xuat_phat/add.php");
                break;
    
            case 'suaNgayXuatPhat':
                if (isset($_GET['id_ngay']) && $_GET['id_ngay'] > 0) {
                    $ngayXuatPhat = load_mot_ngay_xuat_phat($_GET['id_ngay']);
                }
                include_once ("ngay_xuat_phat/update.php");
                break;
    
            case 'update_ngay_xuat_phat':
                // kiểm tra xem người dùng có click vào nút cập nhật hay không
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id_ngay = $_POST['id_ngay'];
                    $ngay = $_POST['ngay'];
                    update_ngay_xuat_phat($id_ngay, $ngay);
                    $thongbao = "Cập nhật thành công";
                }
                $listNgayXuatPhat = all_ngay_xuat_phat();
                include_once ("ngay_xuat_phat/list.php");
                break;
    
            case 'xoaNgayXuatPhat':
                if (isset($_GET['id_ngay']) && ($_GET['id_ngay'] > 0)) {
                    delete_nxp_to_nxp($_GET['id_ngay']);
                    delete_ngay_xuat_phat($_GET['id_ngay']);
                }
                $listNgayXuatPhat = all_ngay_xuat_phat();
                include_once ("ngay_xuat_phat/list.php");
                break;
    
            //Trung gian ngày xuất phát
            case 'list_trung_gian_nxp':
                $listTrungGianNXP = load_all_trunggian_nxp();
                include ("quanly_trung_gian/trunggian_nxp/list.php");
                break;
    
            case 'load_trung_gian_nxp':
                $tuor = load_all_tour();
                $nxp = all_ngay_xuat_phat();
                if (isset($_GET['id_tuor']) && ($_GET['id_tuor'] > 0)) {
                    $load_one_tour = load_one_tour($_GET['id_tuor']);
                }
                include ("trunggian_nxp/add.php");
                break;
    
            case 'add_trung_gian_nxp':
    
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $id_tuor = $_POST['id_tuor'];
                    $id_ngay = $_POST['id_ngay'];
                    insert_trunggian_nxp($id_tuor, $id_ngay);
                    $thongbao = "Thêm thành công";
                }
    
                $load_all_tour = load_all_tour();
                include ("Tour/list.php");
                break;
    
            case 'suaTrungGianNXP':
                $tuor = load_all_tour();
                $nxp = all_ngay_xuat_phat();
                if (isset($_GET['id_trunggian_nxp']) && $_GET['id_trunggian_nxp'] > 0) {
                    $TrungGianNXP = load_one_trunggian_nxp($_GET['id_trunggian_nxp']);
                }
                include ("quanly_trung_gian/trunggian_nxp/update.php");
                break;
    
            case 'update_trunggian_nxp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id_ngay = $_POST['id_ngay'];
                    $id_tuor = $_POST['id_tuor'];
                    $id_trunggian_nxp = $_POST['id_trunggian_nxp'];
                    update_trunggian_nxp($id_ngay, $id_tuor, $id_trunggian_nxp);
                    $thongbao = "Cập nhật thành công";
                }
                $listTrungGianNXP = load_all_trunggian_nxp();
                include ("quanly_trung_gian/trunggian_nxp/list.php");
                break;
    
            case 'xoaTrungGianNXP':
                if (isset($_GET['id_trunggian_nxp']) && ($_GET['id_trunggian_nxp'] > 0)) {
                    delete_trunggian_nxp($_GET['id_trunggian_nxp']);
                }
                $load_all_tour = load_all_tour();
                include "tour/list.php";
                break;
    
    
            // in ra list thời gian
            case 'list_thoi_gian':
                $listThoiGian = all_thoi_gian();
                include_once ("thoi_gian/list.php");
                break;
    
    
            case 'add_thoi_gian':
                $listThoiGian = all_thoi_gian();
                if (isset($_POST['add_thoi_gian']) && ($_POST['add_thoi_gian'])) {
                    $so_ngay_dem = $_POST['so_ngay_dem'];
                    add_thoi_gian($so_ngay_dem);
                    $thongbao = "Thêm thành công";
                }
                include_once "thoi_gian/add.php";
                break;
    
            // Sửa Thời Gian
            case 'sua_thoi_gian':
                $listThoiGian = all_thoi_gian();
                if (isset($_GET['id_thoi_gian']) && ($_GET['id_thoi_gian'] > 0)) {
                    $load_one_thoi_gian = load_one_thoi_gian($_GET['id_thoi_gian']);
                }
                include "thoi_gian/update.php";
                break;
    
            // Update Thời Gian
            case 'update_thoi_gian':
                // kiểm tra xem người dùng có click vào nút cập nhật hay không
                if (isset($_POST['update_thoi_gian']) && ($_POST['update_thoi_gian'])) {
                    $so_ngay_dem = $_POST['so_ngay_dem'];
                    $id_thoi_gian = $_POST['id_thoi_gian'];
                    update_thoi_gian($so_ngay_dem, $id_thoi_gian);
                    $thongbao = "Cập nhật thành công";
                }
                $listThoiGian = all_thoi_gian();
                include "thoi_gian/list.php";
                break;
    
            case 'xoa_thoi_gian':
                if (isset($_GET['id_thoi_gian']) && ($_GET['id_thoi_gian'] > 0)) {
                    delete_thoi_gian($_GET['id_thoi_gian']);
                }
                $listThoiGian = all_thoi_gian();
                include "thoi_gian/list.php";
                break;
            
            case 'khoiphucThoiGian':
                if (isset($_GET['id_thoi_gian']) && ($_GET['id_thoi_gian'] > 0)) {
                    set_trang_thai_thoi_gian($_GET['id_thoi_gian']);
                }
                $listThoiGian = all_thoi_gian();
                include "thoi_gian/list.php";
                break;
    
    
    
            // Đăng nhập - Đăng ký
            // Danh sách tài khoản
            case 'list_taikhoan':
                $listtaikhoan = all_taikhoan("", 0);
                include ("taikhoan/list.php");
                break;
    
            // Xóa tài khoản người dùng
            case 'xoaTaiKhoan';
                if (isset($_GET['id_nguoi_dung']) && ($_GET['id_nguoi_dung'] > 0)) {
                    $trang_thai = 1;
                    delete_taikhoan($_GET['id_nguoi_dung'], $trang_thai);
                }
                $listtaikhoan = all_taikhoan();
                include ("taikhoan/list.php");
                break;
    
            // Chỉnh vai trò
            case 'suaTaiKhoan':
                if (isset($_GET['id_nguoi_dung']) && ($_GET['id_nguoi_dung'] > 0)) {
                    $taikhoan = load_mot_taikhoan($_GET['id_nguoi_dung']);
                }
                $listtaikhoan = all_taikhoan();
                include ("taikhoan/update.php");
                break;
    
            // Cập vai trò
            case 'update_vai_tro':
                // kiểm tra xem người dùng có click vào nút cập nhật hay không
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $vai_tro = $_POST['vai_tro'];
                    $id_nguoi_dung = $_POST['id_nguoi_dung'];
                    update_vai_tro($id_nguoi_dung, $vai_tro);
                    $thongbao = "Cập nhật thành công";
                }
                $listtaikhoan = all_taikhoan();
                include ("taikhoan/list.php");
                break;
            
            case 'khoiPhucTK':
                if (isset($_GET['id_nguoi_dung']) && ($_GET['id_nguoi_dung'] > 0)) {
                    $trang_thai = 0;
                    delete_taikhoan($_GET['id_nguoi_dung'], $trang_thai);
                }
                $listtaikhoan = all_taikhoan();
                include ("taikhoan/list.php");
                break;
    
            // Đăng xuất
            case 'dang_xuat':
                session_unset();
                header("Location: ../index.php");
                break;
    
    
            // Danh sách bình luận
            case 'list_binhluan':
                $list_binhluan = all_binhluan("", 0);
                include ("binhluan/list.php");
                break;
    
            // Xóa bình luận
            case 'xoaBinhLuan';
                if (isset($_GET['id_binh_luan']) && ($_GET['id_binh_luan'] > 0)) {
                    delete_binhluan($_GET['id_binh_luan']);
                }
                $list_binhluan = all_binhluan("", 0);
                include_once ("binhluan/list.php");
                break;
    
            // QUẢN LÝ ĐƠN HÀNG      
            // list dơn hàng
            case 'list_don_hang':
                $list_don_hang = all_don_hang();
                include ("donhang/list.php");
                break;
    
            // xóa đơn hàng
            case 'xoa_don_hang';
                if (isset($_GET['id_don_hang']) && ($_GET['id_don_hang'] > 0)) {
                    delete_don_hang($_GET['id_don_hang']);
                }
                $list_don_hang = all_don_hang();
                include ("donhang/list.php");
                break;
    
            // hiển thi một đơn hàng 
            case 'sua_trang_thai';
                if (isset($_GET['id_don_hang']) && ($_GET['id_don_hang'] > 0)) {
                    $don_hang = load_mot_don_hang($_GET['id_don_hang']);
                }
                $list_don_hang = all_don_hang();
                include ("donhang/update.php");
                break;
    
            case 'update_trang_thai';
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id_don_hang = $_POST['id_don_hang'];
                    $trang_thai = $_POST['trang_thai'];
                    update_don_hang($id_don_hang, $trang_thai);
                    $thongbao = "Cập nhật thành công";
                }
                $list_don_hang = all_don_hang();
                include ("donhang/list.php");
                break;
                // thống kê theo danh mục
            case 'tk_theodm';
                $tk_dm_mien = tk_dm_mien();
                $tk_dm_mua = tk_dm_mua();
    
                include("thongke/tk_theodm.php");
                break;
                // thống kê doanh thu theo tour
            case 'tk_doanhthu';
                $ngay = date('d');
                $thang = date('m'); // Lấy tháng hiện tại
                $nam = date('Y'); // Lấy năm hiện tại
    
                if (isset($_POST['ngay']) && isset($_POST['thang']) && isset($_POST['nam'])) {
                    $ngay = $_POST['ngay'];
                    $thang = $_POST['thang'];
                    $nam = $_POST['nam'];
                }
                $doanhthu = loadAll_doanhthu($ngay, $thang, $nam);
            include("thongke/tk_doanhthu.php");
            break;
                //thống kê doanh thu theo tháng
            case 'tk_doanhthu_thang';
                $thang = date('m'); // Lấy tháng hiện tại
                $nam = date('Y'); // Lấy năm hiện tại
    
                if (isset($_POST['thang']) && isset($_POST['nam'])) {
                    $thang = $_POST['thang'];
                    $nam = $_POST['nam'];
                }
                $doanh_thu_thang = loadAll_doanh_thu_thang($thang, $nam);
            include("thongke/tk_doanhthu_thang.php");
            break;
    
            default:
                # code...
                break;
        }
    } else {
        include "home.php";
    } 
   }else{
    header("Location: error.php");
   }
    
       
}else{
    // header("Location: error.php");
    // include "error.php";
   
}

include "footer.php";
?>