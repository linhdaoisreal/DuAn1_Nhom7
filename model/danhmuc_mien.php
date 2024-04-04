<?php
// Thêm danh mục miền
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
    $sql="UPDATE danhmuc_mien SET trang_thai = 1 WHERE id_mien=".$id_mien;
    pdo_execute($sql);
}
function move_tuor_theoMien_To_Uncategorize($id_mien){
    $sql="UPDATE tuor SET id_mien = 0 WHERE id_mien=".$id_mien;
    pdo_execute($sql);
}
function khoiphuc_danhmucmien($id_mien){
    $sql="UPDATE danhmuc_mien SET trang_thai = 0 WHERE id_mien=".$id_mien;
    pdo_execute($sql);
}
?>