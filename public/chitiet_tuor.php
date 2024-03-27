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
                                    <?php ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="grid-cols-1">
                            <i class="fa-solid fa-location-dot text-xl text-[#1CC7ED]"></i><span class="text-xl">Địa
                                điểm</span>
                            <div>
                                <p class="text-gray-500">
                                    <?php ?>
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
                <div class="py-3">
                    <h1 class="text-[1.7rem] font-semibold text-center">
                        Thông tin cơ bản
                    </h1>
                </div>

                <form class="md:ml-10" action="" method="post">
                    <div class="grid grid-cols-2">
                        <div class="flex">
                            <h3 class="text-[1.1rem] text-sky-500">Thời gian: </h3>
                            <p class="m-4"> <?php if (is_array($load_snd)) {extract($load_snd);} echo $so_ngay_dem ?> </p>
                        </div>


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
        <div class="p-4 md:px-12">
            <iframe src="" allowfullscreen="" style="border: 1px solid #df912a;border-radius: 4px;" frameborder="0"
                class="w-full"></iframe>
        </div>

        <?php
    $idpro = isset($_REQUEST['idpro']) ? $_REQUEST['idpro'] : '';
    // Lấy dữ liệu về
    $dsbinhluan = all_binhluan($idpro);
    ?>
        <!--  From Bình luận -->
        <div class="p-4 md:px-12">
            <div class="boxcontent2 binhluan">
                <table>
                    <ul>
                        <?php if ($dsbinhluan): ?>
                        <?php foreach($dsbinhluan as $binhluan): ?>
                        <tr>
                            <td><img class="mr-3" style="width:40px;height:40px;border-radius: 50%"
                                    src="./gallery/<?= $anh_dai_dien?>" alt=""></td>
                            <td><?= $binhluan['ho_ten'] ?></td>
                            <td><?= $binhluan['noi_dung'] ?></td>
                            <td><?= $binhluan['ngay_binh_luan'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <p>Không có bình luận nào.</p>
                        <?php endif; ?>
                    </ul>
                </table>
            </div>

            <div>
                <div class="boxfooter searchbox">
                    <!-- Check đăng nhập -->
                    <?php if (isset($_SESSION['ho_ten'])): ?>
                    <form class="w-full bg-white rounded-lg border mx-auto h-36" action="<?=$_SERVER['PHP_SELF'];?>"
                        method="post">
                        <input type="hidden" name="idpro" value="<?=$idpro?>"> <!-- Thêm trường ẩn -->
                        <div class="px-3 mb-2 mt-2">
                            <textarea placeholder="comment" name="noi_dung"
                                class="w-full bg-gray-100 rounded border border-gray-400 
                                leading-normal resize-none h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"></textarea>
                        </div>
                        <div class="flex justify-end px-4">
                            <input type="submit" name="gui_binh_luan"
                                class="px-2.5 py-1.5 rounded-md text-white text-sm bg-cyan-500 cursor-pointer"
                                value="Comment">
                        </div>
                    </form>
                    <?php else: ?>
                    <h3 class="text-orange-500 font-semibold text-xl mt-10">Vui lòng đăng nhập để bình luận!</h3>
                    <?php endif; ?>
                </div>
            </div>

            <?php
            if(isset($_POST['gui_binh_luan']) && isset($_POST['noi_dung']) && isset($_POST['idpro']) && isset($_SESSION['ho_ten'])){
                $idpro = $_POST['idpro'];
                $id_nguoi_dung = $_SESSION['ho_ten']['id_nguoi_dung'];
                $noi_dung = $_POST['noi_dung'];    
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngay_binh_luan = date("h:i:sa d/m/Y");
                insert_binhluan($id_nguoi_dung, $idpro, $noi_dung, $ngay_binh_luan);
                
                // Sau khi thêm bình luận thành công, chuyển hướng người dùng đến trang hiện tại để tải lại trang đầy đủ
                header("Location: ".$_SERVER['PHP_SELF']);
                exit; // Dừng thực thi mã PHP tiếp theo
            }           
            ?>
        </div>
    </div>
</section>