<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc_mua.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
       // Danh sách các mùa
       case 'list_danhmuc_mua':
        $list_danhmuc_mua=all_danhmuc_mua();
        include_once("danhmuc_mua/list.php");
        break;

        //Thêm danh mục mùa
        case 'add_danhmuc_mua':
            // kiểm tra xem người dùng có click vào nút add hay không
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $ten_mua = $_POST['ten_mua'];
                insert_danhmuc_mua($ten_mua);              
                $thongbao="Thêm thành công";
            }                
            include_once("danhmuc_mua/add.php");
            break;

            // Sửa danh mục mùa
        case'suaMua';
            if(isset($_GET['id_mua']) && ($_GET['id_mua']>0)){
                $mua=load_mot_danhmuc_mua($_GET['id_mua']);
            }              
            include_once("danhmuc_mua/update.php");
            break; 

            // Cập nhật mùa
        case'update_danhmuc_mua':
            // kiểm tra xem người dùng có click vào nút cập nhật hay không
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            $ten_mua = $_POST['ten_mua'];
            $id_mua = $_POST['id_mua'];
            update_mua($id_mua,$ten_mua);
            $thongbao="Cập nhật thành công";
            }                
            $list_danhmuc_mua=all_danhmuc_mua();
            include_once("danhmuc_mua/list.php");
            break;

            // Xóa loại hàng
        case'xoaMua'; 
            if(isset($_GET['id_mua']) && ($_GET['id_mua']>0)){
               delete_danhmuc_mua($_GET['id_mua']);
            }
            $list_danhmuc_mua=all_danhmuc_mua();
            include_once("danhmuc_mua/list.php");
            break;
            
        
        default:
            # code...
            break;
    }
}else{
    include "home.php";
}

include "footer.php";
?>