<?php
if (is_array($load_one_tour)) {
    extract($load_one_tour);
    $hinhAnh = $img_path . $hinh_anh_mau;
}
?>
<!-- ĐẶT TUOR -->
<section>
    <form action="index.php?act=show_don_hang&id_tuor=<?= $id_tuor ?>" method="post" class="grid grid-cols-12 mx-12 my-8 gap-6">
        <?php if (isset($_SESSION['ho_ten'])) {
            $user = $_SESSION['ho_ten'] ?>
            <div class="col-span-12 md:col-span-8">
                <h1 class="text-3xl font-semibold mb-6">Booking Submission</h1>
                <hr class="text-gray-500">

                <div class="grid grid-cols-8 my-4 gap-6 leading-8">
                    <!-- Cột 1 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3>Họ và Tên </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name='ho_va_ten'
                                value="<?= $user['ho_ten'] ?>">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Địa chỉ </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="address"
                                value="<?= $user['dia_chi'] ?>" name="diachi">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Mã bưu chính </h3>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="ma_buu_chinh">
                        </div>
                    </div>

                    <!-- Cột 2 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3>Email </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2"
                                value="<?= $user['email'] ?>" name="email">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Số điện thoại </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2"
                                value="<?= $user['so_dien_thoai'] ?>" name="sdt">
                        </div>

                        <div>
                            <h3>Tỉnh/Thành Phố</h3>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="tinh_thanh_pho">
                        </div>
                    </div>
                </div>

                <div>
                    <p>Các điều kiện đặt thêm</p>
                    <textarea name="dk_them" id="" cols="30" rows="10"
                        class="w-full border border-zinc-400 rounded-md my-2"></textarea>
                </div>
            </div>

        <?php } else { ?>
            <!-- đặt hàng không cần đăng nhập -->
            <div class="col-span-12 md:col-span-8">
                <h1 class="text-3xl font-semibold mb-6">Booking Submission</h1>
                <hr class="text-gray-500">

                <div class="grid grid-cols-8 my-4 gap-6 leading-8">
                    <!-- Cột 1 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3>Họ và Tên </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name='ho_va_ten'>
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Địa chỉ </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="address">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Mã bưu chính </h3>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="ma_buu_chinh">
                        </div>
                    </div>

                    <!-- Cột 2 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3>Email </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="email">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Số điện thoại </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="sdt">
                        </div>

                        <div>
                            <h3>Tỉnh/Thành Phố</h3>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="tinh_thanh_pho">
                        </div>
                    </div>
                </div>

                <div>
                    <p>Các điều kiện đặt thêm</p>
                    <textarea name="dk_them" id="" cols="30" rows="10"
                        class="w-full border border-zinc-400 rounded-md my-2"></textarea>
                </div>
            </div>
        <?php } ?>


        <!-- Cột 3 -->
        <div class="col-span-12 md:col-span-4 border border-zinc-200 rounded-md">
            <h1 class="text-3xl font-semibold mb-6 px-4 pt-4">Your Booking</h1>
            <?php if (isset($_SESSION['dat_tuor'])) { ?>
                <div class="px-4">
                    <div class="flex justify-between pb-4">
                        <a href="" class="text-xl font-semibold mb-6">
                            <?= $ten_tuor ?>
                        </a>
                        <img class="w-5/12 md:w-1/3" src="<?= $hinhAnh ?>" alt="">
                    </div>
                </div>

                <div class="grid grid-cols-2 mx-4 leading-8 border border-x-0 border-zinc-200">
                    <div>
                        <p>Loại tuor</p>
                        <p>Ngày xuất phát</p>
                        <p>Thời gian</p>
                        <p>Số người lớn</p>
                        <p>Số trẻ em</p>
                    </div>
                    <div class="">
                        <p>
                            <?= $ten_mien ?>/<span>
                                <?= $ten_mua ?>
                            </span>
                        </p>
                        <p>
                            <?= $_SESSION['dat_tuor'][0][0] ?>
                        </p>
                        <p>
                            <?php if (is_array($load_snd)) {
                                extract($load_snd);
                            }
                            echo $so_ngay_dem ?>
                        </p>
                        <p>
                            <?= $_SESSION['dat_tuor'][0][1] ?>
                        </p>
                        <p>
                            <?= $_SESSION['dat_tuor'][0][2] ?>
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 mx-4 leading-8 border border-x-0 border-zinc-200">
                    <div>
                        <p>Giá người lớn</p>
                        <p>Giá trẻ em</p>
                        <p>Phụ phí</p>
                        <p>Tổng cộng</p>
                    </div>
                    <div>
                        <p><?php 
                            $gia_nguoi_lon = $_SESSION['dat_tuor'][0][1] * $gia;
                            echo($gia_nguoi_lon);
                        ?></p>
                        <p><?php 
                            $gia_tre_em = $_SESSION['dat_tuor'][0][2] * ($gia-($gia*5/100));
                            echo($gia_tre_em);
                        ?></p>
                        <p>0</p>
                        <p>
                            <input type="hidden" value="<?= $thanh_tien = $gia_nguoi_lon + $gia_tre_em?>" name='tong_gia'>
                            <?php echo($thanh_tien) ?>
                        </p>
                        <p>
                            <input type="hidden" value="<?= $tong_nguoi =  $_SESSION['dat_tuor'][0][1] + $_SESSION['dat_tuor'][0][2]?>" name='tong_nguoi'>
                        </p>
                        
                    </div>
                </div>

                <div class="flex mx-auto item-center justify-center py-8">
                    <input type="submit" value="ĐẶT NGAY" name="dat" class="bg-orange-500 w-[55%] h-12 text-xl text-center flex item-center justify-center rounded-lg 
                        text-white hover:scale-110 transition cursor-pointer">
                </div>
            <?php } ?>

        </div>
        <div></div>
    </form>
</section>