<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <link rel="stylesheet" href="../src/box.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Similesve Travel - Trang chủ</title>
</head>

<body>
    <!-- MENU/HEADER CŨ-->
    <!-- <header class="bg-zinc-100">
        <div class="container mx-auto px-4 ">
            <nav class="flex grid grid-cols-4 items-center justify-center">

                <div class="w-32 z-10">
                    <a href="index.php">
                        <img src="../src/img/LogoDA1_final.png" alt="website logo">
                    </a>
                </div>


                <div class="col-span-2 mx-auto">
                    <ul id="menu" class="invisible fixed top-0 left-0 w-full h-screen flex flex-col justify-center items-center 
                    bg-gray-900 bg-opacity-90 font-bold 
                    md:bg-transparent md:h-auto md:flex-row md:justify-end md:static z-10 md:visible md:gap-2">

                        <div class="relative ">
                            <a id="dropdownButton" class="m-7 md:m-0 menu text-orange-500">Danh mục</a>

                            <ul id="dropdownMenu"
                                class="absolute hidden mt-2 py-2 w-80 bg-white rounded-md shadow-md z-10">
                                <div class="grid grid-cols-2">
                                    <div class="grid-cols-1">
                                        <li><a href="index.php?act=list_danhmuc_mua"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Danh mục mùa</a>
                                        </li>
                                        <li><a href="index.php?act=list_danhmuc_mien"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Danh mục
                                                miền</a></li>
                                        <li><a href="index.php?act=list_hang_tuor"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Hạng tuor</a>
                                        </li>
                                        <li><a href="index.php?act=list_thoi_gian"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Thời gian</a>
                                        </li>
                                    </div>

                                    <div class="grid-cols-1">
                                        <li><a href="index.php?act=list_ngay_xuat_phat"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Ngày xuất
                                                phát</a></li>
                                        <li><a href="index.php?act=trunggian"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Trung gian</a>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <li class="m-7 md:m-0 text-orange-500">
                            <a href="index.php?act=list_tour" class="menu text-orange-500" href="#">Tour</a>
                        </li>

                        <li class="m-7 md:m-0 text-orange-500">
                            <a class="menu text-orange-500" href="#">Người dùng</a>
                        </li>

                        <li class="m-7 md:m-0">
                            <a class="menu text-orange-500" href="#">Bình luận</a>
                        </li>

                        <li class="m-7 md:m-0">
                            <a class="menu text-orange-500" href="index.php?act=list_hinh_anh">Ảnh</a>
                        </li>

                        <li class="m-7 md:m-0">
                            <a class="menu text-orange-500" href="#">Hoá đơn</a>
                        </li>

                        <li class="m-7 md:m-0">
                            <a class="menu text-orange-500" href="#">Thống kê</a>
                        </li>

                    </ul>
                </div>

                <div class="flex flex-row justify-end items-center gap-4 pr-3">

                    <div class="m-7 md:m-0 flex ">
                        <a href="#"
                            class="flex text-2xl text-orange-500 hover:text-cyan-400 hover:underline transition duration-400 ease-in place-items-center">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </div>

                    <div id="menu-button" class="z-20 md:hidden cursor-pointer">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>


            </nav>
            <hr>
            <div>

            </div>
        </div>
    </header> -->
<div class="flex h-screen ">
    <!-- sidebar -->
    <div class="hidden md:flex flex-col w-1/6 bg-gray-800">
        <div class="flex items-center justify-center h-16 bg-gray-900">
            <span class="text-white font-bold uppercase">Admin</span>
        </div>
        <div class="flex flex-col flex-1 overflow-y-auto">
            <nav class="flex-1 px-2 py-4 bg-gray-800">
                <a href="index.php?act=list_danhmuc_mua" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                    Danh mục mùa
                </a>
                <a href="index.php?act=list_danhmuc_mien" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Danh mục miền
                </a>
                <a href="index.php?act=list_ngay_xuat_phat" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Ngày xuất phát
                </a>
                <a href="index.php?act=list_thoi_gian" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Thời gian
                </a>
                <a href="index.php?act=list_tour" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Tuor
                </a>
                <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Tài khoản
                </a>
                <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Bình luận
                </a>
                <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Ảnh
                </a>
                <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Đơn hàng
                </a>
                <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    Thống kê
                </a>
            </nav>
        </div>
    </div>

    
