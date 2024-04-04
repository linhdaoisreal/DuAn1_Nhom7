<?php
function all_thoi_gian(){
    $sql="SELECT * FROM thoi_gian ORDER BY id_thoi_gian DESC";
    $list_thoi_gian=pdo_query($sql);
    return  $list_thoi_gian;
}
// Thêm mới thoi gian
function add_thoi_gian($so_ngay_dem){
    $sql = "INSERT INTO thoi_gian(so_ngay_dem) VALUES ('$so_ngay_dem')";
    pdo_execute($sql);
}

// hiển thị 1 thời gian
function load_one_thoi_gian($id_thoi_gian){
    $sql = "SELECT * FROM thoi_gian WHERE id_thoi_gian =".$id_thoi_gian;
    $load_one_thoi_gian = pdo_query_one($sql);
    return $load_one_thoi_gian;
}

function update_thoi_gian($so_ngay_dem,$id_thoi_gian){
    $sql = "UPDATE thoi_gian SET so_ngay_dem='$so_ngay_dem' WHERE id_thoi_gian=".$id_thoi_gian;
    pdo_execute($sql);
}

function delete_thoi_gian($id_thoi_gian){
    $sql="UPDATE thoi_gian SET trang_thai = 1 WHERE id_thoi_gian=".$id_thoi_gian;
    pdo_execute($sql);
}

function set_trang_thai_thoi_gian($id_thoi_gian){
    $sql = "UPDATE thoi_gian SET trang_thai = 0 WHERE id_thoi_gian=".$id_thoi_gian;
    pdo_execute($sql);
}

?>