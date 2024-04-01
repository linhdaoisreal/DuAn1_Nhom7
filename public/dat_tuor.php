<!-- ĐẶT TUOR -->
<section>
    <form action="" method="post" class="grid grid-cols-12 mx-12 my-8 gap-6">
        <?php  if(isset($_SESSION['ho_ten'])) {
                $user = $_SESSION['ho_ten']?>
            <div class="col-span-12 md:col-span-8">
                <h1 class="text-3xl font-semibold mb-6">Booking Submission</h1>
                <hr class="text-gray-500">

                <div class="grid grid-cols-8 my-4 gap-6 leading-8">
                    <!-- Cột 1 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3>Họ và Tên </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" name="hoten" value="<?=$user['ho_ten'] ?>">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Địa chỉ </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" value="<?=$user['dia_chi']?>" name="diachi" >
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Mã bưu chính </h3>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                        </div>
                    </div>

                    <!-- Cột 2 -->
                    <div class="col-span-8 md:col-span-4">
                        <div>
                            <div class="flex">
                                <h3>Email </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" value="<?=$user['email']?>" name="email">
                        </div>

                        <div>
                            <div class="flex">
                                <h3>Số điện thoại </h3><span class="text-red-500"> *</span>
                            </div>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2" value="<?=$user['so_dien_thoai']?>" name="sdt">
                        </div>

                        <div>
                            <h3>Tỉnh/Thành Phố</h3>
                            <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                        </div>
                    </div>
                </div>

                <div>
                    <p>Các điều kiện đặt thêm</p>
                    <textarea name="" id="" cols="30" rows="10"
                        class="w-full border border-zinc-400 rounded-md my-2"></textarea>
                </div>
            </div>
       
        <?php } else { ?>
             <!-- đặt hàng không cần đăng nhập -->
            <div class="col-span-12 md:col-span-8">
            <h1 class="text-3xl font-semibold mb-6">Booking Submission</h1>
            <hr class="text-gray-500">

            <div class="grid grid-cols-8 my-4 gap-6 leading-8">
                <!-- Cột 1 -->
                <div class="col-span-8 md:col-span-4">
                    <div>
                        <div class="flex">
                            <h3>Họ và Tên </h3><span class="text-red-500"> *</span>
                        </div>
                        <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                    </div>

                    <div>
                        <div class="flex">
                            <h3>Địa chỉ </h3><span class="text-red-500"> *</span>
                        </div>
                        <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                    </div>

                    <div>
                        <div class="flex">
                            <h3>Mã bưu chính </h3>
                        </div>
                        <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                    </div>
                </div>

                <!-- Cột 2 -->
                <div class="col-span-8 md:col-span-4">
                    <div>
                        <div class="flex">
                            <h3>Email </h3><span class="text-red-500"> *</span>
                        </div>
                        <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                    </div>

                    <div>
                        <div class="flex">
                            <h3>Số điện thoại </h3><span class="text-red-500"> *</span>
                        </div>
                        <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                    </div>

                    <div>
                        <h3>Tỉnh/Thành Phố</h3>
                        <input type="text" class="w-full border border-zinc-400 rounded-md my-2">
                    </div>
                </div>
            </div>

            <div>
                <p>Các điều kiện đặt thêm</p>
                <textarea name="" id="" cols="30" rows="10"
                    class="w-full border border-zinc-400 rounded-md my-2"></textarea>
            </div>
        </div>
        <?php } ?>


        <!-- Cột 3 -->
        <div class="col-span-12 md:col-span-4 border border-zinc-200 rounded-md">
            <h1 class="text-3xl font-semibold mb-6 px-4 pt-4">Your Booking</h1>
            <div class="px-4">
                <div class="flex pb-4">
                    <a href="" class="text-xl font-semibold mb-6">VIỆT NAM: HÀM NINH – BÃI SAO – HỘ QUỐC – GÀNH DẦU</a>
                    <img class="w-5/12 md:w-1/3" src="./src/img/nha_trang.jpg" alt="">
                </div>
            </div>

            <div class="grid grid-cols-2 mx-4 leading-8 border border-x-0 border-zinc-200">
                <div>
                    <p>Loại tuor</p>
                    <p>Ngày xuất phát</p>
                    <p>Thời gian</p>
                    <p>Số người lớn</p>
                    <p>Số trẻ em</p>
                </div>
                <div class="">
                    <p>ABC</p>
                    <p>11/11/1111</p>
                    <p>4 ngày 3 đêm</p>
                    <p>1</p>
                    <p>2</p>
                </div>
            </div>

            <div class="grid grid-cols-2 mx-4 leading-8 border border-x-0 border-zinc-200">
                <div>
                    <p>Giá người lớn</p>
                    <p>Giá trẻ em</p>
                    <p>Phụ phí</p>
                    <p>Tổng cộng</p>
                </div>
                <div>
                    <p>1</p>
                    <p>1</p>
                    <p>4</p>
                    <p>6</p>
                </div>
            </div>

            <div class="flex mx-auto item-center justify-center py-8">
                <a href="" class="bg-orange-500 w-[55%] h-12 text-xl text-center flex item-center justify-center
                         rounded-lg text-white hover:scale-110 transition cursor-pointer">
                    <input type="button" value="ĐẶT NGAY">
                </a>
            </div>
        </div>
    </form>
</section>