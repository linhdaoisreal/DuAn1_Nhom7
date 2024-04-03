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
    // $sql="DELETE danhmuc_mua, tuor, hinh_anh, tuor_ngay_xuat_phat, don_hang FROM danhmuc_mua
    // JOIN tuor ON tuor.id_mua = danhmuc_mua.id_mua 
    // JOIN hinh_anh ON hinh_anh.id_tour = tuor.id_tuor 
    // JOIN tuor_ngay_xuat_phat ON tuor_ngay_xuat_phat.id_tuor = tuor.id_tuor 
    // JOIN don_hang ON don_hang.id_tuor = tuor.id_tuor
    // WHERE danhmuc_mua.id_mua = ".$id_mua;
    // $sql = "DELETE FROM danhmuc_mua WHERE danhmuc_mua.id_mua 
    // IN (SELECT id_mua FROM tuor 
    // JOIN hinh_anh ON hinh_anh.id_tour = tuor.id_tuor 
    // JOIN tuor_ngay_xuat_phat ON tuor_ngay_xuat_phat.id_tuor = tuor.id_tuor 
    // JOIN don_hang ON don_hang.id_tuor = tuor.id_tuor)=".$id_mua;
    $sql="DELETE FROM danhmuc_mua WHERE id_mua=".$id_mua;
    pdo_execute($sql);
}

?>