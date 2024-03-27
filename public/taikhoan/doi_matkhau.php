<!-- Liên hệ -->
<div class="flex justify-center items-center w-full">
    <div class="py-20">
        <h1 class="text-2xl text-orange-500 font-medium text-center">Đổi mật khẩu</h1>
        <br class="">
        <div class="border-2 border-orange-400 rounded-xl bg-gray-30 drop-shadow-sm w-full pt-5 pb-20 px-20">
            <div class="mt-10">
            <?php
                    
                    if(isset($_SESSION['ho_ten'])&&(is_array($_SESSION['ho_ten']))){
                        extract($_SESSION['ho_ten']);
                    }
                ?>

<form id="changePasswordForm" action="index.php?act=doi_matkhau" method="post" onsubmit="return validateForm()">
    <div class="flex mb-10">
        <div>
            <div class="mt-5">
                <label for="" class="block text-base text-orange-400 mb-2">Mật khẩu cũ</label>
                <input type="password" id="oldPassword" name="mat_khau"
                    class="border-2 border-orange-400 rounded-xl w-80 px-3 py-2 focus:outline-none">
            </div>
            <div class="mt-5">
                <label for="" class="block text-base text-orange-400 mb-2">Mật khẩu mới</label>
                <input type="password" id="newPassword" name="mat_khau_moi" 
                    class="border-2 border-orange-400 rounded-xl w-80 px-3 py-2 focus:outline-none">
            </div>
            <div class="mt-5">
                <label for="" class="block text-base text-orange-400 mb-2">Nhập lại mật khẩu mới</label>
                <input type="password" id="confirmPassword" name="xacnhan_mat_khau"
                    class="border-2 border-orange-400 rounded-xl w-80 px-3 py-2 focus:outline-none">
            </div>
        </div>
    </div>
    <div class="mt-10 flex">
        <input  type="hidden" name="id_nguoi_dung" value="<?=$id_nguoi_dung ?>">
        <input class="border-2 border-orange-400 rounded-3xl px-2 py-2 w-40 bg-orange-400 text-white mr-10 cursor-pointer" type="submit" value="Đổi mật khẩu" name="doimatkhau">
        <input class="border-2 border-orange-400 rounded-3xl px-2 py-2 w-40 bg-orange-400 text-white cursor-pointer mr-10" type="reset" value="Nhập lại">
    </div>
</form>

<!-- Thông báo -->
<h2 id="notification" class="mt-10 text-lg text-orange-400 font-semibold"></h2>

<script>
    function validateForm() {
        var oldPassword = document.getElementById("oldPassword").value;
        var newPassword = document.getElementById("newPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var notification = document.getElementById("notification");

        if (oldPassword.trim() === "" || newPassword.trim() === "" || confirmPassword.trim() === "") {
            notification.textContent = "Vui lòng không được để trống!";
            return false; // Ngăn form gửi đi
        }

        // Nếu tất cả đều hợp lệ
        notification.textContent = ""; // Xóa thông báo cũ
        return true; // Cho phép form gửi đi
    }
</script>


                 <!-- Thông báo -->
                <h2 class="mt-10 text-lg text-orange-400 font-semibold">
                    <?php
                    if(isset($thongbao) && !empty($thongbao)) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</div>
