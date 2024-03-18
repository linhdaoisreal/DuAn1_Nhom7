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

                        <div class="relative ">
                            <p id="dropdownButton"><a class="m-7 md:m-0 text-orange-500 menu">Địa điểm</a></p>

                            <ul id="dropdownMenu" class="absolute hidden mt-2 py-2 w-32 bg-white rounded-md shadow-md z-10">
                                <li><a href="index.php?act=add_danh_muc_mua" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 1</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 2</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 3</a></li>
                            </ul>
                        </div>

                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="#">Hỗ trợ</a>
                        </li>
                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="#">Hợp tác</a>
                        </li>
                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="#">Về chúng tôi</a>
                        </li>
                        <li class="m-7 md:m-0">
                            <a class="text-orange-500 menu" href="#">Tour của tôi</a>
                        </li>
                    </ul>
                </div>
                <!-- Đăng nhập - Tìm kiếm -->
                <div class="flex flex-row justify-end items-center gap-4 pr-3">
                    <div class="m-7 md:m-0">
                        <i class="md:visible text-2xl fa-solid fa-magnifying-glass text-orange-500 hover:text-cyan-400 hover:underline transition duration-400 ease-in"></i>                         
                    </div>
                    <!-- Button Đăng Kí Đăng Nhập -->
                    <div class="m-7 md:m-0 flex ">
                        <a href="#" class="flex text-2xl text-orange-500 hover:text-cyan-400 hover:underline transition duration-400 ease-in place-items-center">
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