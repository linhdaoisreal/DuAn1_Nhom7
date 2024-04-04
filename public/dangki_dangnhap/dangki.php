<!-- ĐĂNG KÍ -->
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

                    <form action="index.php?act=dang_ky" class="leading-7 space-y-4" method="post">
                        <h2 class="text-center font-bold text-3xl mb-7">Đăng ký</h2>
                        <!-- Tên đăng nhập -->

                        <!-- Tên đăng nhập -->
                        <div class="">
                            <label class="font-semibold">Tên đăng nhập </label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-user"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="text" name="ho_ten">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="">
                            <label class="font-semibold">Email</label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-envelope"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="email" name="email">
                            </div>
                        </div>

                        <!-- Mật khẩu -->
                        <div class="">
                            <label class="font-semibold">Mật khẩu</label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-lock"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="password" name="mat_khau">
                            </div>
                        </div>

                        <!-- Đăng ký submit -->
                        <div>
                            <input type="submit" name="dangky" value="Đăng ký" class="mt-8 hover:bg-cyan-800 w-80 border-2 h-12 rounded-lg">
                        </div>

                        <!--Có tài khoản -->
                        <div class="">
                            <p>Có tài khoản? <a href="index.php?act=dang_nhap"
                                    class="hover:text-orange-500 transition duration-500 ease-in"> Đăng nhập</a></p>
                        </div>
                        <!--Thông báo  -->
                        <h2 class="text-orange-500 font-semibold">
                            <?php
                
                  if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }                             
                ?>
                        </h2>
                </div>
                </form>

            </div>
        </div>
    </div>
</main>