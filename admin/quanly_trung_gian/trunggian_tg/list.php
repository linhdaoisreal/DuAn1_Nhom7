<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách Trung gian Tuor và Thời Gian</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-2 mt-2">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    <th></th>
                    <th>ID Trung Gian</th>
                    <th>Tên Tour</th>
                    <th>Số Ngày</th>
                    <th>Thao Tác</th>
                </tr>

                <?php
                foreach ($listTrungGianTG as $checkTrungGianTG) {
                    extract($checkTrungGianTG);
                    $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
                    $suaTrungGianTG = "index.php?act=suaTrungGianTG&id_trunggian_tg=" . $id_trunggian_tg;
                    $xoaTrungGianTG = "index.php?act=xoaTrungGianTG&id_trunggian_tg=" . $id_trunggian_tg;
                    echo '
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id_trunggian_tg . '</td>  
                        <td>' . $ten_tuor . '</td>
                        <td>' . $so_ngay_dem . '</td>  
                        <td><a href="' . $suaTrungGianTG . '"><i class="fa-solid fa-pen-to-square m-2"></i></a> 
                        <a href="' . $xoaTrungGianTG . '" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a></td>                      
                                    
                    </tr>

                        ';
                }

                ?>

            </table>
        </div>

        <!-- Hành động -->
        <div class="inline-block py-2">
            <input type="button" name="" value="Chọn tất cả"
                class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="reset" name="" value="Bỏ chọn tất cả"
                class="bg-orange-300 h-8 w-32 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <input type="button" name="" value="Xóa các mục đã chọn"
                class="bg-orange-300 h-8 w-40 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
            <a href="index.php?act=add_trunggian_tg"><input type="button" name="" value="Nhập thêm"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>

        </div>
    </div>
</div>
<style>
    th,
    td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    table {
        border-radius: 0.5rem;
    }


    input {
        transition: 0.5s
    }
</style>
</style>