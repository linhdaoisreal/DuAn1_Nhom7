<?php
if (is_array($load_one_tour)) {
    extract($load_one_tour);
    // var_dump($load_one_tour);
}
?>
<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Cập nhật tour</h1>
    </div>
    <!-- Form nhập thêm mùa -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=update_tour" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-2">
                <div class="">
                    <!-- Mã tour -->
                    <div class="mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">ID tour</label><br>
                        <input type="text" name="" disabled class="border-orange-300 w-full border-2 rounded-lg h-9"
                            value="<?php if (isset($id_tuor) && ($id_tuor != ""))
                        echo $id_tuor ?>">
                    </div>

                    <!-- Tên tour -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Tên Tuor</label><br>
                        <input type="text" name="ten_tour" id="ten_tour"
                            class="border-orange-300 w-full border-2 rounded-lg h-9" value="<?php if (isset($ten_tuor) && ($ten_tuor != ""))
                    echo $ten_tuor ?>">
                        <span id="ten_tour_error" class="text-red-500"></span>
                    </div>

                    <!-- Giá -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Giá</label><br>
                        <input type="number" name="gia" id="gia"
                            class="border-orange-300 w-full border-2 rounded-lg h-9" value="<?php if (isset($gia) && ($gia != ""))
                    echo $gia ?>">
                        <span id="gia_error" class="text-red-500"></span>
                    </div>

                    <!-- Số lượng -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Số lượng tối đa</label><br>
                        <input type="number" name="so_luong" id="so_luong"
                            class="border-orange-300 w-full border-2 rounded-lg h-9" value="<?php if (isset($so_luong) && ($so_luong != ""))
                    echo $so_luong ?>">
                        <span id="so_luong_error" class="text-red-500"></span>
                    </div>

                    <!-- Địa điểm -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Địa điểm</label><br>
                        <input type="text" name="dia_diem" id="dia_diem"
                            class="border-orange-300 w-full border-2 rounded-lg h-9" value="<?php if (isset($dia_diem) && ($dia_diem != ""))
                    echo $dia_diem ?>">
                        <span id="dia_diem_error" class="text-red-500"></span>
                    </div>

                    <!-- Hình ảnh mẫu -->
                    <div class="mt-8">
                        <label for="" class="text-lg font-semibold text-orange-300">Hình ảnh</label><br>
                        <input type="file" name="hinh_anh_mau" class="border-orange-300 w-96 border-2 rounded-lg h-14">
                        <span id="hinh_anh_mau_error" class="text-red-500"></span>
                        <div class="w-72 my-2">
                            <img src="<?= $img_path_admin.$hinh_anh_mau?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="">
                    <!-- Phương tiện -->
                    <div class="mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Phương tiện</label><br>
                        <input type="text" name="phuong_tien" id="phuong_tien"
                            class="border-orange-300 w-full border-2 rounded-lg h-9" value="<?php if (isset($phuong_tien) && ($phuong_tien != ""))
                    echo $phuong_tien ?>">
                        <span id="phuong_tien_error" class="text-red-500"></span>
                    </div>

                    <!-- Xuất phát -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Xuất phát</label><br>
                        <input type="text" name="xuat_phat" id="xuat_phat"
                            class="border-orange-300 w-full border-2 rounded-lg h-9" value="<?php if (isset($xuat_phat) && ($xuat_phat != ""))
                    echo $xuat_phat ?>">
                        <span id="xuat_phat_error" class="text-red-500"></span>
                    </div>

                    <!-- ID miền -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Mã miền</label><br>
                        <select name="ma_mien" id="ma_mien" class="border-orange-300 w-full border-2 rounded-lg h-9">
                            <option value="">-None-</option>
                            <?php
                foreach ($list_danhmuc_mien as $checkdmMien) {
                    if ($checkdmMien['id_mien'] == $id_mien) {
                        $check = "selected";
                    } else {
                        $check = "";
                    }
                    echo '<option value="' . $checkdmMien['id_mien'] . '" ' . $check . '> ' . $checkdmMien['ten_mien'] . ' </option>';
                }
                ?>
                        </select>
                        <span id="ma_mien_error" class="text-red-500"></span>
                    </div>

                    <!-- ID mùa -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Mã mùa</label><br>
                        <select name="ma_mua" id="ma_mua" class="border-orange-300 w-full border-2 rounded-lg h-9">
                            <?php
                        foreach ($list_danhmuc_mua as $checkdmMua) {
                            if ($checkdmMua['id_mua'] == $id_mua) {
                                $check = "selected";
                            } else {
                                $check = "";
                            }
                            echo '<option value="' . $checkdmMua['id_mua'] . '" ' . $check . '> ' . $checkdmMua['ten_mua'] . ' </option>';
                        }
                        ?>
                        </select>
                        <span id="ma_mua_error" class="text-red-500"></span>
                    </div>

                    <!-- ID thời gian -->
                    <div class="mt-8 mr-12">
                        <label for="" class="text-lg font-semibold text-orange-300">Mã Thời Gian</label><br>
                        <select name="ma_thoi_gian" id="ma_thoi_gian"
                            class="border-orange-300 w-full border-2 rounded-lg h-9">
                            <?php
                        foreach ($listThoiGian as $checkTG) {
                            extract($checkTG);
                            if ($checkTG['id_thoi_gian'] == $id_thoi_gian) {
                                $check = "selected";
                            } else {
                                $check = "";
                            }
                            if($trang_thai == 1){
                                echo '<option class="hidden" value="' . $checkTG['id_thoi_gian'] . '" ' . $check . '> ' . $checkTG['so_ngay_dem'] . ' </option>';
                            }else{
                                echo '<option value="' . $checkTG['id_thoi_gian'] . '" ' . $check . '> ' . $checkTG['so_ngay_dem'] . ' </option>';
                            }
                        }
                        ?>
                        </select>
                        <span id="ma_thoi_gian_error" class="text-red-500"></span>
                    </div>
                </div>
            </div>


            <!-- Tổng quan *-->
            <div class="mt-8 mr-12">
                <label for="" class="text-lg font-semibold text-orange-300">Tổng quan</label><br>
                <textarea name="tong_quan" id="tong_quan" cols="50" rows="25"
                    class="border-orange-300 w-full border-2 rounded-lg h-24">
                    <?php if (isset($tong_quan) && ($tong_quan != ""))
                    echo $tong_quan ?>
                            </textarea>
                <span id="tong_quan_error" class="text-red-500"></span>
            </div>

            <!-- Hành trình *-->
            <div class="mt-8 mr-12">
                <label for="" class="text-lg font-semibold text-orange-300">Hành trình</label><br>
                <textarea name="hanh_trinh" id="hanh_trinh" cols="50" rows="25"
                    class="border-orange-300 w-full border-2 rounded-lg h-24">
                    <?php if (isset($hanh_trinh) && ($hanh_trinh != ""))
                    echo $hanh_trinh ?>
                            </textarea>
                <span id="hanh_trinh_error" class="text-red-500"></span>
            </div>





            <!-- Script JavaScript -->
            <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                var tenTourInput = document.getElementById('ten_tour');
                var tenTourError = document.getElementById('ten_tour_error');

                var giaInput = document.getElementById('gia');
                var giaError = document.getElementById('gia_error');

                var tongQuanInput = document.getElementById('tong_quan');
                var tongQuanError = document.getElementById('tong_quan_error');

                var hanhTrinhInput = document.getElementById('hanh_trinh');
                var hanhTrinhError = document.getElementById('hanh_trinh_error');

                var soLuongInput = document.getElementById('so_luong');
                var soLuongError = document.getElementById('so_luong_error');

                var diaDiemInput = document.getElementById('dia_diem');
                var diaDiemError = document.getElementById('dia_diem_error');

                var phuongTienInput = document.getElementById('phuong_tien');
                var phuongTienError = document.getElementById('phuong_tien_error');

                var xuatPhatInput = document.getElementById('xuat_phat');
                var xuatPhatError = document.getElementById('xuat_phat_error');

                var maMienInput = document.getElementById('ma_mien');
                var maMienError = document.getElementById('ma_mien_error');

                var maMuaInput = document.getElementById('ma_mua');
                var maMuaError = document.getElementById('ma_mua_error');

                var maThoiGianInput = document.getElementById('ma_thoi_gian');
                var maThoiGianError = document.getElementById('ma_thoi_gian_error');

                if (tenTourInput.value.trim() === '') {
                    tenTourError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    tenTourError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (giaInput.value.trim() === '') {
                    giaError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    giaError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (tongQuanInput.value.trim() === '') {
                    tongQuanError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    tongQuanError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (hanhTrinhInput.value.trim() === '') {
                    hanhTrinhError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    hanhTrinhError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (soLuongInput.value.trim() === '') {
                    soLuongError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    soLuongError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (diaDiemInput.value.trim() === '') {
                    diaDiemError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    diaDiemError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (phuongTienInput.value.trim() === '') {
                    phuongTienError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    phuongTienError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (xuatPhatInput.value.trim() === '') {
                    xuatPhatError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    xuatPhatError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (maMienInput.value.trim() === '') {
                    maMienError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    maMienError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (maMuaInput.value.trim() === '') {
                    maMuaError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    maMuaError.textContent = ""; // Xóa thông báo lỗi nếu có
                }

                if (maThoiGianInput.value.trim() === '') {
                    maThoiGianError.textContent = "Không để trống";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    maThoiGianError.textContent = ""; // Xóa thông báo lỗi nếu có
                }
            });
            </script>

            <div class="mt-8">
                <input type="hidden" name="id_tuor" value="<?php echo $load_one_tour['id_tuor']; ?>">
                <input type="submit" name="update_tour" value="Cập nhật"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_tour">
                    <input type="button" name="" value="Danh sách"
                        class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
            </div>

            <div class="mt-8">
                <?php if (!empty($thongbao)): ?>
                <div class="bg-green-500 text-white text-center py-2 text-xl rounded-md">
                    <?php echo $thongbao; ?>
                </div>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>
</div>

<style>
input {
    transition: 0.5s
}
</style>