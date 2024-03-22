<div class="row">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Thêm Hạng Tour</h1>
    </div>
    <!-- Form nhập thêm mùa -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=add_hang_tuor" method="post">
            <!-- Mã tour -->
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">ID Hạng Tour</label><br>
                <input type="text" name="id_hang_tuor" disabled class="border-orange-300 w-96 border-2 rounded-lg h-9">
            </div>

            <!-- Tên hạng tour -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Tên Hạng</label><br>
                <input type="text" name="ten_hang_tuor" id="ten_tour" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <span id="ten_tour_error" class="text-red-500"></span>
            </div>

            <!-- Mức Tăng -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Mức Tăng</label><br>
                <input type="text" name="muc_tang" id="gia" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                <span id="gia_error" class="text-red-500"></span>
            </div>

            <!-- Script JavaScript -->
            <script>
                document.querySelector('form').addEventListener('submit', function (event) {
                    var tenTourInput = document.getElementById('ten_tour');
                    var tenTourError = document.getElementById('ten_tour_error');

                    var giaInput = document.getElementById('gia');
                    var giaError = document.getElementById('gia_error');


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

                });
            </script>

            <div class="mt-8">
                <input type="submit" name="add_hang_tuor" value="Thêm mới"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_hang_tuor">
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