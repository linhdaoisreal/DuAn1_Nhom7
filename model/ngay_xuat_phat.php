<?php
// Thêm ngày xuất phát
function insert_ngay_xuat_phat($ngay){
    $sql="INSERT INTO ngay_xuat_phat(ngay) VALUES ('$ngay')";
    pdo_execute($sql);
}

// Danh sách ngày xuất phát
function all_ngay_xuat_phat(){
    $sql="SELECT * FROM ngay_xuat_phat ORDER BY id_ngay desc";
    $listNgayXuatPhat=pdo_query($sql);
    return $listNgayXuatPhat;
}

// Hiển thị 1 tên danh mục mùa
function load_mot_ngay_xuat_phat($id_ngay){
    $sql="SELECT * FROM ngay_xuat_phat WHERE id_ngay=".$id_ngay;
    $ngayXuatPhat=pdo_query_one($sql);
    return $ngayXuatPhat;
}

// Cập nhật miền
function update_ngay_xuat_phat($id_ngay,$ngay){
    $sql="UPDATE ngay_xuat_phat SET ngay='".$ngay."' WHERE id_ngay=".$id_ngay;
    pdo_execute($sql);
}

// Xóa danh mục miền
function delete_ngay_xuat_phat($id_ngay){
    $sql="DELETE FROM ngay_xuat_phat WHERE id_ngay=".$id_ngay;
    pdo_execute($sql);
}

//TRUNG GIAN NGÀY XUẤT PHÁT VỚI TOUR

//In thông tin của tour và trung gian 
function insert_trunggian_nxp($id_tuor,$id_ngay){
    $sql="INSERT INTO tuor_ngay_xuat_phat(id_tuor,id_ngay) VALUES ('$id_tuor','$id_ngay')";
    pdo_execute($sql);
}

function load_all_trunggian_nxp(){
    $sql = "SELECT id_trunggian_nxp, tuor_ngay_xuat_phat.id_tuor, tuor_ngay_xuat_phat.id_ngay, ten_tuor, ngay FROM tuor_ngay_xuat_phat 
    JOIN tuor ON tuor.id_tuor = tuor_ngay_xuat_phat.id_tuor 
    JOIN ngay_xuat_phat ON ngay_xuat_phat.id_ngay = tuor_ngay_xuat_phat.id_ngay";
    $listTrungGianNXP=pdo_query($sql);
    return $listTrungGianNXP;
}

function load_one_trunggian_nxp($id_trunggian_nxp){
    $sql = "SELECT id_trunggian_nxp, tuor_ngay_xuat_phat.id_tuor, tuor_ngay_xuat_phat.id_ngay, ten_tuor, ngay FROM tuor_ngay_xuat_phat 
    JOIN tuor ON tuor.id_tuor = tuor_ngay_xuat_phat.id_tuor 
    JOIN ngay_xuat_phat ON ngay_xuat_phat.id_ngay = tuor_ngay_xuat_phat.id_ngay 
    WHERE id_trunggian_nxp=".$id_trunggian_nxp;
    $TrungGianNXP=pdo_query_one($sql);
    return $TrungGianNXP;
}

function update_trunggian_nxp($id_ngay,$id_tuor,$id_trunggian_nxp){
    $sql="UPDATE tuor_ngay_xuat_phat SET id_ngay='".$id_ngay."', id_tuor='".$id_tuor."' WHERE id_trunggian_nxp=".$id_trunggian_nxp;
    pdo_execute($sql);
}

function delete_trunggian_nxp($id_trunggian_nxp){
    $sql="DELETE FROM tuor_ngay_xuat_phat WHERE id_trunggian_nxp=".$id_trunggian_nxp;
    pdo_execute($sql);
}

?>