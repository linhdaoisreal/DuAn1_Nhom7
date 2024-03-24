<?php

if(is_array($mua)){
    extract($mua);
}

?>
<div class="row flex flex-col flex-1 overflow-y-auto">
            <div class="row header text">
                <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Cập nhật mùa</h1>
            </div>
            <!-- Form nhập mã mùa -->
            <div class="ml-10 mt-8">
                <form action="index.php?act=update_danhmuc_mua" method="post">
                <div class="row mb">
                        <label for="" class="text-lg font-semibold text-orange-300">Mã mùa</label><br>
                        <input type="text" name="id_mua" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    </div>

                   <!-- Tên mùa -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Tên mùa</label><br>
                <input type="text" name="ten_mua" id="ten_mua" class="border-orange-300 w-96 border-2 rounded-lg h-9" value="<?php if(isset($ten_mua)&&($ten_mua!="")) echo $ten_mua?>">
                <span id="ten_mua_error" class="text-red-500"></span>
            </div>

             <!-- Script JavaScript -->
             <script>
                document.querySelector('form').addEventListener('submit', function(event) {
                    var tenMuaInput = document.getElementById('ten_mua');
                    var tenMuaError = document.getElementById('ten_mua_error');
                    
                    if (tenMuaInput.value.trim() === '') {
                        tenMuaError.textContent = "Không để trống tên mùa";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        tenMuaError.textContent = ""; // Xóa thông báo lỗi nếu có
                    }
                });
            </script>


                    <div class="mt-8">
                        <input type="hidden" name="id_mua" value="<?php if(isset($id_mua)&&($id_mua>0)) echo $id_mua?>">
                        <input type="submit" name="capnhat" value="Cập nhật" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                        <input type="reset" name="" value="Nhập lại" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                        <a href="index.php?act=list_danhmuc_mua"><input type="button" name="" value="Danh sách" class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2"></a>
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
        input{
            transition: 0.5s
        }
    </style>