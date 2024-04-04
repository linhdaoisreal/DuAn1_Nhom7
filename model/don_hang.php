<?php
// thêm đơn hàng
function insert_don_hang($ho_va_ten,$dia_chi,$email,$sdt,$ma_buu_chinh,$tinh_thanh_pho,$dk_them,$tong_gia,$ngay_dat_hang,$tong_nguoi,$id_tuor, $trang_thai,$id_nguoi_dung,$ngay_khoi_hanh){
    if(isset($id_nguoi_dung)){
        $sql="INSERT INTO don_hang(ho_va_ten,dia_chi,email,sdt,ma_buu_chinh,tinh_thanh_pho,dk_them,tong_gia,ngay_dat_hang,tong_nguoi,id_tuor,trang_thai,id_nguoi_dung,ngay_khoi_hanh) 
        VALUES ('$ho_va_ten','$dia_chi','$email','$sdt','$ma_buu_chinh','$tinh_thanh_pho','$dk_them','$tong_gia','$ngay_dat_hang','$tong_nguoi','$id_tuor','$trang_thai','$id_nguoi_dung','$ngay_khoi_hanh')";
    }else{
        $sql="INSERT INTO don_hang(ho_va_ten,dia_chi,email,sdt,ma_buu_chinh,tinh_thanh_pho,dk_them,tong_gia,ngay_dat_hang,tong_nguoi,id_tuor,trang_thai,ngay_khoi_hanh) 
        VALUES ('$ho_va_ten','$dia_chi','$email','$sdt','$ma_buu_chinh','$tinh_thanh_pho','$dk_them','$tong_gia','$ngay_dat_hang','$tong_nguoi','$id_tuor','$trang_thai','$ngay_khoi_hanh')";
    }
    
    echo $sql;
    $id_don_hang = pdo_execute_return_lastInsertId($sql);
    return $id_don_hang;
}
// Quản lý đơen hàng ADMIN
// hiển thi danh sách hạng
function all_don_hang(){
    $sql="SELECT * FROM don_hang JOIN tuor ON tuor.id_tuor = don_hang.id_tuor";
    $list_don_hang=pdo_query($sql);
    return  $list_don_hang;
}
// xóa đơn hàng 
function delete_don_hang($id_don_hang){
    $sql = "DELETE FROM don_hang WHERE id_don_hang=".$id_don_hang;
    pdo_execute($sql);
}
// cập nhật
function load_mot_don_hang($id_don_hang){
    $sql="SELECT * FROM don_hang WHERE id_don_hang=".$id_don_hang;
    $mua=pdo_query_one($sql);
    return $mua;
}
// cập nhâth
function update_don_hang($id_don_hang,$trang_thai){
    $sql="UPDATE don_hang SET trang_thai='".$trang_thai."' WHERE id_don_hang=".$id_don_hang;
   
    pdo_execute($sql);
    
}
function delete_don_hang_theoTour($id_tuor){
    $sql = "DELETE FROM don_hang WHERE id_tuor=".$id_tuor;
    pdo_execute($sql);
}

function load_DH_theo_IDNguoiDung($id_nguoi_dung){
    $sql = "SELECT id_don_hang, ho_va_ten, tong_gia, tong_nguoi, trang_thai, tuor.hinh_anh_mau, ten_tuor, don_hang.ngay_khoi_hanh
    FROM don_hang JOIN tuor ON tuor.id_tuor = don_hang.id_tuor 
    WHERE id_nguoi_dung=".$id_nguoi_dung;
    $loadDH=pdo_query($sql);
    return $loadDH;
}

function load_DH_theo_TimkiemID($id_don_hang){
    $sql = "SELECT id_don_hang, ho_va_ten, tong_gia, tong_nguoi, trang_thai, tuor.hinh_anh_mau, ten_tuor, don_hang.ngay_khoi_hanh
    FROM don_hang JOIN tuor ON tuor.id_tuor = don_hang.id_tuor 
    WHERE id_don_hang=".$id_don_hang;
    $loadDH=pdo_query($sql);
    return $loadDH;
}
?>
