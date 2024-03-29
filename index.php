<?php
ob_start();
session_start();
include "model/pdo.php";
include "global.php";
include "model/tour.php";
include "model/danhmuc_mien.php";
include "model/danhmuc_mua.php";
include "model/hinh_anh.php";
include "model/taikhoan.php";
include "model/binhluan.php";


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
                $load_snd=load_so_ngay_dem($id_tuor);
                $load_one_tour = load_one_tour($id_tuor);
                
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
                    // Kiểm tra tên đăng nhập và email đã tồn tại hay chưa
                    $check_login = check_login($ho_ten, $email);                 
                    if ($check_login) {                                          
                        $thongbao = "Tên đăng nhập hoặc email đã tồn tại.";
                    } else {
                        // Nếu tên đăng nhập và email chưa tồn tại, thực hiện thêm vào cơ sở dữ liệu
                        insert_taikhoan($ho_ten, $mat_khau, $email);
                        $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập.";
                    }
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
                    header("Location: index.php");

                    exit;
                } else {
                    $thongbao = "Tài khoản không tồn tại hoặc mật khẩu không đúng!";
                }
            }
            include "public/dangki_dangnhap/dangnhap.php";
            break;


        // Đăng xuất
        case 'dang_xuat':
            session_unset();
            header("Location: index.php");
            break;

        // Chỉnh sửa tài khoản
        case 'edit_taikhoan':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                if(isset($_POST['id_nguoi_dung'], $_POST['ho_ten'], $_POST['email'], $_POST['so_dien_thoai'], $_POST['dia_chi'])) {
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $so_dien_thoai = isset($_POST['so_dien_thoai']) ? $_POST['so_dien_thoai'] : '';
                $dia_chi = isset($_POST['dia_chi']) ? $_POST['dia_chi'] : ''; 
                $anh_dai_dien = $_FILES['anh_dai_dien']['name'];
                $target_dir="./gallery/";
                $target_file = $target_dir . basename($_FILES["anh_dai_dien"]["name"]);
                      if (move_uploaded_file($_FILES["anh_dai_dien"]["tmp_name"], $target_file)) {
                         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " đã Uploads.";
                        } else {
                          //echo "Không Uploads được file";
                        }                   
                        update_taikhoan($id_nguoi_dung,$ho_ten,$email,$so_dien_thoai,$dia_chi,$anh_dai_dien);
                        $_SESSION['ho_ten'] = check_user($ho_ten,$mat_khau);
                        $thongbao = "Chỉnh sửa tài khoản thành công!";
                        header('Location:index.php?act=edit_taikhoan');           
               }else{
                    echo 'Không update được';
               }
            }      
            include "public/taikhoan/edit_taikhoan.php";
            break;

        // Quên mật khẩu
        case 'quenmk':
            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
             $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $checkemail=check_email($email);
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là: ".$checkemail['mat_khau'];
                    }else{
                        $thongbao="Email không tồn lại!";
                    }      
            }
            include "public/dangki_dangnhap/quenmk.php";
            break;

        // Đổi mật khẩu
        case 'doi_matkhau':
            if(isset($_POST['doimatkhau'])){
                $id_nguoi_dung = isset($_POST['id_nguoi_dung']) ? $_POST['id_nguoi_dung'] : '';
                $mat_khau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : '';
                $mat_khau_moi = isset($_POST['mat_khau_moi']) ? $_POST['mat_khau_moi'] : '';
                $xacnhan_mat_khau = isset($_POST['xacnhan_mat_khau']) ? $_POST['xacnhan_mat_khau'] : '';
        
                // Kiểm tra mật khẩu cũ
                $check_mat_khau = check_mat_khau($id_nguoi_dung, $mat_khau);
                if($check_mat_khau) {
                    // Kiểm tra mật khẩu mới và xác nhận mật khẩu mới
                    if($mat_khau_moi !== $xacnhan_mat_khau) {
                        $thongbao = "Mật khẩu mới và xác nhận mật khẩu mới không khớp! Vui lòng nhập lại.";
                    } else {
                        // Thực hiện đổi mật khẩu
                        $doi_matkhau = doi_matkhau($id_nguoi_dung, $mat_khau_moi);
                        if($doi_matkhau) {
                            $thongbao = "Lỗi đổi mật khẩu";
                        } else {
                            $thongbao = "Đổi mật khẩu thành công!";
                        }
                    }
                } else {
                    $thongbao = "Mật khẩu cũ không đúng! Vui lòng thử lại.";
                }
            }
            include "public/taikhoan/doi_matkhau.php";
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
            $thongbao = "Không tìm thấy tour phù hợp.";
            }
        include "public/timkiem_tour.php";
        break;

        default:
            # code...
            break;
    }

} else {
    $load_hot_tuor = load_top6_hot_tuor();
    //var_dump($load_hot_tuor);
    include "public/trangchu.php";
}


include "public/footer.php";
?>