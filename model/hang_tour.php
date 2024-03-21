<?php  
// hiển thi danh sách hạng
function all_hang_tuor(){
    $sql="SELECT * FROM hang_tuor INNER JOIN tuor on hang_tuor.id_tuor = tuor.id_tuor ORDER BY ten_tuor DESC";
    $list_hang_tuor=pdo_query($sql);
    return  $list_hang_tuor;
}

// Thêm mới hạng tour
function add_hang_tour($ten_hang_tuor,$muc_tang,$id_tuor){
    $sql = "INSERT INTO hang_tuor(ten_hang_tuor,muc_tang,id_tuor) VALUES ('$ten_hang_tuor','$muc_tang','$id_tuor')";
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

function update_hang_tour($ten_hang_tuor,$muc_tang,$id_tuor,$id_hang_tuor){
    $sql = "UPDATE hang_tuor SET ten_hang_tuor='$ten_hang_tuor' ,muc_tang='$muc_tang',id_tuor='$id_tuor' WHERE id_hang_tuor=".$id_hang_tuor;
    pdo_execute($sql);
}

?>