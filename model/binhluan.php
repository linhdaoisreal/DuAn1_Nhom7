<?php
// Thêm bình luận
function  insert_binhluan($id_nguoi_dung, $noi_dung, $ngay_binh_luan, $idpro){
    $sql="INSERT INTO binh_luan(id_nguoi_dung,noi_dung,ngay_binh_luan,id_tuor)
    SELECT '$id_nguoi_dung', '$noi_dung', '$ngay_binh_luan', tuor.id_tuor
    FROM tuor
    WHERE tuor.id_tuor".$idpro;
    pdo_execute($sql);
}

// Danh sách bình luận
function all_binhluan($idpro) {
    $sql = "SELECT binh_luan.id_binh_luan, nguoi_dung.anh_dai_dien, nguoi_dung.ho_ten, binh_luan.noi_dung, binh_luan.ngay_binh_luan, binh_luan.id_tuor, tuor.id_tuor
    FROM binh_luan
    INNER JOIN tuor ON tuor.id_tuor = binh_luan.id_tuor
    INNER JOIN nguoi_dung ON nguoi_dung.id_nguoi_dung = binh_luan.id_nguoi_dung
    WHERE id_tuor
    

    if ($idpro > 0) {
        $sql .= " AND id_tuor='" . $idpro . "'";
    }
    $sql .= " ORDER BY id_binh_luan DESC";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

// // Xóa bình luận
// function delete_binhluan($maBinhLuan){
//     $sql="DELETE FROM binhluan WHERE maBinhLuan=".$maBinhLuan;
//     pdo_execute($sql);
// }
?>