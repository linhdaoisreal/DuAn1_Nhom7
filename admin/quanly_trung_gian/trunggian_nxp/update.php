<?php
if (is_array($TrungGianNXP)) {
    extract($TrungGianNXP);
}
?>
<div class="row flex flex-col flex-1 overflow-y-auto">
    <div class="">
        <h1 class="text-center text-3xl bg-orange-300 text-white my-0.5 mt-3.5 rounded-md h-11">Cập nhật Trung gian Ngày xuất phát</h1>
    </div>
    <!-- Form nhập thêm mùa -->
    <div class="ml-10 mt-8">
        <form action="index.php?act=update_trunggian_nxp" method="post">
            
            <!-- ID tour -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Mã tour</label><br>
                <select name="id_tuor" id="id_tuor" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    <option value="">-None-</option>
                    <?php
                        foreach ($tuor as $checkTuor) {
                            if($checkTuor['id_tuor'] == $id_tuor){
                                $check = "selected";
                            }else{
                                $check = "";
                            }
                            echo '<option value="'.$checkTuor['id_tuor'].'" '.$check.'> '.$checkTuor['ten_tuor'].' </option>';
                        }
                    ?>
                </select>
                <span id="id_tuor_error" class="text-red-500"></span>
            </div>

            <!-- ID ngày -->
            <div class="mt-8">
                <label for="" class="text-lg font-semibold text-orange-300">Mã ngày</label><br>
                <select name="id_ngay" id="id_ngay" class="border-orange-300 w-96 border-2 rounded-lg h-9">
                    <option value="">-None-</option>
                    <?php
                        foreach ($nxp as $checkNxp) {
                            if($checkNxp['id_ngay'] == $id_ngay){
                                $check = "selected";
                            }else{
                                $check = "";
                            }
                            echo '<option value="'.$checkNxp['id_ngay'].'" '.$check.'> '.$checkNxp['ngay'].' </option>';
                        }
                    ?>
                </select>
                <span id="id_ngay_error" class="text-red-500"></span>
            </div>

            <!-- Script JavaScript -->
            <script>
                document.querySelector('form').addEventListener('submit', function (event) {
                    var idTourInput = document.getElementById('id_tuor');
                    var idTourError = document.getElementById('id_tuor_error');

                    var maMuaInput = document.getElementById('id_ngay');
                    var maMuaError = document.getElementById('id_ngay_error');

                    if (idTourInput.value.trim() === '') {
                        idTourError.textContent = "Không để trống";
                        event.preventDefault(); // Ngăn chặn gửi form
                    } else {
                        idTourError.textContent = ""; // Xóa thông báo lỗi nếu có
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
                <input type="hidden" name="id_trunggian_nxp" value="<?php if (isset($id_trunggian_nxp) && ($id_trunggian_nxp > 0)) echo $id_trunggian_nxp ?>">
                <input type="submit" name="capnhat" value="Cập nhật"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <input type="reset" name="" value="Nhập lại"
                    class="bg-orange-300 h-8 w-24 text-white rounded-lg hover:bg-cyan-600 cursor-pointer m-2">
                <a href="index.php?act=list_trung_gian_nxp">
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