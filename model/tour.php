<?php

// Thêm mới tour
function add_new_tour($ten_tour, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $id_mien, $id_mua){
    $sql = "INSERT INTO `tuor`(ten_tuor, gia, tong_quan, hanh_trinh, so_luong, dia_diem, phuong_tien, id_mien, id_mua) 
    VALUES ('$ten_tour','$gia','$tong_quan','$hanh_trinh','$so_luong','$dia_diem','$phuong_tien','$id_mien','$id_mua');";
    pdo_execute($sql);
}

function load_all_tour(){
    $sql = "SELECT * FROM tuor ";
    $load_all_tour = pdo_query($sql);
    return $load_all_tour;
}

function load_one_tour($id_tuor){
    $sql = "SELECT * FROM `tuor` WHERE id_tuor =".$id_tuor;
    $load_one_tour = pdo_query_one($sql);
    return $load_one_tour;
}

function update_tour($ten_tuor, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $id_mien, $id_mua, $id_tuor){
    $sql = "UPDATE tuor SET ten_tuor='$ten_tuor' ,gia='$gia', tong_quan='$tong_quan', hanh_trinh='$hanh_trinh', so_luong='$so_luong',
    dia_diem='$dia_diem', phuong_tien='$phuong_tien', id_mien='$id_mien', id_mua='$id_mua' WHERE id_tuor=".$id_tuor;
    pdo_execute($sql);
}

function delete_tour($id_tuor){
    $sql = "DELETE FROM tuor WHERE id_tuor=".$id_tuor;
    pdo_execute($sql);
}

?>