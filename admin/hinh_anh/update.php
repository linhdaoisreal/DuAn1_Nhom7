<?php

if(is_array($hinh_anh)){
    extract($hinh_anh);
    // echo "<pre>";
    // print_r($maLoai);
    // die;
}

// Load hình ảnh
$hinhpath="../gallery/".$ten_hinh_anh;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."'>";
}else{
    $hinh="Không có ảnh";
}

?>
<div class="row">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Sửa hình ảnh</h1>
    </div>
    <!-- Form sửa hình ảnh -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=update_hinh_anh" method="post" enctype="multipart/form-data">
            <!-- Mã hình ảnh -->
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">Mã ảnh</label><br>
                <input type="text" name="id_hinh_anh" class="border-orange-300 w-96 border-2 rounded-lg h-9">
            </div>

            <!-- Hình ảnh -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Hình ảnh</label><br>
                <input type="file" name="ten_hinh_anh" class="border-orange-300 w-96 border-2 rounded-lg h-14">
                <span id="ten_hinh_anh_error" class="text-red-500"></span>
                <div class="w-72 my-2">
                    <?= $hinh?>
                </div>
            </div>

            <!-- Mã tour -->
            <label for="" class="text-lg font-semibold text-orange-300">Tên Tour</label><br>
            <select name="id_tour" id="" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <?php
                        $id_tour['id_tuor'] ;
                            foreach($load_ten_tour as $value){
                                echo'<option '.($value['id_tuor'] == $id_tour ? "selected" : "" ).' value="'.$value['id_tuor'].'">'.$value['ten_tuor'].'</option>';
                                                     
                            }

                        ?>
            </select>

    </div>


    <div class="mt-8">
        <input type="hidden" name="id_hinh_anh" value="<?php if(isset($id_hinh_anh)&&($id_hinh_anh>0)) echo $id_hinh_anh?>">
        <input type="submit" name="capnhat" value="Cập nhật"
            class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
        <input type="reset" name="" value="Nhập lại"
            class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
        <a href="index.php?act=list_hinh_anh"><input type="button" name="" value="Danh sách"
                class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
    </div>

    <?php
                    if(isset($thongbao) && ($thongbao!=""))
                    echo $thongbao;

                    ?>
    </form>
</div>
</div>
</div>