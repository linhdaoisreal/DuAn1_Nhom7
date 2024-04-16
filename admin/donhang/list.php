<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh Sách Đơn Tour</h1>
    </div>
    <!-- Form nhập mã hàng -->
    <div class="ml-2 mt-2">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    <th>Mã Đơn</th>
                    <th>Tên Người Đặt</th>
                    <th>Tên Tour</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Email</th>
                    <th>Ngày xuất phát</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Trang Thái</th>
                    <th></th>
                    <th></th>

                </tr>

                <?php          
                
                    foreach($list_don_hang as $don_hang){
                        extract($don_hang);
                            if($trang_thai == 0 ){
                                $trang_thai = 'Chưa thanh toán';
                            }elseif($trang_thai == 1){
                                $trang_thai = 'Đã thanh toán, Tour chưa khởi hành';
                            }elseif($trang_thai == 2){
                                $trang_thai = 'Đã đặt cọc, Tour chưa khởi hành';
                            }else{
                                $trang_thai = 'Đã hủy';
                            }
                        $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
                        $suaMien="index.php?act=sua_trang_thai&id_don_hang=".$id_don_hang;
                        $xoaHang="index.php?act=xoa_don_hang&id_don_hang=".$id_don_hang;
                        $ngayDatHang = $ngay_dat_hang;
                        $ngayDatHangFormatted = date('d-m-Y', strtotime($ngayDatHang));
                        echo'
                    <tr>
                        <td>'.$id_don_hang.'</td>
                        <td>'.$ho_va_ten.'</td>
                        <td>'.$ten_tuor.'</td>
                        <td>0'.$sdt.'</td>
                        <td>'.$dia_chi.'</td>
                        <td>'.$email.'</td>
                        <td>'.$ngay_khoi_hanh.'</td>
                        <td>'.$ngayDatHangFormatted.'</td>  
                        <td>'.$trang_thai.'</td>

                        <td>
                            <a href="'.$suaMien.'"><i class="fa-solid fa-pen-to-square m-2"></i></a>   
                        </td>       
                    </tr>
                        ';

                    }

                ?>

            </table>
        </div>

        <!-- Hành động -->
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



