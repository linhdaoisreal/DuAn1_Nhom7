<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách Thời Gian</h1>
    </div>
    <!-- Form nhập mã hàng -->
    <div class="ml-2 mt-2">
        <!-- Hành động -->
        <div class="inline-block py-2">
            <input type="button" name="" value="Chọn tất cả" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="reset" name="" value="Bỏ chọn tất cả" class="bg-orange-300 h-8 w-32 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="button" name="" value="Xóa các mục đã chọn" class="bg-orange-300 h-8 w-40 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <a href="index.php?act=add_thoi_gian"><input type="button" name="" value="Nhập thêm" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
        </div>
        
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    <th></th>
                    <th>Mã Thời Gian</th>
                    <th>Số Ngày Đêm</th>
                    <th>Trạng Thái</th>
                    <th>Thao Tác</th>

                </tr>

                <?php
                    foreach($listThoiGian as $thoi_gian){
                        extract($thoi_gian);
                        $thongbaoxoa = "'" . "Sau khi xoá mục thờI gian này sẽ ẩn khỏi trang web cảu bạn? Bạn có chắc chắn muốn xoá không?" . "'";
                        $suaThoiGian="index.php?act=sua_thoi_gian&id_thoi_gian=".$id_thoi_gian;
                        $xoaThoiGian="index.php?act=xoa_thoi_gian&id_thoi_gian=".$id_thoi_gian;
                        echo'
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id_thoi_gian.'</td>
                        <td>'.$so_ngay_dem.'</td>
                        <td>';
                        if ($trang_thai == 1) {
                            echo 'Đã ẩn';
                        }elseif($trang_thai == 0){
                            echo 'Đang hiển thị';
                        }
                        echo'</td> 
                        <td>
                            <a href="'.$suaThoiGian.'"><i class="fa-solid fa-pen-to-square m-2"></i></a> 
                            <a href="'.$xoaThoiGian.'" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a>
                            <div class="cursor-pointer">
                                <a class="text-sky-500" href="index.php?act=khoiphucThoiGian&id_thoi_gian='.$id_thoi_gian.'">Khôi Phục Trạng Thái</a>
                            </div>
                        </td>                      
                                    
                    </tr>
                    ';
                    }

                ?>

            </table>
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



