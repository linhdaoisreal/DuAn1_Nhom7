<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách tài khoản</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-2 mt-2">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    
                    <th>Mã tài khoản</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
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
    <td>'.$so_dien_thoai.'</td>  
    <td>'.$dia_chi.'</td>  
    <td>'.$vai_tro.'</td>    
    <td><a href="'.$suaTaiKhoan.'"><i class="fa-solid fa-pen-to-square m-2"></i></a> <a href="'.$xoaTaiKhoan.'" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a></td>                      
                
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



