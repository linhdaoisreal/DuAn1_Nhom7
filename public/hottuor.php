<!-- HOT TOUR -->
<section class="">
    <div class="p-4 md:px-12">
        <!-- Tiêu đề -->
        <div class="mr-6">
            <h1 class="text-4xl font-semibold underline">SALE OFF</h1>
            <p>Mệt mỏi đủ rồi đến giờ bung xoã tại sao không đi xa</p>
        </div>
        <!-- Nội dung -->
        <div class="grid grid-cols-1 gap-6 py-5 sm:grid-cols-2 sm:gap-4 md:grid-cols-3 md:gap-10">
            <?php
            foreach ($load_hot_tuor as $checkHotTuor) {
                extract($checkHotTuor);
                echo '
                <!-- Content1 -->
                <div class=" md:grid-cols-1 rounded-lg h-80 bg-cover bg-no-repeat flex hover:shadow-lg 
                    transition duration-400 ease-in" style="background-image: url(./gallery/'.$checkHotTuor['ten_hinh_anh'].');">
                    <div class="grid grid-row-1 w-full bg-transparent">
                        <div
                            class="flex-col justify-between mt-auto backdrop-blur-sm transition-all ease-in-out transform hover:backdrop-blur-none ">
                            <div class="m-3 flex items-center justify-between mt-auto col-start-1 col-end-2">
                                <h2 class="text-white text-2xl font-bold underline transition duration-400 ease-in">'.$checkHotTuor['ten_tuor'].'</h2>
                                <p class="text-white text-sm p-3"> </p>
                            </div>
    
                            <div class="m-3 flex items-center justify-between mt-auto col-start-1 col-end-2">
                                <div>
                                    <p class="text-center text-orange-500 font-semibold text-2xl">'.$checkHotTuor['gia'].'đ</p>
                                    <p class="line-through text-white">'.$checkHotTuor['gia'].'đ</p>
                                </div>
                                <button
                                    class="text-center font-semibold text-white hover:font-bold p-3 bg-cyan-500 rounded-lg">Xem
                                    ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
           
        </div>
    </div>
</section>