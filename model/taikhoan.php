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

// Mật khẩu random khi user quên mk
function pass_moi($random_pass,$email){
    $sql ="UPDATE nguoi_dung SET mat_khau='$random_pass' WHERE email='$email'";
    pdo_execute($sql);
}

// Đổi mật khẩu khi quên
function change_pass($new_pass,$email){
    $sql = "UPDATE nguoi_dung SET mat_khau='$new_pass' WHERE email='$email'";
    $tk = pdo_query_one($sql);
    return $tk;
}

// Đổi mật khẩu
function check_mat_khau($id_nguoi_dung, $mat_khau){
    $sql = "SELECT * FROM nguoi_dung WHERE id_nguoi_dung='$id_nguoi_dung' AND mat_khau='$mat_khau'";
    $tk = pdo_query_one($sql);
    return $tk;
}


// Thực hiện đổi mật khẩu
function doi_matkhau($id_nguoi_dung, $mat_khau_moi){
    $sql = "UPDATE nguoi_dung SET mat_khau='$mat_khau_moi' WHERE id_nguoi_dung=".$id_nguoi_dung;
    pdo_execute($sql);
}


// Load danh sách tài khoản
function all_taikhoan(){
    $sql="SELECT * FROM nguoi_dung ORDER BY id_nguoi_dung desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

// Xóa tài khoản
function delete_taikhoan($id_nguoi_dung,$trang_thai){
    $sql="UPDATE nguoi_dung SET trang_thai = '".$trang_thai."' WHERE id_nguoi_dung=".$id_nguoi_dung;
    pdo_execute($sql);
}

// Hiển thị 1 tài khoản
function load_mot_taikhoan($id_nguoi_dung){
    $sql="SELECT * FROM nguoi_dung WHERE id_nguoi_dung=".$id_nguoi_dung;
    $hh=pdo_query_one($sql);
    return $hh;
}

// Cập nhật vai trò
function  update_vai_tro($id_nguoi_dung, $vai_tro){
    $sql="UPDATE nguoi_dung SET vai_tro='".$vai_tro."' WHERE id_nguoi_dung=".$id_nguoi_dung;
    pdo_execute($sql);
}


?>