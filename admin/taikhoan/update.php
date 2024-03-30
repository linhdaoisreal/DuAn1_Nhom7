<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
?>
<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="row header text">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Chỉnh vai trò</h1>
    </div>
    <!-- Form nhập mã miền -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=update_vai_tro" method="post">
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">Tên tài khoản</label><br>
                <input type="text" name="ho_ten" class="border-orange-300 w-96 border-2 rounded-lg h-9" value=" <?=$ho_ten?>">
            </div>

              <!-- Vai trò -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Vai trò</label><br>
                <input type="text" name="vai_tro" id="vai_tro" class="border-orange-300 w-96 border-2 rounded-lg h-9" value=" <?php if (isset($vai_tro) && ($vai_tro != "")) echo $vai_tro ?>">
                <span id="vai_tro_error" class="text-red-500"></span>
            </div>

             <!-- Script JavaScript -->
             <script>
                document.querySelector('form').addEventListener('submit', function(event) {
                    var tenMienInput = document.getElementById('vai_tro');
                    var tenMienError = document.getElementById('vai_tro_error');

                    if (tenMienInput.value.trim() === '') {
                        tenMienError.textContent = "Chọn vai trò thích hợp";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        tenMienError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }
                });
            </script>

            <div class="mt-8">
                <input type="hidden" name="id_nguoi_dung" value="<?php if (isset($id_nguoi_dung) && ($id_nguoi_dung > 0)) echo $id_nguoi_dung ?>">
                <input type="submit" name="capnhat" value="Cập nhật" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_taikhoan"><input type="button" name="" value="Danh sách" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
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