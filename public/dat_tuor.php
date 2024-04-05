<?php
if (is_array($load_one_tour)) {
    extract($load_one_tour);
    $hinhAnh = $img_path . $hinh_anh_mau;
}
?>
<!-- ĐẶT TUOR -->
<section>
    <form id="form_dat_tuor" action="index.php?act=check_out_online&id_tuor=<?= $id_tuor ?>" method="post"
        class="grid grid-cols-12 mx-12 my-8 gap-6">
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
                                <h3 class="text-orange-400 font-semibold">Tên người dùng </h3><span class="text-red-500">
                                    *</span>
                            </div>
                            <input id="ten" type="text" class="w-full border border-orange-400 rounded-md my-2" name='ho_va_ten'
                                value=" <?= $user['ho_ten'] ?>">
                            <span id="ten_error"></span>
                        </div>

                        <div>
                            <div class="flex">
                                <h3 class="text-orange-400 font-semibold">Địa chỉ </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-orange-400 rounded-md my-2" name="address"
                                value=" <?= $user['dia_chi'] ?>" name="diachi">
                        </div>

                        <div>
                            <div class="flex">
                                <h3 class="text-orange-400 font-semibold">Mã bưu chính </h3>
                            </div>
                            <input type="text" class="w-full border border-orange-400 rounded-md my-2" name="ma_buu_chinh">
                        </div>
                    </div>

                    <!-- Cột 2 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3 class="text-orange-400 font-semibold">Email </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-orange-400 rounded-md my-2"
                                value=" <?= $user['email'] ?>" name="email">
                        </div>

                        <div>
                            <div class="flex">
                                <h3 class="text-orange-400 font-semibold">Số điện thoại </h3><span class="text-red-500">
                                    *</span>
                            </div>
                            <input type="text" class="w-full border border-orange-400 rounded-md my-2"
                                value=" <?= $user['so_dien_thoai'] ?>" name="sdt">
                        </div>

                        <div>
                            <h3 class="text-orange-400 font-semibold">Tỉnh/Thành Phố</h3>
                            <input type="text" class="w-full border border-orange-400 rounded-md my-2"
                                name="tinh_thanh_pho">
                        </div>
                    </div>
                </div>

                <div>
                    <p class="text-orange-400 font-semibold">Ghi chú</p>
                    <textarea name="dk_them" id="" cols="30" rows="10"
                        class="w-full border border-orange-400 rounded-md my-2"></textarea>
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
                                <h3>Tên người dùng</h3><span class="text-red-500"> *</span>
                            </div>
                            <input id="ten" type="text" class="w-full border border-orange-400 rounded-md my-2" name='ho_va_ten'>
                            <span id="ten_error"></span>
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Địa chỉ </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-orange-400 rounded-md my-2" name="address">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Mã bưu chính </h3>
                            </div>
                            <input type="number" class="w-full border border-orange-400 rounded-md my-2" name="ma_buu_chinh">
                        </div>
                    </div>

                    <!-- Cột 2 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3>Email </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="email" class="w-full border border-orange-400 rounded-md my-2" name="email">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Số điện thoại </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="number" class="w-full border border-orange-400 rounded-md my-2" name="sdt">
                        </div>

                        <div>
                            <h3>Tỉnh/Thành Phố</h3>
                            <input type="text" class="w-full border border-orange-400 rounded-md my-2"
                                name="tinh_thanh_pho">
                        </div>
                    </div>
                </div>

                <div>
                    <p>Ghi chú</p>
                    <textarea name="dk_them" id="" cols="30" rows="10"
                        class="w-full border border-orange-400 rounded-md my-2"></textarea>
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
                        <p>
                            <?php
                            $gia_nguoi_lon = $_SESSION['dat_tuor'][0][1] * $gia;
                            echo ($gia_nguoi_lon);
                            ?> đ
                        </p>
                        <p>
                            <?php
                            $gia_tre_em = $_SESSION['dat_tuor'][0][2] * ($gia - ($gia * 5 / 100));
                            echo ($gia_tre_em);
                            ?> đ
                        </p>
                        <p>0 đ</p>
                        <p>
                            <input type="hidden" value="<?= $thanh_tien = $gia_nguoi_lon + $gia_tre_em ?>" name='tong_gia'>
                            <?php echo ($thanh_tien) ?> đ
                        </p>
                        <p>
                            <input type="hidden"
                                value="<?= $tong_nguoi = $_SESSION['dat_tuor'][0][1] + $_SESSION['dat_tuor'][0][2] ?>"
                                name='tong_nguoi'>
                        </p>

                        <p>
                            <input type="hidden" value="<?= $id_tuor ?>" name='id_tuor'>
                        </p>

                    </div>
                </div>

                <script>
                    document.querySelector('form').addEventListener('submit', function (event) {
                        var tenInput = document.getElementById('ten');
                        var tenError = document.getElementById('ten_error');

                        if (tenInput.value.trim() === '') {
                            tenError.textContent = "Không để trống Họ và tên";
                            event.preventDefault(); // Ngăn chặn gửi form
                        } else {
                            tenError.textContent = ""; // Xóa thông báo lỗi nếu có
                        }
                    });
                </script>

                <div class="flex flex-col mx-auto item-center justify-center py-8 leading-loose">
                    <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngay_local = date('d-m-Y');
                    $calculate_ngay_local = strtotime($ngay_local);
                    $ngay_chuyen_doi = date('d-m-Y', strtotime($_SESSION['dat_tuor'][0][0]));
                    $calculate_ngay_chuyen_doi = strtotime($ngay_chuyen_doi);
                    $calculate_day_gap = round(($calculate_ngay_chuyen_doi - $calculate_ngay_local) / (60 * 60 * 24));
                    if ($calculate_day_gap >= 21) {
                        echo '
                                <div class="flex item-center justify-center border border-orange-500 text-sky-500 py-2 my-2 mx-8 rounded-lg hover:border-sky-500 hover:text-orange-500 hover:text-lg transition-all">
                                    <button class="font-semibold" type="submit" onclick="confirmBooking()" name="payUrl">Thanh toán với Momo</button>
                                </div>
                                <div class="flex item-center justify-center border border-orange-500 text-sky-500 py-2 my-2 mx-8 rounded-lg hover:border-sky-500 hover:text-orange-500 hover:text-lg transition-all">
                                    <button class="font-semibold" type="submit" onclick="confirmBooking()" name="redirect">Thanh toán với VNPAY</button>
                                </div>
                                <div class="flex item-center justify-center border border-orange-500 text-sky-500 py-2 my-2 mx-8 rounded-lg hover:border-sky-500 hover:text-orange-500 hover:text-lg transition-all">
                                    <button class="font-semibold" type="submit" name="visa">Thanh toán với VISA</button>
                                </div>
                                ';
                    } else {
                        echo '
                                <div class="flex item-center justify-center border border-orange-500 text-sky-500 py-2 my-2 mx-8 rounded-lg hover:border-sky-500 hover:text-orange-500 hover:text-lg transition-all">
                                    <button class="font-semibold" type="submit" name="payUrl">Thanh toán với Momo</button>
                                </div>
                                <div class="flex item-center justify-center border border-orange-500 text-sky-500 py-2 my-2 mx-8 rounded-lg hover:border-sky-500 hover:text-orange-500 hover:text-lg transition-all">
                                    <button class="font-semibold" type="submit" name="redirect">Thanh toán với VNPAY</button>
                                </div>
                                <div class="flex item-center justify-center border border-orange-500 text-sky-500 py-2 my-2 mx-8 rounded-lg hover:border-sky-500 hover:text-orange-500 hover:text-lg transition-all">
                                    <button class="font-semibold" type="submit" name="visa">Thanh toán với VISA</button>
                                </div>
                                ';
                    }
                    ?>

                </div>
            <?php } ?>


        </div>
        
        <script>
            function confirmBooking() {
                var confirmDiscount = confirm("Ngày xuất phát bạn chọn còn cách khá xa. Bạn có muốn đặt cọc 50% giá trị không? (Chọn OK: Để đặt cọc Cancel: Để thanh toán đầy đủ)");
                if (confirmDiscount) {
                    // Tạo phần tử input
                    var dat_coc_Input = document.createElement("input");
                    dat_coc_Input.type = "hidden";
                    dat_coc_Input.name = "dat_coc";
                    dat_coc_Input.value = 0.5;

                    // Lấy form và thêm phần tử input vào form
                    var form = document.querySelector("#form_dat_tuor");
                    form.appendChild(dat_coc_Input);
                } else {
                    // Xử lý logic khi người dùng không muốn giảm giá
                }
            }
        </script>
    </form>

    
</section>