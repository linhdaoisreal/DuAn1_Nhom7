<?php
if (is_array($load_one_tour)) {
    extract($load_one_tour);
    $hinhAnh = $img_path . $hinh_anh_mau;
}
if (is_array($loadOneDH)) {
    extract($loadOneDH);
}
?>
<!-- ĐẶT TUOR -->
<?php

$you = '<div class="grid grid-cols-8 my-4 gap-6 leading-8">
        <!-- Cột 1 -->
        <div class="col-span-8 md:col-span-4">
            <div>
                <div class="flex">
                    <h3 class="font-semibold">Họ và Tên: </h3>
                </div>
                <div class="w-full text-orange-400 rounded-md my-2">' . $ho_va_ten . '</div>
            </div>

            <div>
                <div class="flex">
                    <h3 class="font-semibold">Địa chỉ: </h3>
                </div>
                <div class="w-full text-orange-400 rounded-md my-2">' . $dia_chi . '</div>
            </div>

            <div>
                <div class="flex">
                    <h3 class="font-semibold">Mã bưu chính: </h3>
                </div>
                <div class="w-ful text-orange-400 rounded-md my-2">' . $ma_buu_chinh . '</div>
            </div>
        </div>

        <!-- Cột 2 -->
        <div class="col-span-8 md:col-span-4">
            <div>
                <div class="flex">
                    <h3 class="font-semibold">Email: </h3>
                </div>
                <div class="w-ful text-orange-400 rounded-md my-2">' . $email . '</div>
            </div>

            <div>
                <div class="flex">
                    <h3 class="font-semibold">Số điện thoại: </h3>
                </div>
                <div class="w-full text-orange-400 rounded-md my-2">' . $sdt . '</div>
            </div>

            <div>
                <h3 class="font-semibold">Tỉnh/Thành Phố</h3>
                <div class="w-full text-orange-400 rounded-md my-2">' . $tinh_thanh_pho . '</div>
            </div>
        </div>
    </div>

    <div>
        <p class="font-semibold">Ghi chú:</p>
        <div class="w-full text-orange-400  rounded-md my-2">' . $dk_them . '</div>
    </div>';

?>
<section>
    <div class="grid grid-cols-12 mx-12 my-8 gap-6">
        <div class="col-span-12 md:col-span-8">
            <div class="flex mb-3">
                <h2 class="text-3xl font-semibold">Bạn đã thanh toán thành công</h2>
                <div class="flex items-center justify-center rounded-full bg-green-400 h-9 w-9 mt-1 m-2">
                    <i class="fa-solid fa-check text-white"></i>
                </div>
            </div>

            <h2 class="text-xl font-semibold mb-6">Thông Tin Của Bạn</h2>
            <p class="font-semibold">Mã hoá đơn của bạn là: <?= $id_don_hang ?></p>
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
                    <p>Thanh toán</p>
                </div>
                <div>
                    <p><?php
                        $gia_nguoi_lon = $_SESSION['dat_tuor'][0][1] * $gia;
                        echo ($gia_nguoi_lon);
                        ?></p>
                    <p><?php
                        $gia_tre_em = $_SESSION['dat_tuor'][0][2] * ($gia - ($gia * 5 / 100));
                        echo ($gia_tre_em);
                        ?></p>
                    <p>0</p>
                    <p>
                        <input type="hidden" value="<?php $thanh_tien = $gia_nguoi_lon + $gia_tre_em ?>"
                            name='tong_gia'>
                        <?php
                            if (isset($_SESSION['dat_coc'])) {
                                echo $_SESSION['dat_coc'][0][0];
                            } else {
                                echo $thanh_tien;
                            }
                            ?>
                    </p>
                </div>
            </div>
            <?php } elseif (isset($load_one_tour) && isset($loadOneDH)) { ?>
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
                    <p>Số người đăng kí</p>
                </div>
                <div class="">
                    <p>
                        <?= $ten_mien ?>/<span>
                            <?= $ten_mua ?>
                        </span>
                    </p>
                    <p>
                        <?= $ngay_khoi_hanh?>
                    </p>
                    <p>
                        <?php if (is_array($load_snd)) {
                                extract($load_snd);
                            }
                            echo $so_ngay_dem ?>
                    </p>
                    <p>
                        <?= $tong_nguoi ?>
                    </p>

                </div>
            </div>

            <div class="grid grid-cols-2 mx-4 leading-8 border border-x-0 border-zinc-200">
                <div>
                    <p>Thành tiền</p>
                    <p>Trạng thái</p>
                    <p>Đã thanh toán</p>
                </div>
                <div>
                    <p>
                        <?= $tong_gia?>
                    </p>
                    <p>
                        <?php
                            if($trang_thai == 0){
                                echo "Chưa thanh toán";
                            } elseif($trang_thai == 1){
                                echo "Đã thanh toán";
                            } elseif($trang_thai == 2){
                                echo "Đã đặt cọc";
                            }
                        ?>
                    </p>
                    <p>
                        <?php
                            if($trang_thai == 0){
                                echo "0";
                            } elseif($trang_thai == 1){
                                echo 'Trạng thái 1'. $tong_gia;
                            } elseif($trang_thai == 2){
                                if (is_numeric($tong_gia)) {
                                    $da_thanh_toan = (float)($loadOneDH['tong_gia'] / 2);
                                    echo $da_thanh_toan;
                                } else {
                                    echo "Giá trị không hợp lệ.";
                                }
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="mx-4 leading-8 border border-x-0 border-zinc-200">
                <?php 
                    date_default_timezone_set('Asia/Ho_Chi_Minh'); 
                    $ngay_local = date('d-m-Y'); 
                    $calculate_ngay_local = strtotime($ngay_local);
                    $ngay_chuyen_doi = date('d-m-Y', strtotime($ngay_khoi_hanh));
                    $calculate_ngay_chuyen_doi = strtotime($ngay_chuyen_doi);
                    $calculate_day_gap = round(($calculate_ngay_chuyen_doi - $calculate_ngay_local)/(60*60*24));
                    if($calculate_day_gap > 1){ 
                ?>
                    <form class="flex flex-col mx-auto item-center justify-center py-8 leading-loose" action="" method="post">
                        <div class="flex item-center justify-center border border-orange-500 text-sky-500 py-2 my-2 mx-8 rounded-lg hover:border-sky-500 hover:text-orange-500 hover:text-lg transition-all">
                            <input type="hidden" name="">
                            <input class="font-semibold" type="button" value="Cập nhật thông tin">
                        </div>
                    </form>
                <?php }?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>