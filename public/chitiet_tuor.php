<?php
if (is_array($load_one_tour)) {
    extract($load_one_tour);
}
?>
<!-- CHI TIẾT TOUR -->
<section>
    <div>
        <!-- Slide Show -->

        <div class="slider">
            <div class="list">
                <?php
                foreach ($loadAnhTuor as $anhTuor) {
                    extract($anhTuor);
                    $hinhAnh = $img_path . $ten_hinh_anh;
                    echo '
                        <div class="item w-full">
                            <img class="w-full" src="' . $hinhAnh . '." alt="">
                        </div>
                        ';
                }
                ?>
            </div>

            <div class="buttons">
                <button id="pre">
                    < </button>
                        <button id="next">></button>
            </div>


            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        <div class="p-4 md:px-12 grid md:grid-cols-5">
            <!-- Thông tin chi tiết chính -->
            <div class="md:grid-cols-1 md:col-span-3">
                <!-- Tiêu dề -->
                <div class="py-3">
                    <h1 class="text-[1.7rem] font-semibold ">
                        <?= $ten_tuor ?>
                    </h1>
                </div>

                <!-- Nội dung -->
                <div class="">
                    <!-- Thông tin cơ bản -->
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-1 py-3">
                        <div class="grid-cols-1">
                            <i class="fa-solid fa-list text-xl text-[#1CC7ED]"></i><span class="text-xl"> Loại
                                tour</span>
                            <div>
                                <p class="text-gray-500">
                                    <?= $ten_mien ?>/<span>
                                        <?= $ten_mua ?>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="grid-cols-1">
                            <i class="fa-regular fa-user text-xl text-[#1CC7ED]"></i><span class="text-xl"> Số
                                lượng</span>
                            <div>
                                <p class="text-gray-500">
                                    <?= $so_luong ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="grid-cols-1">
                            <i class="fa-solid fa-location-dot text-xl text-[#1CC7ED]"></i><span class="text-xl">Địa
                                điểm</span>
                            <div>
                                <p class="text-gray-500">
                                    <?= $dia_diem ?>
                                </p>
                            </div>
                        </div>

                        <div class="grid-cols-1">
                            <i class="fa-solid fa-car text-xl text-[#1CC7ED]"></i><span class="text-xl"> Phương
                                tiện</span>
                            <div>
                                <p class="text-gray-500">
                                    <?= $phuong_tien ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tổng quan -->
                    <div class="pb-3">
                        <h2 class="text-2xl text-sky-500">Tổng Quan:</h2>
                        <p>
                            <?= $tong_quan ?>
                        </p>
                    </div>

                    <!-- Hành trình: -->
                    <div class="pb-3">
                        <h2 class="text-2xl text-sky-500">Hành trình:</h2>
                        <p>
                            <?= $hanh_trinh ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Thông tin đặt tour -->
            <div class="md:grid-cols-2 md:col-span-2">
                <form class="md:ml-10" action="" method="post">
                    <div class="flex justify-between py-3">
                        <h3 class="text-[1.1rem] text-sky-500">Hạng Tour: </h3>
                        <?php
                        foreach ($trunggian_hang_tuor as $checkTG) {
                            extract($checkTG);
                            echo '
                                    <div>
                                        <input type="checkbox" name="" id=""><span> ' . $ten_hang_tuor . ' </span>
                                    </div>
                                ';
                        }
                        ?>
                    </div>
                    <div class="flex justify-between py-3">
                        <h3 class="text-[1.1rem] text-sky-500">Thời gian: </h3>
                        <?php
                        foreach ($trunggian_thoi_gian_tuor as $checkTG) {
                            extract($checkTG);
                            echo '
                                        <div>
                                            <input type="checkbox" name="" id=""><span> ' . $so_ngay_dem . ' </span>
                                        </div>
                                    ';
                        }
                        ?>
                    </div>
                    <div class="py-3 flex ">
                        <h3 class="text-[1.1rem] text-sky-500">Ngày khởi hành: </h3>
                        <div class="pl-4">
                            <select name="" id="" class="w-full">
                                <?php
                                    foreach ($trunggian_ngay_xuat_phat_tuor as $checkTG) {
                                        extract($checkTG);
                                        echo '
                                            <option value="">' . $ngay . '</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="py-3 flex leading-normal ">
                        <p class="text-[1.5rem] text-sky-500 ">Giá: </p><span
                            class="text-[1.5rem] text-orange-500 pl-4 "> <?= $gia ?>đ</span>
                    </div>
                    <div class="flex mx-auto item-center justify-center py-8">
                        <input
                            class="bg-orange-500 w-[70%] h-12 text-xl rounded-lg text-white hover:scale-110 transition cursor-pointer"
                            type="button" value="ĐẶT NGAY">
                    </div>
                </form>
            </div>

        </div>

        <!-- Bình luận -->
        <div class="p-4 md:px-12">
            <iframe allowfullscreen="" style="border: 1px solid #df912a;border-radius: 4px;" frameborder="0"
                class="w-full"></iframe>
        </div>

        <!-- Form nhập bình luận -->
        <div class="p-4 md:px-12">
            <form class="w-full bg-white rounded-lg border mx-auto h-36">
                <div class="px-3 mb-2 mt-2">
                    <textarea placeholder="comment"
                        class="w-full bg-gray-100 rounded border border-gray-400 
                            leading-normal resize-none h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"></textarea>
                </div>
                <div class="flex justify-end px-4">
                    <input type="submit" class="px-2.5 py-1.5 rounded-md text-white text-sm bg-cyan-500 cursor-pointer"
                        value="Comment">
                </div>
            </form>
        </div>
    </div>
</section>