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
    $sql = "DELETE FROM thoi_gian WHERE id_thoi_gian = ".$id_thoi_gian;
    pdo_execute($sql);
}

// TRUNG GIAN GIỮA TUOR VÀ THỜI GIAN
// hiển thi danh sách trung gian
function all_trunggian_tg(){
    $sql = "SELECT id_trunggian_tg, tuor_thoi_gian.id_tuor, tuor_thoi_gian.id_thoi_gian, ten_tuor, so_ngay_dem FROM tuor_thoi_gian 
    JOIN tuor ON tuor.id_tuor = tuor_thoi_gian.id_tuor 
    JOIN thoi_gian ON thoi_gian.id_thoi_gian = tuor_thoi_gian.id_thoi_gian ORDER BY ten_tuor DESC";
    $listTrungGianTG=pdo_query($sql);
    return $listTrungGianTG;
}

// thêm tuor và thời gian
function insert_trunggian_tg($id_tuor,$id_thoi_gian){
    $sql="INSERT INTO tuor_thoi_gian(id_tuor,id_thoi_gian) VALUES ('$id_tuor','$id_thoi_gian')";
    pdo_execute($sql);
}

//load 1 thời gian tuor
function load_one_trunggian_tg($id_trunggian_tg){
    $sql = "SELECT id_trunggian_tg, tuor_thoi_gian.id_tuor, tuor_thoi_gian.id_thoi_gian, ten_tuor, so_ngay_dem FROM tuor_thoi_gian
    JOIN tuor ON tuor.id_tuor = tuor_thoi_gian.id_tuor 
    JOIN thoi_gian ON thoi_gian.id_thoi_gian = tuor_thoi_gian.id_thoi_gian
    WHERE id_trunggian_tg=".$id_trunggian_tg;
    $TrungGianTG=pdo_query_one($sql);
    return $TrungGianTG;
}

function update_trunggian_tg($id_thoi_gian,$id_tuor,$id_trunggian_tg){
    $sql="UPDATE tuor_thoi_gian SET id_thoi_gian='".$id_thoi_gian."', id_tuor='".$id_tuor."' WHERE id_trunggian_tg=".$id_trunggian_tg;
    pdo_execute($sql);
}

function delete_trunggian_tg($id_trunggian_tg){
    $sql="DELETE FROM tuor_thoi_gian WHERE id_trunggian_tg=".$id_trunggian_tg;
    pdo_execute($sql);
}


?>