<?php

// Thêm mới tour
function add_new_tour($ten_tour, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien, $xuat_phat ,$id_mien, $id_mua, $id_thoi_gian, $hinh_anh_mau)
{
    $sql = "INSERT INTO `tuor`(ten_tuor, gia, tong_quan, hanh_trinh, so_luong, dia_diem, phuong_tien, xuat_phat ,id_mien, id_mua, id_thoi_gian, hinh_anh_mau) 
    VALUES ('$ten_tour','$gia','$tong_quan','$hanh_trinh','$so_luong','$dia_diem','$phuong_tien','$xuat_phat','$id_mien','$id_mua','$id_thoi_gian','$hinh_anh_mau');";
    pdo_execute($sql);
}

function load_all_tour()
{
    $sql = "SELECT *, ten_mien, ten_mua FROM tuor 
    JOIN danhmuc_mien ON danhmuc_mien.id_mien = tuor.id_mien 
    JOIN danhmuc_mua ON danhmuc_mua.id_mua = tuor.id_mua";
    $load_all_tour = pdo_query($sql);
    return $load_all_tour;
}

function load_all_tour_tim_kiem($word="",$id_tuor=0)
{
    $sql = "SELECT tuor.id_tuor, tuor.gia, tuor.ten_tuor, hinh_anh.ten_hinh_anh
    FROM tuor
    JOIN (
        SELECT hinh_anh.id_tour, MIN(ten_hinh_anh) AS ten_hinh_anh 
        FROM hinh_anh 
        GROUP BY hinh_anh.id_tour 
    ) hinh_anh ON hinh_anh.id_tour = tuor.id_tuor WHERE 1";
    //Tìm kiếm tour
    if($word!=""){
        $sql.=" and ten_tuor like '%".$word."%'";
    }
    if($id_tuor>0){
        $sql.=" and id_mien = '".$id_mien."'";
    }
    $sql.=" ORDER BY id_tuor desc";
    $load_all_tour = pdo_query($sql);
    return $load_all_tour;
}

function load_one_tour($id_tuor)
{
    $sql = "SELECT tuor.id_tuor, ten_tuor, gia, tong_quan, hanh_trinh, so_luong, dia_diem, phuong_tien, 
    xuat_phat, tuor.id_mien, tuor.id_mua, ten_mien, ten_mua, hinh_anh_mau FROM tuor 
    JOIN danhmuc_mien ON danhmuc_mien.id_mien = tuor.id_mien 
    JOIN danhmuc_mua ON danhmuc_mua.id_mua = tuor.id_mua 
    WHERE id_tuor =" . $id_tuor;
    $load_one_tour = pdo_query_one($sql);
    return $load_one_tour;
}

function load_so_ngay_dem($id_tuor){
    $SQL = "SELECT tuor.id_thoi_gian, so_ngay_dem FROM tuor 
    JOIN thoi_gian ON thoi_gian.id_thoi_gian = tuor.id_thoi_gian WHERE id_tuor=".$id_tuor;
    $load_so_ngay_dem = pdo_query_one($SQL);
    return $load_so_ngay_dem;
}

function update_tour($ten_tuor, $gia, $tong_quan, $hanh_trinh, $so_luong, $dia_diem, $phuong_tien,
 $id_mien, $id_mua, $id_thoi_gian, $xuat_phat, $id_tuor, $hinh_anh_mau)
{   
    if($hinh_anh_mau!=""){
        $sql = "UPDATE `tuor` SET ten_tuor='$ten_tuor', gia='$gia', tong_quan='$tong_quan', hanh_trinh='$hanh_trinh', so_luong='$so_luong',
    dia_diem='$dia_diem', phuong_tien='$phuong_tien', id_mien='$id_mien', id_mua='$id_mua', 
    id_thoi_gian='$id_thoi_gian', xuat_phat='$xuat_phat', hinh_anh_mau='$hinh_anh_mau' 
    WHERE id_tuor = '$id_tuor'";
   }else{  
    $sql = "UPDATE `tuor` SET ten_tuor='$ten_tuor', gia='$gia', tong_quan='$tong_quan', hanh_trinh='$hanh_trinh', so_luong='$so_luong',
    dia_diem='$dia_diem', phuong_tien='$phuong_tien', id_mien='$id_mien', id_mua='$id_mua', 
    id_thoi_gian='$id_thoi_gian', xuat_phat='$xuat_phat' 
    WHERE id_tuor = '$id_tuor'";
   }
    
    // echo $sql;
    // die;
    pdo_execute($sql);
}

function delete_tour($id_tuor)
{
    $sql = "DELETE FROM tuor WHERE id_tuor=" . $id_tuor;
    pdo_execute($sql);
}

function delete_tuor_theo_IDMua($id_mua){
    $sql = "DELETE FROM tuor WHERE id_mua=" . $id_mua;
    pdo_execute($sql);
}

function load_top6_hot_tuor()
{
    $sql = "SELECT tuor.id_tuor, tuor.gia, tuor.ten_tuor, hinh_anh.ten_hinh_anh
    FROM tuor
    JOIN (
        SELECT hinh_anh.id_tour, MIN(ten_hinh_anh) AS ten_hinh_anh
        FROM hinh_anh
        GROUP BY hinh_anh.id_tour
        LIMIT 6
    ) hinh_anh ON hinh_anh.id_tour = tuor.id_tuor;";
    $load_hot_tuor = pdo_query($sql);
    return $load_hot_tuor;
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

function load_tuor_theo_danhmuc($id_mua, $id_mien)
{
    $sql = "SELECT tuor.id_tuor, tuor.gia, tuor.ten_tuor, hinh_anh.ten_hinh_anh, danhmuc_mua.id_mua, danhmuc_mien.id_mien 
        FROM tuor
        JOIN (
            SELECT hinh_anh.id_tour, MIN(ten_hinh_anh) AS ten_hinh_anh 
            FROM hinh_anh 
            GROUP BY hinh_anh.id_tour 
        ) hinh_anh ON hinh_anh.id_tour = tuor.id_tuor 
        JOIN danhmuc_mien ON danhmuc_mien.id_mien = tuor.id_mien 
        JOIN danhmuc_mua ON danhmuc_mua.id_mua = tuor.id_mua 
        WHERE 1";

    if ($id_mua != "" || $id_mien != "") {
        if ($id_mua > 0 && $id_mien == "") {
            $sql .= " AND danhmuc_mua.id_mua = " . $id_mua;
        }
        if ($id_mien > 0 && $id_mua == "") {
            $sql .= " AND danhmuc_mien.id_mien = " . $id_mien;
        }
    }

    $load_tuor_theo_danhmuc = pdo_query($sql);
    return $load_tuor_theo_danhmuc;
}



function trunggian_ngay_xuat_phat_tuor($id_tuor){
    $sql = "SELECT tuor.id_tuor, ngay_xuat_phat.id_ngay, ngay FROM tuor 
    JOIN tuor_ngay_xuat_phat ON tuor_ngay_xuat_phat.id_tuor = tuor.id_tuor 
    JOIN ngay_xuat_phat ON tuor_ngay_xuat_phat.id_ngay = ngay_xuat_phat.id_ngay
    WHERE tuor.id_tuor = ".$id_tuor;
    $trunggian_ngay_xuat_phat_tuor = pdo_query($sql);
    return $trunggian_ngay_xuat_phat_tuor;
}

?>