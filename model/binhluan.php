<?php
// Thêm bình luận
function  insert_binhluan($id_nguoi_dung, $idpro, $noi_dung, $ngay_binh_luan){
    $sql="INSERT INTO binh_luan(id_nguoi_dung,id_tuor,noi_dung,ngay_binh_luan) 
    VALUES ('$id_nguoi_dung','$idpro','$noi_dung','$ngay_binh_luan')";
    pdo_execute($sql);
}


// Danh sách bình luận
function all_binhluan($idpro) {
    $sql = "SELECT binh_luan.id_binh_luan, nguoi_dung.anh_dai_dien, nguoi_dung.ho_ten, binh_luan.noi_dung, binh_luan.ngay_binh_luan, binh_luan.id_tuor, tuor.id_tuor, tuor.ten_tuor
    FROM binh_luan
    INNER JOIN tuor ON tuor.id_tuor = binh_luan.id_tuor
    INNER JOIN nguoi_dung ON nguoi_dung.id_nguoi_dung = binh_luan.id_nguoi_dung
   ";
    if ($idpro > 0) {
        $sql .= " WHERE tuor.id_tuor='" . $idpro . "'";
    }
    $sql .= " ORDER BY id_binh_luan DESC";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

// Xóa bình luận
function delete_binhluan($id_binh_luan){
    $sql="DELETE FROM binh_luan WHERE id_binh_luan=".$id_binh_luan;
    pdo_execute($sql);
}

function delete_binhluan_theoTK($id_nguoi_dung){
    $sql="DELETE FROM binh_luan WHERE id_nguoi_dung=".$id_nguoi_dung;
    pdo_execute($sql);
}


?>