<?php
    function tk_dm_mien(){
        $sql="SELECT 
            danhmuc_mien.ten_mien,
            danhmuc_mien.id_mien,
            don_hang.tong_gia,
            COUNT(DISTINCT tuor.id_tuor) AS so_tuor,
            MAX(don_hang.tong_gia) AS gia_cao_nhat,
            MIN(don_hang.tong_gia) AS gia_thap_nhat,
            SUM(DISTINCT don_hang.tong_gia) / COUNT(DISTINCT tuor.id_tuor) AS gia_trung_binh
            FROM 
            danhmuc_mien
            INNER JOIN tuor ON danhmuc_mien.id_mien = tuor.id_mien
            INNER JOIN don_hang ON tuor.id_tuor = don_hang.id_tuor
            WHERE 
            danhmuc_mien.trang_thai = 0
            GROUP BY 
            danhmuc_mien.id_mien, danhmuc_mien.ten_mien;";
        $tk_dm_mien=pdo_query($sql);
        return $tk_dm_mien;
    }


    function tk_dm_mua(){
        $sql="SELECT 
            danhmuc_mua.ten_mua,
            danhmuc_mua.id_mua,
            don_hang.tong_gia,
            COUNT(DISTINCT tuor.id_tuor) AS so_tuor,
            MAX(don_hang.tong_gia) AS gia_cao_nhat,
            MIN(don_hang.tong_gia) AS gia_thap_nhat,
            SUM(DISTINCT don_hang.tong_gia) / COUNT(DISTINCT tuor.id_tuor) AS gia_trung_binh
            FROM 
            danhmuc_mua
            INNER JOIN tuor ON danhmuc_mua.id_mua = tuor.id_mua
            INNER JOIN don_hang ON tuor.id_tuor = don_hang.id_tuor
            WHERE 
            danhmuc_mua.trang_thai = 0
            GROUP BY 
            danhmuc_mua.id_mua, danhmuc_mua.ten_mua;";
        $tk_dm_mua=pdo_query($sql);
        return $tk_dm_mua;
    }


    function loadAll_doanhthu($ngay,$thang,$nam){
        $sql = "SELECT 
                tuor.ten_tuor,
                tuor.id_tuor,
                COUNT(DISTINCT don_hang.id_tuor) AS so_luong_ban,
                SUM(don_hang.tong_gia) AS doanh_thu
            FROM 
                tuor
            INNER JOIN 
                don_hang  ON tuor.id_tuor = don_hang.id_tuor
            WHERE 
                    YEAR(don_hang.ngay_dat_hang) = $nam
                AND MONTH(don_hang.ngay_dat_hang) = $thang
                AND DAY(don_hang.ngay_dat_hang) = $ngay";
   
        $doanhthu = pdo_query($sql);
        return $doanhthu;
    }

    function loadAll_doanh_thu_thang($thang, $nam){
        $sql = "SELECT 
                tuor.ten_tuor,
                tuor.id_tuor,
                COUNT(DISTINCT don_hang.id_tuor) AS so_luong_ban,
                SUM(don_hang.tong_gia) AS doanh_thu_thang
            FROM 
                tuor
            INNER JOIN 
                don_hang  ON tuor.id_tuor = don_hang.id_tuor
            WHERE 
                    YEAR(don_hang.ngay_dat_hang) = $nam
                AND MONTH(don_hang.ngay_dat_hang) = $thang";
   
        $doanh_thu_thang = pdo_query($sql);
        return $doanh_thu_thang;
    }

?>

