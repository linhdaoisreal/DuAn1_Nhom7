<div class="row">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Thêm mới Tour</h1>
    </div>
    <!-- Form nhập thêm mùa -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=add_tour" method="post">
            <!-- Mã tour -->
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">ID tour</label><br>
                <input type="text" name="id_tour" disabled class="border-orange-300 w-96 border-2 rounded-lg h-9">
            </div>

            <!-- Tên tour -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Tên Tuor</label><br>
                <input type="text" name="ten_tour" id="ten_tour" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <span id="ten_tour_error" class="text-red-500"></span>
            </div>

            <!-- Giá -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Giá</label><br>
                <input type="number" name="gia" id="gia" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <span id="gia_error" class="text-red-500"></span>
            </div>

            <!-- Tổng quan -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Tổng quan</label><br>
                <textarea name="tong_quan" id="tong_quan" cols="50" rows="25" class="border-orange-300 w-96 border-2 rounded-lg h-24"></textarea>
                <span id="tong_quan_error" class="text-red-500"></span>
            </div>

            <!-- Hành trình -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Hành trình</label><br>
                <textarea name="hanh_trinh" id="hanh_trinh" cols="50" rows="25" class="border-orange-300 w-96 border-2 rounded-lg h-24"></textarea>
                <span id="hanh_trinh_error" class="text-red-500"></span>
            </div>

            <!-- Số lượng -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Số lượng tối đa</label><br>
                <input type="number" name="so_luong" id="so_luong" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <span id="so_luong_error" class="text-red-500"></span>
            </div>

            <!-- Địa điểm -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Địa điểm</label><br>
                <input type="text" name="dia_diem" id="dia_diem" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <span id="dia_diem_error" class="text-red-500"></span>
            </div>

            <!-- Phương tiện -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Phương tiện</label><br>
                <input type="text" name="phuong_tien" id="phuong_tien" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <span id="phuong_tien_error" class="text-red-500"></span>
            </div>
            
            <!-- ID miền -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Mã miền</label><br>
                <select name="ma_mien" id="ma_mien" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    <option value="">-None-</option>
                    <?php
                        foreach ($list_danhmuc_mien as $checkdmMien) {
                            extract($checkdmMien);
                            echo '
                            <option value='.$id_mien.'>'.$ten_mien.'</option>
                            ';
                        }
                    ?>
                </select>
                <span id="ma_mien_error" class="text-red-500"></span>
            </div>

            <!-- ID mùa -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Mã mùa</label><br>
                <select name="ma_mua" id="ma_mua" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    <option value="">-None-</option>
                    <?php
                        foreach ($list_danhmuc_mua as $checkdmMua) {
                            extract($checkdmMua);
                            echo '
                            <option value='.$id_mua.'>'.$ten_mua.'</option>
                            ';
                        }
                    ?>
                </select>
                <span id="ma_mua_error" class="text-red-500"></span>
            </div>

            <!-- Script JavaScript -->
            <script>
                document.querySelector('form').addEventListener('submit', function (event) {
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

                    var maMienInput = document.getElementById('ma_mien');
                    var maMienError = document.getElementById('ma_mien_error');

                    var maMuaInput = document.getElementById('ma_mua');
                    var maMuaError = document.getElementById('ma_mua_error');

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
                });
            </script>

            <div class="mt-8">
                <input type="submit" name="add_new_tour" value="Thêm mới"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_tour">
                    <input type="button" name="" value="Danh sách"
                class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
            </div>

            <div class="mt-8">
                <?php if (!empty ($thongbao)): ?>
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