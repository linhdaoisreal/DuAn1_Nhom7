<!-- ĐĂNG NHẬP -->
<main class="">
    <div class="bg-no-repeat bg-cover w-full flex justify-center items-center "
        style="background-image: url(./src/img/banner1.png);">
        <div class="bg-no-repeat bg-cover grid grid-rows-1 md:grid-cols-2 w-10/12 border-none rounded my-4"
            style="background-image: url(./src/img/banner1.png);">
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
                    <form action="#" class="leading-9 space-y-4">
                        <h2 class="text-center font-bold text-3xl mb-7">Đăng nhập</h2>
                        <!-- Tên đăng nhập -->
                        <div class="">
                            <label class="font-semibold">Tên đăng nhập </label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-user"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="text" required>
                            </div>
                        </div>

                        <!-- Mật khẩu -->
                        <div class="">
                            <label class="font-semibold">Mật khẩu</label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-lock"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="password" required>
                            </div>
                        </div>

                        <!--Ghi nhớ tài khoản  -->
                        <div class="remember">
                            <label for=""><input type="checkbox">Ghi nhớ tài khoản</label>
                            <!-- Quên mật khẩu -->
                            <a href="#">Quên mật khẩu?</a>
                        </div>

                        <!-- Đăng nhập submit -->
                        <div>
                            <a href="#"><button type="submit" class="btn btn1 mt-8">Đăng nhập</button></a>
                        </div>

                        <!-- Không có tài khoản -->
                        <div class="">
                            <p>Không có tài khoản? <a href="index.php?act=dang_ki"
                                    class="hover:text-orange-500 transition duration-500 ease-in "> Đăng ký</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>