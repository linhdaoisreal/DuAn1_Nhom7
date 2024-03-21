<div class="row">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Thêm mới mùa trong năm
        </h1>
    </div>
    <!-- Form nhập thêm mùa -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=add_hinh_anh" method="post" enctype="multipart/form-data">
            <!-- Mã hình ảnh -->
            <div class="row mb">
                <label for="" class="text-lg font-semibold text-orange-300">Mã ảnh</label><br>
                <input type="text" name="id_hinh_anh" class="border-orange-300 w-96 border-2 rounded-lg h-9">
            </div>

            <!-- Tên hình ảnh -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Hình ảnh</label><br>
                <input type="file" name="ten_hinh_anh" id="ten_hinh_anh"
                    class="border-orange-300 w-96 border-2 rounded-lg h-14">
                <span id="ten_hinh_anh_error" class="text-red-500"></span>
            </div>

            <!-- Mã Tour -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Tên Tour</label><br>
                <select name="id_tour" id="" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    <?php
                            foreach($load_ten_tour as $tour){
                                extract($tour);
                                echo'<option value="'.$id_tuor.'">'.$ten_tuor.'</option>';
                            }
                        ?>
                </select>
            </div>
            <!-- Script JavaScript -->
            <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                var tenHinhAnhInput = document.getElementById('ten_hinh_anh');
                var tenHinhAnhError = document.getElementById('ten_hinh_anh_error');

                if (tenHinhAnhInput.value.trim() === '') {
                    tenHinhAnhError.textContent = "Vui lòng chọn hình ảnh";
                    event.preventDefault(); // Ngăn chặn gửi form
                } else {
                    tenHinhAnhError.textContent = ""; // Xóa thông báo lỗi nếu có
                }
            });
            </script>

            <div class="mt-8">
                <input type="submit" name="themmoi" value="Thêm mới"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_hinh_anh"><input type="button" name="" value="Danh sách"
                        class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
            </div>


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
    transition: 0.5s
}
</style>