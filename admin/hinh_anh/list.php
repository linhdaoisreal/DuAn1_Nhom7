<div class="row flex flex-col flex-1 overflow-y-auto">
<div class="">
                <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Danh sách hình ảnh</h1>
            </div>
    <form action="index.php?act=list_hinh_anh" method="post">
        <!-- Tìm kiếm hình ảnh -->
        <div class="text-center mt-6">
                <!-- <input type="text" name="keyword" id="" class="w-60 border-orange-300 border-2 rounded-lg h-8"> -->
                <select name="id_tour" id="" class="border-2 border-orange-300 rounded-lg h-8 cursor-pointer w-36">
                <option value="0" selected>Tất cả tour</option>
                <?php
                            foreach($load_ten_tour as $tour){
                            extract($tour);
                            echo'<option value="'.$id_tuor.'">'.$ten_tuor.'</option>';
                            }
                        ?>                    
                        </select>
                <input type="submit" name="listsearch" value="Search" class="border-orange-300 rounded-lg w-20 h-8 bg-orange-300 text-white hover:bg-cyan-500 cursor-pointer">
                </div>
            </form>
   
    <!-- Form nhập mã hàng -->
    <div class="ml-2 mt-10">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                   
                    <th>Mã ảnh</th>
                    <th>Hình ảnh</th>
                    <th>Tên Tour</th>
                    <th>Thao tác</th>
                    
                </tr>
                <?php
foreach($list_hinh_anh as $hinh_anh){
    extract($hinh_anh);
    $suaHinhAnh="index.php?act=suaHinhAnh&id_hinh_anh=".$id_hinh_anh;
    $xoaHinhAnh="index.php?act=xoaHinhAnh&id_hinh_anh=".$id_hinh_anh;
    $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
    $hinhpath="../gallery/".$ten_hinh_anh;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='130'>";
    }else{
        $hinh="Không có ảnh";
    }
    echo'
<tr>
    <td>'.$id_hinh_anh.'</td>
    <td class="w-64">'.$hinh.'</td>
    <td>'.$ten_tuor.'</td>
    <td><a href="'.$suaHinhAnh.'"><i class="fa-solid fa-pen-to-square m-2"></i></a> <a href="'.$xoaHinhAnh.'" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a></td>                      
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
            <a href="index.php?act=add_hinh_anh"><input type="button" name="" value="Nhập thêm" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>

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

