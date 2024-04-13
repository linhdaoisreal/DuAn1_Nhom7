<?php
// Thêm hình ảnh
function insert_hinh_anh($ten_hinh_anh,$id_tour){
    $sql="INSERT INTO hinh_anh(ten_hinh_anh,id_tour) 
    VALUES ('$ten_hinh_anh','$id_tour')";
    pdo_execute($sql);
}

// Danh sách tên tour
function ten_tour(){
    $sql="SELECT * FROM tuor ORDER BY ten_tuor";
    $listTenTuor=pdo_query($sql);
    return $listTenTuor;
}

function all_hinh_anh($id_tour = 0)
{
    $sql = "SELECT hinh_anh.id_hinh_anh, hinh_anh.ten_hinh_anh, tuor.ten_tuor
    FROM hinh_anh
    INNER JOIN tuor ON hinh_anh.id_tour = tuor.id_tuor WHERE 1";

    if($id_tour>0){
    $sql.=" and id_tour = '".$id_tour."'";
    }

    $sql .= " ORDER BY hinh_anh.id_hinh_anh DESC LIMIT 8";
    $list_hinh_anh = pdo_query($sql);
    return $list_hinh_anh;
}

// Hiển thị 1 hình ảnh
function load_mot_hinh_anh($id_hinh_anh){
    $sql="SELECT * FROM hinh_anh WHERE id_hinh_anh=".$id_hinh_anh;
    $hinh_anh=pdo_query_one($sql);
    return $hinh_anh;
}

// Cập nhật hình ảnh
function update_hinh_anh($id_hinh_anh,$ten_hinh_anh,$id_tour){
    if($ten_hinh_anh!=""){
         $sql="UPDATE hinh_anh SET id_tour='".$id_tour."',ten_hinh_anh='".$ten_hinh_anh."'
     WHERE id_hinh_anh=".$id_hinh_anh;
    }else{  
        $sql="UPDATE hinh_anh SET id_tour='".$id_tour."'
     WHERE id_hinh_anh=".$id_hinh_anh;

    }
pdo_execute($sql);
}

// Xóa hình ảnh
function  delete_hinh_anh($id_hinh_anh){
    $sql="DELETE FROM hinh_anh WHERE id_hinh_anh=".$id_hinh_anh;
    pdo_execute($sql);
}

function  delete_hinh_anh_tuor($id_tuor){
    $sql="DELETE FROM hinh_anh WHERE id_tour=".$id_tuor;
    pdo_execute($sql);
}

?>