<?php
if (is_array($don_hang)) {
    extract($don_hang);
}
?>
<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="row header text">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Cập Nhật Trạng Thái</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=update_trang_thai" method="post">
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">Mã Đơn</label><br>
                <input type="text" name="id_mien" class="border-orange-300 w-96 border-2 rounded-lg h-9" value <?= $id_don_hang ?>>
            </div>

            <!-- Tên miền -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Trạng Thái</label><br>
                <select name="trang_thai" id="ma_thoi_gian" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                       <option value="0">Tuor chưa khởi hành</option>
                       <option value="1">Tuor đã khởi hành</option>
                       <option value="2">Tuor đã hủy</option>
                </select>
                <span id="ten_mien_error" class="text-red-500"></span>
            </div>

            <!-- Script JavaScript -->
            <script>
                document.querySelector('form').addEventListener('submit', function(event) {
                    var tenMienInput = document.getElementById('ten_mien');
                    var tenMienError = document.getElementById('ten_mien_error');

                    if (tenMienInput.value.trim() === '') {
                        tenMienError.textContent = "Không để trống tên";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        tenMienError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }
                });
            </script>

            <div class="mt-8">
                <input type="hidden" name="id_don_hang" value="<?php if (isset($id_don_hang) && ($id_don_hang > 0)) echo $id_don_hang ?>">
                <input type="submit" name="capnhat" value="Cập nhật" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_don_hang"><input type="button" name="" value="Danh sách" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
            </div>

            <div class="mt-8">
                <?php if (!empty($thongbao)) : ?>
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
        transition: 0.5s;
    }
</style>