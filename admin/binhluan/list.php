<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md">Danh sách bình luận</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-2 mt-2">
        <div class="">
            <table class="w-full border-collapse border-2 border-orange-300">
                <tr class="text-white bg-orange-300 text-lg">
                    
                    <th>Tour</th>
                    <th>Tên tài khoản</th>
                    <th>Nội dung</th>
                    <th>Thời gian</th>
                    <th>Thao tác</th>
                </tr>

                <?php
foreach($list_binhluan as $binhluan){
    extract($binhluan);
    $thongbaoxoa = "'" . "Bạn chắc chắn muốn xóa không?" . "'";
    $xoaBinhLuan="index.php?act=xoaBinhLuan&id_binh_luan=".$id_binh_luan;
    echo'
<tr>
    
    <td>'.$ten_tuor.'</td>
    <td>'.$ho_ten.'</td>
    <td>'.$noi_dung.'</td>  
    <td>'.$ngay_binh_luan.'</td>  
    <td><a href="'.$xoaBinhLuan.'" onclick="return confirm(' . $thongbaoxoa . ');"><i class="fa-solid fa-trash m-4"></i></a></td>                      
                
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



