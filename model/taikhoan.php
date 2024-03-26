<?php
// Thêm tài khoản
function insert_taikhoan($ho_ten, $mat_khau, $email){
    $sql="INSERT INTO nguoi_dung(ho_ten,mat_khau,email) 
    VALUES ('$ho_ten','$mat_khau','$email')";
    pdo_execute($sql);
}

//So sánh để đăng nhập
function check_user($ho_ten, $mat_khau){
    $sql="SELECT * FROM nguoi_dung WHERE ho_ten='".$ho_ten."' AND mat_khau='".$mat_khau."'";
    $tk=pdo_query_one($sql);
    return $tk;
}

// Check đã tồn tại tên đăng nhập và email
function check_login($ho_ten,$email){
    $sql = "SELECT * FROM nguoi_dung WHERE ho_ten='$ho_ten' OR email='$email'";
    $tk=pdo_query_one($sql);
    return $tk;
}

// Cập nhật tài khoản
function  update_taikhoan($id_nguoi_dung,$ho_ten,$email,$so_dien_thoai,$dia_chi,$anh_dai_dien){
    if($anh_dai_dien!=""){
         $sql="UPDATE nguoi_dung SET id_nguoi_dung='".$id_nguoi_dung."',ho_ten='".$ho_ten."',email='".$email."',so_dien_thoai='".$so_dien_thoai."',dia_chi='".$dia_chi."',anh_dai_dien='".$anh_dai_dien."'
     WHERE id_nguoi_dung=".$id_nguoi_dung;
    }else{  
        $sql="UPDATE nguoi_dung SET id_nguoi_dung='".$id_nguoi_dung."',ho_ten='".$ho_ten."',email='".$email."',so_dien_thoai='".$so_dien_thoai."',dia_chi='".$dia_chi."'
        WHERE id_nguoi_dung=".$id_nguoi_dung;
    }
    
    pdo_execute($sql);
}

//Quên mật khẩu
function check_email($email){
    $sql="SELECT * FROM nguoi_dung WHERE email='".$email."'";
    $hh=pdo_query_one($sql);
    return $hh;
}

?>