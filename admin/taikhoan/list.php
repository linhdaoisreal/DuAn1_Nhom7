<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách tài khoản</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-2 mt-2">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    
                    <th>ID</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>

                <?php
                foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
                    $suaTaiKhoan="index.php?act=suaTaiKhoan&id_nguoi_dung=".$id_nguoi_dung;
                    $xoaTaiKhoan="index.php?act=xoaTaiKhoan&id_nguoi_dung=".$id_nguoi_dung;
                    echo'
                <tr>
                    
                    <td>'.$id_nguoi_dung.'</td>
                    <td>'.$ho_ten.'</td>
                    <td>'.$email.'</td>  
                    <td>0'.$so_dien_thoai.'</td>  
                    <td>'.$dia_chi.'</td>  
                    <td>'; if($vai_tro == 0){
                            echo "Người dùng";
                        }elseif($vai_tro == 1){
                            echo "ADMIN";
                        } 
                    echo'</td>
                    <td>'; if($trang_thai == 0){
                        echo "Tồn tại";
                    }elseif($trang_thai == 1){
                        echo "Đã khoá";
                    } 
                    echo'</td>    
                    <td>
                        <a href="'.$suaTaiKhoan.'"><i class="fa-solid fa-pen-to-square m-2"></i></a> 
                        <a href="'.$xoaTaiKhoan.'" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a>
                        <div class="cursor-pointer">
                            <a class="text-sky-500" href="index.php?act=khoiPhucTK&id_nguoi_dung='.$id_nguoi_dung.'">Khôi phục tài khoản</a>
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



