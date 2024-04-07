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
include "model/don_hang.php";

$mien = all_danhmuc_mien();
$mua = all_danhmuc_mua();
include "public/header.php";

function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

if (isset ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhsachtour':
            //echo $_SESSION['ho_ten']['id_nguoi_dung'];
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

        case 'dat_tuor':
            if(isset($_POST['dattuor']) && isset($_GET['id_tuor'])){
                $ngay_khoi_hanh = $_POST['ngay_khoi_hanh'];
                $so_nguoi_lon = $_POST['so_nguoi_lon'];
                $so_tre_em = $_POST['so_tre_em'];
                $mang_dat_tuor = [$ngay_khoi_hanh,$so_nguoi_lon,$so_tre_em,$ngay_khoi_hanh];
                $id_tuor = $_GET['id_tuor'];

                if(!isset($_SESSION['dat_tuor']) ){
                    $_SESSION['dat_tuor'][]=$mang_dat_tuor; 
                }elseif (isset($_SESSION['dat_tuor'])){
                    unset($_SESSION['dat_tuor']);
                    $_SESSION['dat_tuor'][]=$mang_dat_tuor;
                }
                
                $load_snd=load_so_ngay_dem($id_tuor);
                $load_one_tour = load_one_tour($id_tuor);
            }else {
                echo"Post không tồn tại";
            }
            include "public/dat_tuor.php";
            break;

        case 'show_don_hang':
            if( isset($_GET['id_don_hang'])){
                $id_tuor = $_GET['id_tuor'];
                $id_don_hang=$_GET['id_don_hang'];
                if(isset($_SESSION['dat_coc'])){
                    $trang_thai=2;
                    update_don_hang($id_don_hang,$trang_thai);
                }else{
                    $trang_thai=1;
                    update_don_hang($id_don_hang,$trang_thai);
                }
                
                $loadOneDH = load_mot_don_hang($id_don_hang);

                $load_snd=load_so_ngay_dem($id_tuor);
                $load_one_tour = load_one_tour($id_tuor);
            }
            include "public/don_hang.php";
            break;


            // Thanh toán Momo
        case 'check_out_online':
            // Lấy tổng giá tiền của 1 tour
            $ngay_khoi_hanh = $_SESSION['dat_tuor'][0][3];
            $tong_gia = $_POST['tong_gia'];
            $check_gia = $tong_gia;
            
                if(isset($_POST['payUrl'])){ 
                    if(isset($_POST['dat_coc'])){
                        $dat_coc = $_POST['dat_coc'];
                        if(isset($dat_coc) && $dat_coc != ""){
                            $check_gia = $dat_coc*$tong_gia;
                            $mang_dat_coc = [$check_gia,$dat_coc];
                            unset($_SESSION['dat_coc']);
                            $_SESSION['dat_coc'][]=$mang_dat_coc;
                        }else{
                            unset($_SESSION['dat_coc']);
                        }
                    }
                    $id_tuor = $_POST['id_tuor'];
                    $ho_va_ten = $_POST['ho_va_ten'];
                    $dia_chi = $_POST['address'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $ma_buu_chinh = $_POST['ma_buu_chinh'];
                    $tinh_thanh_pho = $_POST['tinh_thanh_pho'];
                    $dk_them = $_POST['dk_them'];
                    $tong_gia = $_POST['tong_gia'];
                    $tong_nguoi = $_POST['tong_nguoi'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngay_dat_hang = date("H:i:s d/m/Y"); // Thay đổi định dạng ngày
                    $trang_thai = 0;
                    if(isset($_SESSION['ho_ten'])){
                        $id_nguoi_dung = $_SESSION['ho_ten']['id_nguoi_dung'];
                    }else{
                        $id_nguoi_dung = "";
                    }
                    $ngay_khoi_hanh = $_SESSION['dat_tuor'][0][3];
                    $id_don_hang= insert_don_hang($ho_va_ten,$dia_chi,$email,$sdt,$ma_buu_chinh,$tinh_thanh_pho,$dk_them,$tong_gia,$ngay_dat_hang,$tong_nguoi,$id_tuor,$trang_thai,$id_nguoi_dung,$ngay_khoi_hanh);
                    $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

                    $partnerCode = 'MOMOBKUN20180529';
                    $accessKey = 'klm05TvNBzhg7h7j';
                    $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                    $orderInfo = "Thanh toán qua MoMo";
                        $amount = $check_gia;
                        $orderId = rand(1,99999);
                        $redirectUrl = "http://localhost/DuAn1_Nhom7/index.php?act=show_don_hang&id_tuor=".$id_tuor."&id_don_hang=".$id_don_hang;
                        $ipnUrl = "http://localhost/DuAn1_Nhom7/index.php?act=show_don_hang&id_tuor=".$id_tuor."&id_don_hang=".$id_don_hang;
                        $extraData = "";
                                        
                        $partnerCode = $partnerCode;
                        $accessKey = $accessKey;
                        $serectkey = $secretKey;
                        $orderId = $orderId; // ID tour
                        $orderInfo = $orderInfo;
                        $amount = $amount;
                        $ipnUrl = $ipnUrl;
                        $redirectUrl = $redirectUrl;
                        $extraData = $extraData;

                        $requestId = time() . "";
                        $requestType = "payWithATM";
                        // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                        //before sign HMAC SHA256 signature
                        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                        $signature = hash_hmac("sha256", $rawHash, $serectkey);
                        $data = array('partnerCode' => $partnerCode,
                            'partnerName' => "Test",
                            "storeId" => "MomoTestStore",
                            'requestId' => $requestId,
                            'amount' => $amount,
                            'orderId' => $orderId,
                            'orderInfo' => $orderInfo,
                            'redirectUrl' => $redirectUrl,
                            'ipnUrl' => $ipnUrl,
                            'lang' => 'vi',
                            'extraData' => $extraData,
                            'requestType' => $requestType,
                            'signature' => $signature);
                        $result = execPostRequest($endpoint, json_encode($data));
                        $jsonResult = json_decode($result, true);  // decode json

                        //Just a example, please check more in there

                        header('Location: ' . $jsonResult['payUrl']);
                   

                //VNPAY 
                }elseif(isset($_POST['redirect'])){
                    if(isset($_POST['dat_coc'])){
                        $dat_coc = $_POST['dat_coc'];
                        if(isset($dat_coc) && $dat_coc != ""){
                            $check_gia = $dat_coc*$tong_gia;
                            $mang_dat_coc = [$check_gia,$dat_coc];
                            unset($_SESSION['dat_coc']);
                            $_SESSION['dat_coc'][]=$mang_dat_coc;
                        }else{
                            unset($_SESSION['dat_coc']);
                        }
                    }
                    $id_tuor = $_POST['id_tuor'];
                    $ho_va_ten = $_POST['ho_va_ten'];
                    $dia_chi = $_POST['address'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $ma_buu_chinh = $_POST['ma_buu_chinh'];
                    $tinh_thanh_pho = $_POST['tinh_thanh_pho'];
                    $dk_them = $_POST['dk_them'];
                    $tong_nguoi = $_POST['tong_nguoi'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngay_dat_hang = date("H:i:s d/m/Y"); // Thay đổi định dạng ngày
                    $trang_thai = 0;
                    if(isset($_SESSION['ho_ten'])){
                        $id_nguoi_dung = $_SESSION['ho_ten']['id_nguoi_dung'];
                    }else{
                        $id_nguoi_dung = NULL;
                    }
                    echo "Đây là id người dùng". $id_nguoi_dung;
                    
                    $id_don_hang= insert_don_hang($ho_va_ten,$dia_chi,$email,$sdt,$ma_buu_chinh,$tinh_thanh_pho,$dk_them,$tong_gia,$ngay_dat_hang,$tong_nguoi,$id_tuor,$trang_thai,$id_nguoi_dung,$ngay_khoi_hanh);    
                    include './vnpay_php/vnpay_create_payment.php';
                    // vui lòng tham khảo thêm tại code demo

                }elseif(isset($_POST['visa'])){
                    echo 'visa';
                }
         
                       
            break;

        case 'lien_he':
            include "public/lienhe.php";
            break;

        case 'gioi_thieu':
            include "public/gioithieu.php";
            break;

        case 'taiKhoan_Tourcuatoi':
            if(isset($_SESSION['ho_ten'])){
                $id_nguoi_dung = $_SESSION['ho_ten']['id_nguoi_dung'];
                $loadDH = load_DH_theo_IDNguoiDung($id_nguoi_dung);

            }else{
                if(isset($_POST['tim_kiem']) && $_POST['id_don_hang']){
                    $id_don_hang = $_POST['id_don_hang'];
                    $loadTKDH=load_DH_theo_TimkiemID($id_don_hang);
                    //var_dump($loadTKDH);
                }else{
                }
            }
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
                    // Kiểm tra nếu vai trò của người dùng là 1 (admin)
                    if ($checkuser['vai_tro'] == 1) {
                        // Chuyển hướng người dùng vào trang admin
                        header("Location: admin/index.php");
                    } else {
                        // Nếu không phải admin, chuyển hướng về trang index.php
                        header("Location: index.php");
                    }
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
                    // print_r($_POST);
                    if(is_array($checkemail)){                       
                        $random_pass = substr( md5(rand(0,9999)) , 0, 8);
                        $mk = pass_moi($random_pass,$email);
                    //Gửi Email
                    require "PHPMailer-master/src/PHPMailer.php"; 
                    require "PHPMailer-master/src/SMTP.php"; 
                    require 'PHPMailer-master/src/Exception.php'; 
                    
                    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions

                    try {
                        
                        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
                        $mail->isSMTP();  
                        $mail->CharSet  = "utf-8";
                        $mail->Host = 'smtp.gmail.com';  //SMTP servers
                        $mail->SMTPAuth = true; // Enable authentication
                        $mail->Username = 'cuongdph44957@fpt.edu.vn'; // SMTP username
                        $mail->Password = 'ymkyoqkpgbnizlne';   // SMTP password
                        $mail->SMTPSecure = 'tls';  // encryption TLS/SSL 
                        $mail->Port = 587;  // port to connect to 

                        $mail->setFrom('cuongdph44957@fpt.edu.vn', 'Admin Cuongneee' ); 
                        $mail->addAddress($email); 
                        $mail->isHTML(true);  // Set email format to HTML
                        $mail->Subject = 'Thông báo: Mã OTP để khôi phục mật khẩu tài khoản của bạn';
                        $noidungthu = "<p style='font-size: 16px;'>
                        Kính gửi quý khách hàng,<br><br>
                        
                        Chúng tôi, đội ngũ quản trị của <strong style='color: orange;'>SIMILESVE TRAVEL</strong>, nhận thấy rằng bạn đã quên mật khẩu tài khoản của mình. Để giúp bạn khôi phục mật khẩu, chúng tôi đã tạo ra một mã OTP (One-Time Password) duy nhất.<br><br>
                        
                        Mã OTP của bạn để khôi phục mật khẩu là: <strong>{$random_pass}</strong><br><br>
                        
                        Vui lòng sử dụng mã này để thiết lập mật khẩu mới cho tài khoản của bạn. Xin lưu ý rằng mã OTP này chỉ có hiệu lực trong một khoảng thời gian ngắn và chỉ dùng được một lần. Vì vậy, chúng tôi khuyến khích bạn hoàn tất quá trình khôi phục mật khẩu ngay lập tức.<br><br>
                        
                        Lưu ý: Đừng chia sẻ mã OTP này với bất kỳ ai khác vì nó là thông tin riêng tư của bạn và có thể dẫn đến việc xâm nhập trái phép vào tài khoản của bạn.<br><br>
                        
                        Nếu bạn không thực hiện yêu cầu này, vui lòng liên hệ với chúng tôi ngay lập tức để chúng tôi có thể hỗ trợ bạn.<br><br>
                        
                        Chân thành cảm ơn bạn đã sử dụng dịch vụ của chúng tôi.<br><br>
                        
                        Trân trọng,<br>
                        Đội ngũ quản trị <br><strong style='color: orange;'>SIMILESVE TRAVEL</strong>
                        </p>";
        
                       
                        $mail->Body = $noidungthu;
                        $mail->smtpConnect( array(
                            "ssl" => array(
                                "verify_peer" => false,
                                "verify_peer_name" => false,
                                "allow_self_signed" => true
                            )
                        ));
                        $mail->send();
                        $_SESSION['email']=$email;
                        $_SESSION['otp']= $random_pass;
                        header('Location:index.php?act=nhap_otp');
                       
                    } catch (Exception $e) {
                        echo 'Error: ', $mail->ErrorInfo;
                       
                    }

                }else{
                    $thongbao="Email không tồn lại!";
                }      
            }
            include "public/dangki_dangnhap/quenmk.php";
            break;


        // Nhập OTP
        case 'nhap_otp':
            if(isset($_POST['xac_nhan'])){
            if($_POST['otp'] != $_SESSION['otp']){
                $thongbao="Mã OTP không đúng!";              
            }else{
                header('Location:index.php?act=mat_khau_moi');
            }
        }
           
            include "public/dangki_dangnhap/otp.php";
            break;


        // Mật khẩu mới
        case 'mat_khau_moi':
            if(isset($_POST['doi_mk_moi'])){
                $email=isset($_SESSION['email'][0][0]);
                $new_pass = isset($_POST['new_pass']) ? $_POST['new_pass'] : '';
                $new_pass_confirm = isset($_POST['new_pass_confirm']) ? $_POST['new_pass_confirm'] : '';
                if($new_pass !== $new_pass_confirm){
                    $thongbao="Không trùng khớp! Vui lòng nhập lại";
                }else{
                    $change = change_pass($new_pass,$email);
                    header('Location:index.php?act=dang_nhap');
                }
            }
            include "public/dangki_dangnhap/mat_khau_moi.php";
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
                        $thongbao = "Mật khẩu mới không trùng khớp! Hãy nhập lại.";
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