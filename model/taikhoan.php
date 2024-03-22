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

?>