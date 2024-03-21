<div class="row">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách Hạng Tour</h1>
    </div>
    <!-- Form nhập mã hàng -->
    <div class="ml-2 mt-2">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    <th></th>
                    <th>Mã Hạng</th>
                    <th>Mức Tăng</th>
                    <th>Tên Hạng</th>
                    <th>Tên Tour</th>
                    <th>Thao tác</th>
                </tr>

                <?php
foreach($list_hang_tuor as $hang_tuor){
    extract($hang_tuor);
    $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
    $suaHang="index.php?act=sua_hang_tour&id_hang_tuor=".$id_hang_tuor;
    $xoaHang="index.php?act=xoa_hang_tour&id_hang_tuor=".$id_hang_tuor;
    echo'
<tr>
    <td><input type="checkbox" name="" id=""></td>
    <td>'.$id_hang_tuor.'</td>
    <td>'.$muc_tang.'</td>
    <td>'.$ten_hang_tuor.'</td> 
    <td>'.$ten_tuor.'</td>
    <td><a href="'.$suaHang.'"><i class="fa-solid fa-pen-to-square m-2"></i></a> <a href="'.$xoaHang.'" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a></td>                      
                
</tr>

    ';
}

?>

            </table>
        </div>

        <!-- Hành động -->
        <div class="inline-block py-2">
            <input type="button" name="" value="Chọn tất cả" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="reset" name="" value="Bỏ chọn tất cả" class="bg-orange-300 h-8 w-32 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="button" name="" value="Xóa các mục đã chọn" class="bg-orange-300 h-8 w-40 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <a href="index.php?act=add_hang_tuor"><input type="button" name="" value="Nhập thêm" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>

        </div>
    </div>
</div>
<style>
    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    table{
        border-radius: 0.5rem;
    }

   
    input{
        transition: 0.5s
    } </style>
</style>



