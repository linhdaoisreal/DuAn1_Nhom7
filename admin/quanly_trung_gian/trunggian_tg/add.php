<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Thêm mới Trung gian Thời Gian</h1>
    </div>
    <!-- Form nhập thêm mùa -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=add_trunggian_tg" method="post">
            
         
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Tuor</label><br>
                <select name="id_tuor" id="id_tuor" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    <option value="">-None-</option>
                    <?php
                        foreach ($tuor as $checkTuor) {
                            extract($checkTuor);
                            echo '
                            <option value='.$id_tuor.'>'.$ten_tuor.'</option>
                            ';
                        }
                    ?>
                </select>
                <span id="id_tuor_error" class="text-red-500"></span>
            </div>

           
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Số Ngày Đêm</label><br>
                <select name="id_thoi_gian" id="so_ngay" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    <option value="">-None-</option>
                    <?php
                        foreach ($listThoiGian as $checkHT) {
                            extract($checkHT);
                            echo '
                            <option value='.$id_thoi_gian.'>'.$so_ngay_dem.'</option>
                            ';
                        }
                    ?>
                </select>
                <span id="so_ngay_error" class="text-red-500"></span>
            </div>


            <!-- Script JavaScript -->
            <script>
                document.querySelector('form').addEventListener('submit', function (event) {
                    var idTourInput = document.getElementById('id_tuor');
                    var idTourError = document.getElementById('id_tuor_error');

                    var soNgayInput = document.getElementById('so_ngay');
                    var soNgayMuaError = document.getElementById('so_ngay_error');

                    if (idTourInput.value.trim() === '') {
                        idTourError.textContent = "Không để trống";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        idTourError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }

                    if (soNgayInput.value.trim() === '') {
                        soNgayError.textContent = "Không để trống";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        soNgayError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }
                   
                });
            </script>

            <div class="mt-8">
                <input type="submit" name="themmoi" value="Thêm mới"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_trunggian_tg">
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