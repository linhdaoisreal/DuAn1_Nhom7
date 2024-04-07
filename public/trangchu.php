
<!-- BANNER -->
    <section class="">
        <div class="grid md:grid-cols-4 w-full flex-col">

            <!-- Banner 1 -->
            <div class="h-28 hover:h-[450px] bg-cover bg-no-repeat md:grid-cols-1 md:h-[450px] my-auto transition ease-in-out duration-1000" style="background-image: url(./src/img/banner1.png);">
                <div class="flex flex-col justify-evenly items-center py-5 hover:py-44 md:py-44">
                    <p class="banner_tittle text-white text-center text-4xl leading-relaxed">XUÂN</p>
                    <a href="index.php?act=danhsachtour&id_mien=&id_mua=">
                    <button class="mx-4 text-white font-medium leading-relaxed border border-transparent bg-orange-500 px-10 p-y3 rounded-full hover:bg-transparent hover:border-white
                    transition-all">ĐẶT NGAY</button>
                    </a>
                </div>
            </div>

            <!-- Banner 2 -->
            <div class="h-28 hover:h-[450px] bg-cover bg-no-repeat transition ease-in-out duration-1000 md:grid-cols-1 md:h-[450px] " style="background-image: url(./src/img/banner2.png); transition: background-image 1s;">
                <div class="flex flex-col justify-evenly items-center py-5 hover:py-44 md:py-44">
                    <p class="banner_tittle text-white text-center text-4xl leading-relaxed">HẠ</p>
                    <a href="index.php?act=danhsachtour&id_mien=&id_mua=">
                    <button class="mx-4 text-white font-medium leading-relaxed border border-transparent bg-orange-500 px-10 p-y3 rounded-full hover:bg-transparent hover:border-white
                    transition-all">ĐẶT NGAY</button>
                    </a>
                </div>
            </div>

            <!-- Banner 3 -->
            <div class="h-28 hover:h-[450px] bg-cover bg-no-repeat transition ease-in-out duration-1000 md:grid-cols-1 md:h-[450px] " style="background-image: url(./src/img/banner3.png); transition: background-image 1s;">
                <div class="flex flex-col justify-evenly items-center py-5 hover:py-44 md:py-44">
                    <p class="banner_tittle text-white text-center text-4xl leading-relaxed">THU</p>
                    <a href="index.php?act=danhsachtour&id_mien=&id_mua=">
                    <button class="mx-4 text-white font-medium leading-relaxed border border-transparent bg-orange-500 px-10 p-y3 rounded-full hover:bg-transparent hover:border-white
                    transition-all">ĐẶT NGAY</button>
                    </a>
                </div>
            </div>

            <!-- Banner 4 -->
            <div class="h-28 hover:h-[450px] bg-cover bg-no-repeat transition ease-in-out duration-1000 md:grid-cols-1 md:h-[450px] " style="background-image: url(./src/img/banner4.png); transition: background-image 1s;">
                <div class="flex flex-col justify-evenly items-center py-5 hover:py-44 md:py-44">
                    <p class="banner_tittle text-white text-center text-4xl leading-relaxed">ĐÔNG</p>
                    <a href="index.php?act=danhsachtour&id_mien=&id_mua=">
                    <button class="mx-4 text-white font-medium leading-relaxed border border-transparent bg-orange-500 px-10 p-y3 rounded-full hover:bg-transparent hover:border-white
                    transition-all">ĐẶT NGAY</button>
                    </a>
                </div>
            </div>


        </div>
    </section>

    <!-- FRAME 1: Xách balo và đi -->
    <section>
        <div class=" p-4 md:px-14">
            <!-- Tiêu đề -->
            <div class="mr-6">
                <h1 class="text-4xl font-semibold underline">Xách balo và đi</h1>
                <p>Mệt mỏi đủ rồi đến giờ bung xoã tại sao không đi xa</p>
            </div>
            <!-- Nội dung -->
            <div class="grid grid-cols-2 gap-6 py-5 md:grid-cols-4 md:gap-10">
                <!-- Content1 -->
                <div class="md:grid-cols-1 rounded-lg h-80 bg-cover bg-no-repeat flex content-end hover:shadow-lg 
                transition duration-400 ease-in" style="background-image: url(./src/img/content1.png);">
                    <h2 class="text-white text-xl md:text-2xl font-bold m-3 mt-auto">Thanh tịnh tâm hồn tìm về chốn bình yên</h2>
                </div>
                <div class="md:grid-cols-1 rounded-lg h-80 bg-cover bg-no-repeat flex content-end hover:shadow-lg 
                transition duration-400 ease-in" style="background-image: url(./src/img/content2.png);">
                    <h2 class="text-white text-xl md:text-2xl font-bold m-3 mt-auto">Xây dựng tinh thần đồng đội gắn kết</h2>
                </div> 
                <div class="md:grid-cols-1 rounded-lg h-80 bg-cover bg-no-repeat flex content-end hover:shadow-lg 
                transition duration-400 ease-in" style="background-image: url(./src/img/content3.png);">
                    <h2 class="text-white text-xl md:text-2xl font-bold m-3 mt-auto">Hoà mình với thiên nhiên hùng vĩ</h2>
                </div>
                <div class="md:grid-cols-1 rounded-lg h-80 bg-cover bg-no-repeat flex content-end hover:shadow-lg 
                transition duration-400 ease-in" style="background-image: url(./src/img/content4.png);">
                    <h2 class="text-white text-xl md:text-2xl font-bold m-3 mt-auto">Giảm giá cực khủng ngại gì đi xa</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- FRAME 2: Địa điểm yêu thích -->
    <section>
        <div class=" p-4 md:px-14">
            <!-- Tiêu đề -->
            <div class="mr-6">
                <h1 class="text-4xl font-semibold underline">Địa điểm yêu thích</h1>
                <p>Khám phá những vẻ đẹp Việt Nam mà bạn chưa biểt</p>
            </div>
            
            <!-- Nội dung -->
            <div class="grid grid-cols-6 grid-row-3 gap-6 py-5 md:gap-10">
                <?php
                    $i=0;
                    foreach ($load_hot_tuor as $checkHotTuor) {
                        extract($checkHotTuor);
                        if ($i == 0 || $i == 3) {
                            $GridPosClass1 = "col-span-4";
                            $GridPosClass2 = "";
                        } elseif ($i == 1) {
                            $GridPosClass1 = "col-span-2";
                            $GridPosClass2 = "";
                        } elseif ($i == 2 ) {
                            $GridPosClass1 = "col-span-2 ";
                            $GridPosClass2 = "";
                        } elseif ($i == 4 || $i == 5) {
                            $GridPosClass1 = "col-span-3 ";
                            $GridPosClass2 = "";
                        }
                        echo '
                            <div class="'.$GridPosClass1.' '.$GridPosClass2.' h-56 rounded-lg bg-cover bg-no-repeat flex content-end 
                            transition duration-400 ease-in" style="background-image: url(./gallery/'.$ten_hinh_anh.');">
                            <a href="index.php?act=chitiet_tuor&id_tuor='.$id_tuor.'" class="text-white text-2xl font-bold m-3 mt-auto">
                                <h2>'.$ten_tuor.'</h2>
                            </a>
                            </div>
                        ';
                        $i+=1;
                        $GridPosClass2 = "";
                    }
                ?>
                
                <!-- <div class="col-span-4 h-56 rounded-lg bg-cover bg-no-repeat flex content-end 
                transition duration-400 ease-in" style="background-image: url(./src/img/content1.png);">
                    <h2 class="text-white text-2xl font-bold m-3 mt-auto">Phú Quốc</h2>
                </div>
                
                <div class="col-span-2 row-span-2 rounded-lg bg-cover bg-no-repeat flex content-end 
                transition duration-400 ease-in" style="background-image: url(./src/img/content2.png);">
                    <h2 class="text-white text-2xl font-bold m-3 mt-auto">Sapa</h2>
                </div> 
                
                <div class="col-span-2 h-56 rounded-lg bg-cover bg-no-repeat flex content-end 
                transition duration-400 ease-in" style="background-image: url(./src/img/content3.png);">
                    <h2 class="text-white text-2xl font-bold m-3 mt-auto">Bến Tre</h2>
                </div>
                
                <div class="col-span-2 h-56 rounded-lg bg-cover bg-no-repeat flex content-end 
                transition duration-400 ease-in" style="background-image: url(./src/img/content4.png);">
                    <h2 class="text-white text-2xl font-bold m-3 mt-auto">Đà Nẵng</h2>
                </div>
                
                <div class="col-span-3 h-56 rounded-lg bg-cover bg-no-repeat flex content-end 
                transition duration-400 ease-in" style="background-image: url(./src/img/content4.png);">
                    <h2 class="text-white text-2xl font-bold m-3 mt-auto">Đà Lạt</h2>
                </div>
                
                <div class="col-span-3 h-56 rounded-lg bg-cover bg-no-repeat flex content-end 
                transition duration-400 ease-in" style="background-image: url(./src/img/content4.png);">
                    <h2 class="text-white text-2xl font-bold m-3 mt-auto">Quảng Ninh</h2>
                </div> -->
            </div>
        </div>
    </section>
