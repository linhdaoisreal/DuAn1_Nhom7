<?php
if (is_array($load_one_tour)) {
    extract($load_one_tour);
    $hinhAnh = $img_path . $hinh_anh_mau;
}
?>
<!-- ĐẶT TUOR -->
<?php

    $you='<div class="grid grid-cols-8 my-4 gap-6 leading-8">
        <!-- Cột 1 -->
        <div class="col-span-8 md:col-span-4">
            <div>
                <div class="flex">
                    <h3>Họ và Tên: </h3>
                </div>
                <div class="w-full text-orange-400 rounded-md my-2">'.$ho_va_ten.'</div>
            </div>

            <div>
                <div class="flex">
                    <h3>Địa chỉ: </h3>
                </div>
                <div class="w-full text-orange-400 rounded-md my-2">'.$dia_chi.'</div>
            </div>

            <div>
                <div class="flex">
                    <h3>Mã bưu chính: </h3>
                </div>
                <div class="w-ful text-orange-400 rounded-md my-2">'.$ma_buu_chinh.'</div>
            </div>
        </div>

        <!-- Cột 2 -->
        <div class="col-span-8 md:col-span-4">
            <div>
                <div class="flex">
                    <h3>Email: </h3>
                </div>
                <div class="w-ful text-orange-400 rounded-md my-2">'.$email.'</div>
            </div>

            <div>
                <div class="flex">
                    <h3>Số điện thoại: </h3>
                </div>
                <div class="w-full text-orange-400 rounded-md my-2">'.$sdt.'</div>
            </div>

            <div>
                <h3>Tỉnh/Thành Phố</h3>
                <div class="w-full text-orange-400 rounded-md my-2">'.$tinh_thanh_pho.'</div>
            </div>
        </div>
    </div>

    <div>
        <p>Các điều kiện đặt thêm:</p>
        <div class="w-full text-orange-400  rounded-md my-2">'.$dk_them.'</div>
    </div>';

?>
<section>
   <div class="grid grid-cols-12 mx-12 my-8 gap-6">
            <div class="col-span-12 md:col-span-8">
                <h1 class="text-3xl font-semibold mb-6">Bạn đã đặt hàng thành công</h1>
                <h1 class="text-3xl font-semibold mb-6">Thông Tin Của Bạn</h1>
                <hr class="text-gray-500">
                
                <?php echo $you; ?>
                
            </div>
            <div class="col-span-12 md:col-span-4 border border-zinc-200 rounded-md">
            <h1 class="text-3xl font-semibold mb-6 px-4 pt-4">Your Booking</h1>
            <?php if (isset($_SESSION['dat_tuor'])) { ?>
                <div class="px-4">
                    <div class="flex justify-between pb-4">
                        <a href="" class="text-xl font-semibold mb-6">
                            <?= $load_one_tour['ten_tuor'] ?>
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
                            <input type="hidden" value="<?php $thanh_tien = $gia_nguoi_lon + $gia_tre_em?>" name='tong_gia'>
                            <?php echo($thanh_tien) ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>