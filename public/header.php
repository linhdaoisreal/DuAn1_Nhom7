<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="./fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Similesve Travel</title>
</head>
<body>
    <!-- MENU/HEADER -->
    <header class="bg-zinc-100">
        <div class="container mx-auto px-4 ">
            <nav class="flex grid grid-cols-4 items-center justify-center">
                <!-- Logo -->
                <div class="w-32 z-10">
                    <a href="index.php">
                        <img src="./src/img/LogoDA1_final.png" alt="website logo">
                    </a>
                </div>

                <!-- Menu -->
                <div class="col-span-2 mx-auto">
                    <ul id="menu" class="invisible fixed top-0 left-0 w-full h-screen flex flex-col justify-center items-center 
                    bg-gray-900 bg-opacity-90 font-bold 
                    md:bg-transparent md:h-auto md:flex-row md:justify-end md:static z-10 md:visible md:gap-6">

                        <div class="relative">
                            <div class="flex">
                                <a href="index.php?act=danhsachtour" class="m-7 md:m-0 text-orange-500 menu">4 Mùa</a>
                                <p id="dropdownButton"><i class="fa-solid fa-caret-down mt-7 md:p-2 md:m-0 text-orange-500 menu"></i></p>
                            </div>

                            <ul id="dropdownMenu" class="absolute hidden mt-2 py-2 w-60 bg-white rounded-md shadow-md z-10">
                                <div class = "grid grid-cols-2">
                                    <div class = "grid-cols-1">
                                        <?php
                                            foreach ($mua as $checkMua) {
                                                extract($checkMua);
                                                var_dump($checkMua);
                                                $loadTheoMua = "index.php?act=danhsachtour&id_mua=".$id_mua;
                                                echo '
                                                <li><a href="'.$loadTheoMua.'" 
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">'.$ten_mua.'</a></li>
                                                ';
                                            }
                                        ?>
                                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Mùa Hạ</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Mùa Thu</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Mùa Đông</a></li>
                                    </div>
                                    <div class = "grid-cols-1">
                                        <li><a href="#r" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Miền Bắc</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Miền Trung</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Miền Nam</a></li>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="index.php?act=lien_he">Hợp tác</a>
                        </li>

                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="index.php?act=lien_he">Hỗ trợ</a>
                        </li>
                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="index.php?act=gioi_thieu">Về chúng tôi</a>
                        </li>
                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="index.php?act=taiKhoan_Tourcuatoi">Tour của tôi</a>
                        </li>
                    </ul>
                </div>
                <!-- Đăng nhập - Tìm kiếm -->
                <div class="flex flex-row justify-end items-center gap-2 pr-1">
                    <!-- Tìm kiếm -->
                    <div class="m-7 mr-3 md:mr-7 md:m-0">
                        <i class="md:visible text-2xl fa-solid fa-magnifying-glass text-orange-500 hover:text-cyan-400 hover:underline transition duration-400 ease-in"></i>                         
                    </div>

                    <!-- Button Đăng Kí Đăng Nhập -->
                    <div class="m-7 mr-3 md:mr-7 md:m-0 flex ">
                        <a href="index.php?act=dang_nhap" class="flex text-2xl text-orange-500 
                        hover:text-cyan-400 hover:underline transition duration-400 ease-in place-items-center">
                            <i class="fa-regular fa-user"></i>                            
                        </a>
                    </div>
                    
                    <!-- Menu-button -->
                    <div id="menu-button" class="z-20 md:hidden cursor-pointer">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>

                
            </nav>
                <hr>
            <div>

            </div>
        </div>
    </header>