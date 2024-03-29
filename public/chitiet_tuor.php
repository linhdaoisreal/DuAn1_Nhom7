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
                        Tuor <?= $ten_tuor ?>
                    </h1>
                </div>

                <!-- Nội dung -->
                <div class="">                    
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
                <div class="py-3">
                    <h1 class="text-[1.7rem] font-semibold text-center">
                        Thông tin cơ bản
                    </h1>
                </div>

                <form class="md:ml-10" action="" method="post">

                    <div class="grid grid-cols-1 gap-4">

                        <div class="flex">
                            <i class="fa-solid fa-bars text-xl text-sky-500 pr-1"></i>
                            <h3 class="text-[1.1rem] text-sky-500">Loại Tuor: </h3>
                            <p class="ml-4 text-gray-500">
                                <?= $ten_mien ?>/<span>
                                    <?= $ten_mua ?>
                                </span>
                            </p>
                        </div>

                        <div class="flex">
                            <i class="fa-solid fa-location-dot text-xl text-sky-500 pr-1"></i>
                            <h3 class="text-[1.1rem] text-sky-500">Số Lượng Tối Đa: </h3>
                            <p class="ml-4 text-gray-500">
                                <?= $so_luong ?>
                            </p>
                        </div>

                        <div class="flex">
                            <i class="fa-solid fa-location-dot text-xl text-sky-500 pr-1"></i>
                            <h3 class="text-[1.1rem] text-sky-500">Địa Điểm: </h3>
                            <p class="ml-4 text-gray-500">
                                <?= $dia_diem ?>
                            </p>
                        </div>

                        <div class="flex">
                            <i class="fa-solid fa-car text-xl text-sky-500 pr-1"></i>
                            <h3 class="text-[1.1rem] text-sky-500">Phương Tiện: </h3>
                            <p class="ml-4 text-gray-500">
                                <?= $phuong_tien ?>
                            </p>
                        </div>

                        <div class="flex">
                            <i class="fa-regular fa-clock text-xl text-sky-500 pr-1"></i>
                            <h3 class="text-[1.1rem] text-sky-500">Thời Gian: </h3>
                            <p class="ml-4">
                                <?php if (is_array($load_snd)) {
                                    extract($load_snd);
                                }
                                echo $so_ngay_dem ?>
                            </p>
                        </div>

                        <div class="flex ">
                            <i class="fa-regular fa-calendar-days text-xl text-sky-500 pr-1"></i>
                            <h3 class="text-[1.1rem] text-sky-500">Ngày Khởi Hành: </h3>
                            <div class="ml-4">
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
                    </div>

                    <div class="py-3 flex leading-normal ">
                        <p class="text-[1.5rem] text-sky-500 ">Giá: </p>
                        <input type="hidden" id="gia_goc" value="<?= $gia ?>">
                        <span class="text-[1.5rem] text-orange-500 pl-4 " id="gia">
                            <?= $gia ?> đ
                        </span>
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
         <!-- JQuery -->
         <div class="border-2 w-full rounded-lg border-orange-300 mb-6">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){           
                    $("#binhluan").load("public/binhluan/form_binhluan.php", {idpro: <?= $id_tuor?>});
            });
        </script>
        <div class="row" id="binhluan"></div>
        </div>
</section>