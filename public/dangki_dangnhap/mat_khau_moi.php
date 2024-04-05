<!-- ĐĂNG NHẬP -->
<main class="">
    <div class="bg-no-repeat bg-cover w-full flex justify-center items-center "
        style="background-image: url(./gallery/Vinh-Ha-Long-1.jpg);">
        <div class="bg-no-repeat bg-cover grid grid-rows-1 md:grid-cols-2 w-10/12 border-none rounded my-4"
            style="background-image: url(./gallery/Vinh-Ha-Long-1.jpg);">
            <!-- Text giới thiệu -->
            <div class="flex items-center flex-col h-screen justify-center grid-rows-1 md:grid-cols-1 text-white ">
                <div class="float-none w-60">
                    <img src="src/img/LogoDA1_final.png" alt="">
                </div>

                <div class="w-96">
                    <h2 class="text-lg font-bold">Chào mừng bạn đến với Similesve - Travel !</h2>
                    <p class="font-semibold">Đăng ký để trở thành thành viên của Similesve Travel và không bỡ lỡ bất kì
                        những thông báo hay ưu đãi mới nhất.</p>
                    <div class="flex items-center justify-center gap-4">
                        <a class="tracking-widest text-2xl text-white" href=""><i class="fa-brands fa-facebook"></i></a>
                        <a class="tracking-widest text-2xl text-white" href=""><i
                                class="fa-brands fa-instagram"></i></a>
                        <a class="tracking-widest text-2xl text-white" href=""><i class="fa-brands fa-twitter"></i></a>
                        <a class="tracking-widest text-2xl text-white" href=""><i class="fa-solid fa-message"></i></a>
                    </div>
                </div>
            </div>


            <!-- Form đăng ký -->
            <div class="grid-rows-1 md:grid-cols-1 backdrop-blur-sm ">
                <div class="flex items-center h-screen justify-evenly w-full text-white">

                    <form action="index.php?act=mat_khau_moi" class="leading-9 space-y-4" method="post" id="formChangePassword">
                        <h2 class="text-center font-bold text-3xl mb-7">Đổi mật khẩu mới</h2>
                       
                        <!-- Mật khẩu mới -->
                        <div class="">
                            <label class="font-semibold">Mật khẩu mới</label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-lock"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="password" name="new_pass" id="new_pass">
                            </div>
                        </div>

                        <!-- Nhập lại -->
                        <div class="">
                            <label class="font-semibold">Nhập lại mật khẩu mới</label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-lock"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="password" name="new_pass_confirm" id="new_pass_confirm">
                            </div>
                        </div>

                        <script>
                            document.getElementById("formChangePassword").addEventListener("submit", function(event) {
                                var newPassword = document.getElementById("new_pass").value;
                                var confirmPassword = document.getElementById("new_pass_confirm").value;

                                if (newPassword.trim() === "" || confirmPassword.trim() === "") {
                                    event.preventDefault(); // Ngăn chặn việc submit nếu một trong hai trường mật khẩu trống
                                    alert("Vui lòng điền đầy đủ!");
                                }
                            });
                        </script>

                        <!-- OTP submit -->
                        <div class="">                         
                            <input type="submit" id="submitButton" name="doi_mk_moi" value="Xác nhận" class="mt-8 hover:bg-cyan-800 w-80 border-2 h-12 rounded-lg">
                        </div>                    

                        <!-- Không có tài khoản -->
                        <div class="">
                            <p>Không có tài khoản? <a href="index.php?act=dang_ky"
                                    class="hover:text-orange-500 transition duration-500 ease-in underline"> Đăng ký</a>
                            </p>
                        </div>

                         <!--Có tài khoản -->
                         <div class="">
                            <p>Quay trở lại trang <a href="index.php?act=dang_nhap"
                                    class="hover:text-orange-500 transition duration-500 ease-in underline">Đăng nhập</a></p>
                        </div>
                        
                        <!-- Thông báo -->
                        <?php if (isset($thongbao) && !empty($thongbao)): ?>                        
                        <div class="text-orange-500 font-semibold text-lg"><?php echo $thongbao; ?></div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>