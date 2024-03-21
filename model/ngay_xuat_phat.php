<?php
// Thêm ngày xuất phát
function insert_danhmuc_mien($ten_mien){
    $sql="INSERT INTO danhmuc_mien(ten_mien) VALUES ('$ten_mien')";
    pdo_execute($sql);
}

// Danh sách miền
function all_danhmuc_mien(){
    $sql="SELECT * FROM danhmuc_mien ORDER BY id_mien desc";
    $listMien=pdo_query($sql);
    return $listMien;
}

// Hiển thị 1 tên danh mục mùa
function load_mot_danhmuc_mien($id_mien){
    $sql="SELECT * FROM danhmuc_mien WHERE id_mien=".$id_mien;
    $mien=pdo_query_one($sql);
    return $mien;
}

// Cập nhật miền
function update_mien($id_mien,$ten_mien){
    $sql="UPDATE danhmuc_mien SET ten_mien='".$ten_mien."' WHERE id_mien=".$id_mien;
    pdo_execute($sql);
}

// Xóa danh mục miền
function delete_danhmuc_mien($id_mien){
    $sql="DELETE FROM danhmuc_mien WHERE id_mien=".$id_mien;
    pdo_execute($sql);
}
?>