<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách Tour</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-2 mt-2">
        <!-- Hành động -->
        <div class="inline-block py-2">
            <input type="button" name="" value="Chọn tất cả"
                class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="reset" name="" value="Bỏ chọn tất cả"
                class="bg-orange-300 h-8 w-32 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="button" name="" value="Xóa các mục đã chọn"
                class="bg-orange-300 h-8 w-40 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <a href="index.php?act=add_tour"><input type="button" name="" value="Nhập thêm"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
        </div>
        
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    
                    <th>Mã Tour</th>
                    <th>Tên Tour</th>
                    <th>Hình Ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Địa điểm</th>
                    <th>Phương tiện</th>
                    <th class="w-[15%]">Ngày xuất phát</th>
                    <th>Miền/Mùa</th>
                    <th>Thao tác</th>
                    
                </tr>

                <?php
                foreach ($load_all_tour as $checkTour) {
                    extract($checkTour);
                    $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
                    $suaTour = "index.php?act=sua_tour&id_tuor=" . $id_tuor;
                    $xoaTour = "index.php?act=xoa_tour&id_tuor=" . $id_tuor;
                    $hinhAnh = $img_path_admin.$hinh_anh_mau;
                    $listNgayTheoTuor = select_ngay_theo_tuor($id_tuor);                   
                    echo '
                        <tr>
                           
                            <td>' . $id_tuor . '</td>
                            <td>' . $ten_tuor . '</td>
                            <td><img class="w-24" src="'.$hinhAnh.'" alt=""></td>
                            <td>' . $gia . '</td>   
                            <td>' . $so_luong . '</td>  
                            <td>' . $dia_diem . '</td> 
                            <td>' . $phuong_tien . '</td>
                            <td>';
                                foreach ($listNgayTheoTuor as $CheckNgay){
                                    extract($CheckNgay);
                                    $xoaNgay = "index.php?act=xoaTrungGianNXP&id_trunggian_nxp=" . $id_trunggian_nxp;
                                    echo'<p>
                                    '.$ngay.' <a class="text-red-400" onclick="return confirm(' . $thongbaoxoa . ');" href="'.$xoaNgay.'">Xoá</a>
                                    </p>';
                                }
                            echo'</td> 
                            <td>' . $ten_mien . '/' . $ten_mua . '</td>     
                            <td>
                                <a href="' . $suaTour . '"><i class="fa-solid fa-pen-to-square m-2"></i></a> 
                                <a href="' . $xoaTour . '" onclick="return confirm(' . $thongbaoxoa . ');">
                                    <i class="fa-solid fa-trash m-4"></i>
                                </a>

                                <div class="cursor-pointer">
                                    <a class="text-sky-500" href="index.php?act=load_trung_gian_nxp&id_tuor='.$id_tuor.'">Thêm ngày xuất phát</a>
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
    th,
    td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: left;
        font-size: 1rem;
    }

    table {
        border-radius: 0.5rem;
    }


    input {
        transition: 0.5s
    }
</style>
</style>