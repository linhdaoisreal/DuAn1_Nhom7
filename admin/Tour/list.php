<div class="row">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách Tour</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-2 mt-2">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    <th></th>
                    <th>Mã Tour</th>
                    <th>Tên Tour</th>
                    <th>Tổng quan</th>
                    <th>Hành trình</th>
                    <th>Số lượng</th>
                    <th>Địa điểm</th>
                    <th>Phương tiện</th>
                    <th>Mã Miền/Mùa</th>
                    <th>Thao tác</th>
                </tr>

                <?php
                // foreach ($list_danhmuc_mien as $danhmuc_mien) {
                //     extract($danhmuc_mien);
                //     $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
                //     $suaMien = "index.php?act=sua_tour&id_mien=" . $id_mien;
                //     $xoaMien = "index.php?act=xoa_tour&id_mien=" . $id_mien;
                //     echo '
                //         <tr>
                //             <td><input type="checkbox" name="" id=""></td>
                //             <td>' . $a . '</td>
                //             <td>' . $a . '</td>  
                //             <td><a href="' . $a . '"><i class="fa-solid fa-pen-to-square m-2"></i></a> <a href="' . $a . '" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a></td>                      
                                        
                //         </tr>

                //     ';
                // }

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
            <a href="index.php?act=add_tour"><input type="button" name="" value="Nhập thêm"
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