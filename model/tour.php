<?php

// Thêm mới tour
function add_new_tour($ten_tour, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $id_mien, $id_mua){
    $sql = "INSERT INTO `tuor`(ten_tuor, gia, tong_quan, hanh_trinh, so_luong, dia_diem, phuong_tien, id_mien, id_mua) 
    VALUES ('$ten_tour','$gia','$tong_quan','$hanh_trinh','$so_luong','$dia_diem','$phuong_tien','$id_mien','$id_mua');";
    pdo_execute($sql);
}

function load_all_tour(){
    $sql = "SELECT `id_tuor`, `ten_tuor`, `gia`, `tong_quan`, `hanh_trinh`, `so_luong`, `dia_diem`, `phuong_tien`, `id_mien`, `id_mua` FROM `tuor` WHERE 1";
    $load_all_tour = pdo_query($sql);
    return $load_all_tour;
}

?>