<?php

// Thêm mới tour
function add_new_tour($ten_tour, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $id_mien, $id_mua)
{
    $sql = "INSERT INTO `tuor`(ten_tuor, gia, tong_quan, hanh_trinh, so_luong, dia_diem, phuong_tien, id_mien, id_mua) 
    VALUES ('$ten_tour','$gia','$tong_quan','$hanh_trinh','$so_luong','$dia_diem','$phuong_tien','$id_mien','$id_mua');";
    pdo_execute($sql);
}

function load_all_tour()
{
    $sql = "SELECT * FROM tuor ";
    $load_all_tour = pdo_query($sql);
    return $load_all_tour;
}

function load_one_tour($id_tuor)
{
    $sql = "SELECT * FROM `tuor` WHERE id_tuor =" . $id_tuor;
    $load_one_tour = pdo_query_one($sql);
    return $load_one_tour;
}

function update_tour($ten_tuor, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $id_mien, $id_mua, $id_tuor)
{
    $sql = "UPDATE tuor SET ten_tuor='$ten_tuor' ,gia='$gia', tong_quan='$tong_quan', hanh_trinh='$hanh_trinh', so_luong='$so_luong',
    dia_diem='$dia_diem', phuong_tien='$phuong_tien', id_mien='$id_mien', id_mua='$id_mua' WHERE id_tuor=" . $id_tuor;
    pdo_execute($sql);
}

function delete_tour($id_tuor)
{
    $sql = "DELETE FROM tuor WHERE id_tuor=" . $id_tuor;
    pdo_execute($sql);
}

function load_top3_hot_tuor()
{
    $sql = "SELECT tuor.id_tuor, tuor.gia, tuor.ten_tuor, hinh_anh.ten_hinh_anh
    FROM tuor
    JOIN (
        SELECT hinh_anh.id_tour, MIN(ten_hinh_anh) AS ten_hinh_anh
        FROM hinh_anh
        GROUP BY hinh_anh.id_tour
        LIMIT 3
    ) hinh_anh ON hinh_anh.id_tour = tuor.id_tuor;";
    $load_hot_tuor = pdo_query($sql);
    return $load_hot_tuor;
}

function load_tuor_theo_danhmuc($ten_mua,$ten_mien){
    $sql = "SELECT tuor.id_tuor, tuor.gia, tuor.ten_tuor, hinh_anh.ten_hinh_anh , ten_mua, ten_mien FROM tuor
    JOIN (SELECT hinh_anh.id_tour, MIN(ten_hinh_anh) AS ten_hinh_anh FROM hinh_anh GROUP BY hinh_anh.id_tour LIMIT 3) 
    hinh_anh ON hinh_anh.id_tour = tuor.id_tuor 
    JOIN danhmuc_mien ON danhmmuc_mien.id_mien = tuor.id_mien 
    JOIN danhmuc_mua ON danhmuc_mua.id_mua = tuor.id_mua";
    if($ten_mua != "" || $ten_mien != ""){
        if($ten_mua != "" && $ten_mien == "" ){
            $sql .= "WHERE ten_mua=".$ten_mua;
        }
        if($ten_mien != "" && $ten_mua == "" ){
            $sql .= "WHERE ten_mua=".$ten_mua;
        }
    }
    $load_tuor_theo_danhmuc = pdo_query($sql);
    return $load_tuor_theo_danhmuc;
}

?>