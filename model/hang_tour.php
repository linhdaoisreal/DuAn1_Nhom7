<?php  
// hiển thi danh sách hạng
function all_hang_tuor(){
    $sql="SELECT * FROM hang_tuor ORDER BY id_hang_tuor DESC";
    $list_hang_tuor=pdo_query($sql);
    return  $list_hang_tuor;
}

// Thêm mới hạng tour
function add_hang_tour($ten_hang_tuor,$muc_tang){
    $sql = "INSERT INTO hang_tuor(ten_hang_tuor,muc_tang) VALUES ('$ten_hang_tuor','$muc_tang')";
    pdo_execute($sql);
}
//Xóa hạng Tour
function delete_hang_tour($id_hang_tuor){
    $sql = "DELETE FROM hang_tuor WHERE id_hang_tuor=".$id_hang_tuor;
    pdo_execute($sql);
}

// hiển thị 1 Hạng Tour
function load_one_hang_tour($id_hang_tuor){
    $sql = "SELECT * FROM hang_tuor WHERE id_hang_tuor =".$id_hang_tuor;
    $load_one_hang_tour = pdo_query_one($sql);
    return $load_one_hang_tour;
}

function update_hang_tour($ten_hang_tuor,$muc_tang,$id_hang_tuor){
    $sql = "UPDATE hang_tuor SET ten_hang_tuor='$ten_hang_tuor' ,muc_tang='$muc_tang' WHERE id_hang_tuor=".$id_hang_tuor;
    pdo_execute($sql);
}


// TRUNG GIAN HẠNG TOUR
// hiển thi danh sách trung gian
function all_trunggian_ht(){
    $sql = "SELECT id_trunggian_ht, tuor_hang_tuor.id_tuor, tuor_hang_tuor.id_hang_tuor, ten_tuor, ten_hang_tuor FROM tuor_hang_tuor 
    JOIN tuor ON tuor.id_tuor = tuor_hang_tuor.id_tuor 
    JOIN hang_tuor ON hang_tuor.id_hang_tuor = tuor_hang_tuor.id_hang_tuor ORDER BY ten_tuor DESC";
    $listTrungGianHT=pdo_query($sql);
    return $listTrungGianHT;
}
// thêm tuor và hạng tuor
function insert_trunggian_ht($id_tuor,$id_hang_tuor){
    $sql="INSERT INTO tuor_hang_tuor(id_tuor,id_hang_tuor) VALUES ('$id_tuor','$id_hang_tuor')";
    pdo_execute($sql);
}

function load_one_trunggian_ht($id_trunggian_ht){
    $sql = "SELECT id_trunggian_ht, tuor_hang_tuor.id_tuor, tuor_hang_tuor.id_hang_tuor, ten_tuor, ten_hang_tuor FROM tuor_hang_tuor 
    JOIN tuor ON tuor.id_tuor = tuor_hang_tuor.id_tuor 
    JOIN hang_tuor ON hang_tuor.id_hang_tuor = tuor_hang_tuor.id_hang_tuor
    WHERE id_trunggian_ht=".$id_trunggian_ht;
    $TrungGianHT=pdo_query_one($sql);
    return $TrungGianHT;
}

function update_trunggian_ht($id_hang_tuor,$id_tuor,$id_trunggian_ht){
    $sql="UPDATE tuor_hang_tuor SET id_hang_tuor='".$id_hang_tuor."', id_tuor='".$id_tuor."' WHERE id_trunggian_ht=".$id_trunggian_ht;
    pdo_execute($sql);
}

function delete_trunggian_ht($id_trunggian_ht){
    $sql="DELETE FROM tuor_hang_tuor WHERE id_trunggian_ht=".$id_trunggian_ht;
    pdo_execute($sql);
}
?>