<!-- Liên hệ -->
<div class="flex justify-center items-center w-full">
    <div class="py-20">
        <h1 class="text-2xl text-orange-500 font-medium text-center">Chỉnh sửa tài khoản</h1>
        <br class="">
        <div class="border-2 border-orange-400 rounded-xl bg-gray-30 drop-shadow-sm w-full pt-5 pb-20 px-20">
            <div class="mt-10">
            <?php
                    
                    if(isset($_SESSION['ho_ten'])&&(is_array($_SESSION['ho_ten']))){
                        extract($_SESSION['ho_ten']);
                    }
                ?>

                <form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data">
                    <div class="flex mb-10">
                        <div class="mr-10">
                            <img style="width:140px;height:140px;border-radius:50%" src="./gallery/<?= $anh_dai_dien?>" alt="" class="object-cover"><br>
                            <input type="file" name="anh_dai_dien">
                        </div>
                        <div>
                            <div class="mt-5">
                                <label for="" class="block text-base text-orange-400 mb-2">Tên đăng nhập</label>
                                <input type="text" name="ho_ten" value="<?=$ho_ten ?>"
                                    class="border-2 border-orange-400 rounded-xl w-80 px-3 py-2 focus:outline-none">
                            </div>
                            <div class="mt-5">
                                <label for="" class="block text-base text-orange-400 mb-2">Email</label>
                                <input type="text" name="email" value="<?=$email ?>"
                                    class="border-2 border-orange-400 rounded-xl w-80 px-3 py-2 focus:outline-none">
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="mt-5 mr-10">
                            <label for="" class="block text-base text-orange-400 mb-2">Số điện thoại</label>
                            <input type="text" name="so_dien_thoai" value="<?=0?><?=$so_dien_thoai ?>" maxlength="10"
                                class="border-2 border-orange-400 rounded-xl w-80 px-3 py-2 focus:outline-none">
                        </div>
                        <div class="mt-5">
                            <label for="" class="block text-base text-orange-400 mb-2">Địa chỉ</label>
                            <input type="text" name="dia_chi" value="<?=$dia_chi ?>"
                                class="border-2 border-orange-400 rounded-xl w-80 px-3 py-2 focus:outline-none ">
                        </div>
                    </div>
                    <div class="mt-10 flex">
                        <input  type="hidden" name="id_nguoi_dung" value="<?=$id_nguoi_dung ?>">
                        <input class="border-2 border-orange-400 rounded-3xl px-2 py-2 w-40 bg-orange-400 text-white mr-10 cursor-pointer" type="submit" value="Cập nhật" name="capnhat">
                        <input class="border-2 border-orange-400 rounded-3xl px-2 py-2 w-40 bg-orange-400 text-white cursor-pointer mr-10" type="reset" value="Nhập lại">
                       
                    </div>
                </form>

                 <!-- Thông báo -->
                <h2 class="mt-10 text-xl text-orange-400 font-semibold">
                    <?php
                    if(isset($thongbao) && !empty($thongbao)) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</div>
