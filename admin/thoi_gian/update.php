<?php
if (is_array($load_one_thoi_gian)) {
    extract($load_one_thoi_gian);
}
?>
<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Cập nhật Thời Gian</h1>
    </div>
    <div class="ml-10 mt-8">
        <form action="index.php?act=update_thoi_gian" method="post">
    
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">ID Thời Gian</label><br>
                <input type="text" name="" disabled class="border-orange-300 w-96 border-2 rounded-lg h-9" 
                value="<?php if (isset($id_hang_tuor) && ($id_hang_tuor != "")) echo $id_hang_tuor ?>">
            </div>

         
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Số Ngày</label><br>
                <input type="text" name="so_ngay_dem" id="ten_tour" class="border-orange-300 w-96 border-2 rounded-lg h-9"
                value="<?php if (isset($so_ngay_dem) && ($so_ngay_dem != "")) echo $so_ngay_dem ?>">
                <span id="ten_tour_error" class="text-red-500"></span>
            </div>

            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Mức Tăng</label><br>
                <input type="text" name="muc_tang" id="gia" class="border-orange-300 w-96 border-2 rounded-lg h-9"
                value="<?php if (isset($muc_tang) && ($muc_tang != "")) echo $muc_tang ?>">
                <span id="gia_error" class="text-red-500"></span>
            </div>

            <!-- Script JavaScript -->
            <script>
                document.querySelector('form').addEventListener('submit', function (event) {
                    var tenTourInput = document.getElementById('ten_tour');
                    var tenTourError = document.getElementById('ten_tour_error');

                   

                    var muctangInput = document.getElementById('muc_tang');
                    var muctangError = document.getElementById('muc_tang_error');


                    if (tenTourInput.value.trim() === '') {
                        tenTourError.textContent = "Không để trống";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        tenTourError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }
                  

                    if (muctangInput.value.trim() === '') {
                        muctangError.textContent = "Không để trống";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        muctangError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }

                });
            </script>

            <div class="mt-8">
                <input type="hidden" name="id_thoi_gian" value="<?php if (isset($id_thoi_gian) && ($id_thoi_gian > 0)) echo $id_thoi_gian ?>">
                <input type="submit" name="update_thoi_gian" value="Cập nhật"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_thoi_gian">
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