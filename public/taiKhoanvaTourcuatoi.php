<!-- TÀI KHOẢN VÀ TOUR CỦA TÔI -->
<section class="mb-24">
    <div class="p-4 md:px-14">
        <!-- Tiêu đề -->
        <div class="mr-6">
            <h1 class="text-4xl font-semibold underline text-orange-500">Thông tin tài khoản và các Tuor đã đặt</h1>
        </div>
        <!-- Nội dung chính -->
        <div class="grid grid-rows-1 gap-6 py-5 md:grid-cols-6 md:gap-10">
            <!-- Check đăng nhập của người dùng -->
            <?php
                $login=false;
                if(isset($_SESSION['ho_ten'])){
                    $login=true;
                }
            ?>

            <?php if ($login): ?>
            <!-- Thông tin tài khoản -->
            <div class="flex-row md:col-span-2 leading-9">
                <h1 class="font-semibold text-2xl py-3 text-orange-400">Thông tin tài khoản</h1><br>
                <!-- avarta -->
                <div class="items-center flex justify-center mt-4">
                    <img style="width:200px;height:200px;border-radius:50%" src="./gallery/<?= $anh_dai_dien?>" alt="" class="object-cover"><br>
                    </div>
                    <p class="font-medium mt-6 text-lg text-cyan-900">Tên người dùng: <span class="font-normal"><?=$ho_ten ?></span></p>
                    <p class="font-medium text-lg text-cyan-900">Email: <span class="font-normal"><?=$email ?></span></p>
                    <p class="font-medium text-lg text-cyan-900">Số điện thoại: <span class="font-normal"><?=$so_dien_thoai?></span></p>
                    <p class="font-medium text-lg text-cyan-900">Địa chỉ: <span class="font-normal"><?=$dia_chi?></span></p>                  
                </div>
               
                <?php else: ?>
                    <div class="flex-row md:col-span-2 leading-9">
                    <h1 class="font-semibold text-2xl py-3 text-orange-400">Thông báo</h1>
                    <p class="font-medium text-lg text-cyan-900">Bạn chưa đăng nhập!</p>
                    </div>
                <?php endif; ?>
               

            <!-- Thông tin các tour đã đặt -->
            <div class="md:col-span-4">
                <h1 class="font-semibold text-2xl py-3 text-orange-400">Các tour đã đặt</h1>
                <?php
                    if(isset($_SESSION['ho_ten'])){
                        foreach($loadDH as $checkDH){
                            extract($checkDH);
                            $hinhAnh= $img_path.$hinh_anh_mau;
                            echo'
                            <div class="w-full my-3 border rounded-lg flex px-4 grid-cols-2 gap-4">
                                <div class="w-24 h-auto">
                                    <img class="" src="'.$hinhAnh.'" alt="">
                                </div>
                                <div class="my-auto text-sm md:text-base">
                                    <h1>Tour '.$ten_tuor.' - Trạng thái: <span>';
                                    if($trang_thai == 1){
                                        echo'Tuor chưa đến ngày khởi hành';
                                    }elseif($trang_thai == 2){
                                        echo'Tuor đã khởi hành';
                                    }
                                    echo'</span></h1>
                                    <p>Ngày khởi hành: <span>'.$ngay_khoi_hanh.'</span></p>
                                    <p>Số người đăng kí: <span>'.$tong_nguoi.'</span></p>
                                </div>
                            </div> 
                            ';
                        }
                    }else{
                        echo '
                        <form action="index.php?act=taiKhoan_Tourcuatoi" id="search_form" method="post">
                            <input type="text" name="id_don_hang" placeholder=" Vui lòng nhập ID của hoá đơn..."
                                class="w-1/2 p-2 rounded-lg border-orange-400 border-2 outline-none  ">
                            <input type="submit" name="tim_kiem" value="Tìm kiếm" 
                            class="p-2 px-4 rounded-lg border-2 border-sky-400 bg-sky-400 text-white font-medium hover:bg-orange-400 hover:text-white transtion-all cursor-pointer">
                        </form>
                        ';
                        if(isset($loadTKDH)){
                            foreach($loadTKDH as $checkTKDH){
                                extract($checkTKDH);
                                $hinhAnh= $img_path.$hinh_anh_mau;
                                echo'
                                <div class="w-full my-3 border rounded-lg flex px-4 grid-cols-2 gap-4">
                                    <div class="w-24 h-auto">
                                        <img class="" src="'.$hinhAnh.'" alt="">
                                    </div>
                                    <div class="my-auto text-sm md:text-base">
                                        <h1>Tour '.$ten_tuor.' - Trạng thái: <span>';
                                        if($trang_thai == 1){
                                            echo'Tuor chưa đến ngày khởi hành';
                                        }elseif($trang_thai == 2){
                                            echo'Tuor đã khởi hành';
                                        }
                                        echo'</span></h1>
                                        <p>Ngày khởi hành: <span>'.$ngay_khoi_hanh.'</span></p>
                                        <p>Số người đăng kí: <span>'.$tong_nguoi.'</span></p>
                                    </div>
                                </div> 
                                ';
                            }
                        }else{

                        }
                        
                    }
                    
                ?>
                

            </div>
        </div>
    </div>
</section>