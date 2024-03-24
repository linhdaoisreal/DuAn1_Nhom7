<?php
if (is_array($mien)) {
    extract($mien);
}
?>
<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="row header text">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Cập nhật miền</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=update_danhmuc_mien" method="post">
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">Mã miền</label><br>
                <input type="text" name="id_mien" class="border-orange-300 w-96 border-2 rounded-lg h-9">
            </div>

            <!-- Tên miền -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Tên miền</label><br>
                <input type="text" name="ten_mien" id="ten_mien" class="border-orange-300 w-96 border-2 rounded-lg h-9" value="<?php if (isset($ten_mien) && ($ten_mien != "")) echo $ten_mien ?>">
                <span id="ten_mien_error" class="text-red-500"></span>
            </div>

            <!-- Script JavaScript -->
            <script>
                document.querySelector('form').addEventListener('submit', function(event) {
                    var tenMienInput = document.getElementById('ten_mien');
                    var tenMienError = document.getElementById('ten_mien_error');

                    if (tenMienInput.value.trim() === '') {
                        tenMienError.textContent = "Không để trống tên miền";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        tenMienError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }
                });
            </script>

            <div class="mt-8">
                <input type="hidden" name="id_mien" value="<?php if (isset($id_mien) && ($id_mien > 0)) echo $id_mien ?>">
                <input type="submit" name="capnhat" value="Cập nhật" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_danhmuc_mien"><input type="button" name="" value="Danh sách" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
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