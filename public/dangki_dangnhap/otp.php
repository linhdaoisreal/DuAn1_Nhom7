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

                    <form action="index.php?act=nhap_otp" class="leading-9 space-y-4" method="post">
                        <h2 class="text-center font-bold text-3xl mb-7">Nhập mã OTP</h2>
                        <!-- Countdown Timer -->
                        <div class="mt-4 text-center">                         
                            <p class="text-xl font-semibold text-orange-400 border-2 p-2
                             rounded-xl border-orange-400" id="countdown">1:00</p>                          
                        </div>

                        <!-- Thông báo khi hết thời gian -->
                        <div id="end-time" class="hidden mt-4 text-center text-red-500 font-semibold">Mã OTP đã hết hạn. Vui lòng yêu cầu mã mới.</div>
                       
                        <!-- Email -->
                        <div class="">
                            <label class="font-semibold">OTP</label>
                            <div class="inline">
                                <span class=""><i class="fa-solid fa-asterisk text-sm"></i> <i class="fa-solid fa-asterisk text-sm"></i> <i class="fa-solid fa-asterisk text-sm"></i></span>
                                <input class="outline-none border-b-4 border-white rounded-sm bg-transparent w-full"
                                    type="text" name="otp" id="otpCheck" value="<?php if(isset($random_pass)==true)?>">
                            </div>
                        </div>


                        <!-- OTP submit -->
                        <div class="">                         
                            <input type="submit" id="submitButton" name="xac_nhan" value="Xác nhận"
                             class="mt-8 hover:bg-cyan-800 w-80 border-2 h-12 rounded-lg hover:border-cyan-800 cursor-pointer">
                        </div>

                         <!-- Validate -->
                         <script>
                             document.getElementById("submitButton").addEventListener("click", function(event) {
                                var otpCheck = document.getElementById("otpCheck").value;
                                if (!otpCheck || otpCheck.trim() === "") {
                                    event.preventDefault(); // Ngăn chặn việc submit nếu otp không hợp lệ
                                    alert("Vui lòng nhập mã OTP!");
                                }
                            });
                        </script>


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

     <!-- Đếm ngược -->
     <script>
            var timeLeft = 60;
                function startTimer(){
                    var countdownTimer = setInterval(function() {
                    var minutes = Math.floor(timeLeft / 60);
                     var seconds = timeLeft % 60;

                    seconds = seconds < 10 ? '0' + seconds : seconds;

                    document.getElementById('countdown').innerHTML = minutes + ':' + seconds;

                        if (timeLeft <= 0) {
                            clearInterval(countdownTimer);
                             document.getElementById('countdown').innerHTML = '0:00';
                             document.getElementById('end-time').classList.remove('hidden');
                            document.getElementById('submitButton').disabled = true; // Vô hiệu hóa nút khi hết thời gian
                        } else {
                            timeLeft -= 1;
                        }
                }, 1000);
            }
            startTimer();
    </script>
</main>