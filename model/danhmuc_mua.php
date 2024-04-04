<?php
// Thêm danh mục mùa
function insert_danhmuc_mua($ten_mua){
    $sql="INSERT INTO danhmuc_mua(ten_mua) VALUES ('$ten_mua')";
    pdo_execute($sql);
}

// Danh sách mùa
function all_danhmuc_mua(){
    $sql="SELECT * FROM danhmuc_mua ORDER BY id_mua desc";
    $listMua=pdo_query($sql);
    return $listMua;
}

// Hiển thị 1 tên danh mục mùa
function load_mot_danhmuc_mua($id_mua){
    $sql="SELECT * FROM danhmuc_mua WHERE id_mua=".$id_mua;
    $mua=pdo_query_one($sql);
    return $mua;
}

// Cập nhật mùa
function update_mua($id_mua,$ten_mua){
    $sql="UPDATE danhmuc_mua SET ten_mua='".$ten_mua."' WHERE id_mua=".$id_mua;
    pdo_execute($sql);
}

// Xóa danh mục mùa
function delete_danhmuc_mua($id_mua){
    $sql="UPDATE danhmuc_mua SET trang_thai = 1 WHERE id_mua=".$id_mua;
    pdo_execute($sql);
}
function move_tuor_theoMua_To_Uncategorize($id_mua){
    $sql="UPDATE tuor SET id_mua = 0 WHERE id_mua=".$id_mua;
    pdo_execute($sql);
}
function khoiphuc_danhmucmua($id_mua){
    $sql="UPDATE danhmuc_mua SET trang_thai = 0 WHERE id_mua=".$id_mua;
    pdo_execute($sql);
}
?>