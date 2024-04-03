<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Similesve Travel</title>
</head>
<section class="flex justify-center items-center h-screen">
    <div class="col-span-12 md:col-span-8 text-center">
        <h1 class="text-3xl font-semibold mb-6">Bạn đã thanh toán thành công <i class="fa-solid fa-check text-white bg-green-400 rounded-full w-8 h-8"></i></h1>
        <h1 class="text-xl font-semibold mb-6 text-orange-400">Cảm ơn bạn đã lựa chọn dịch vụ tại Similesve Travel. Chúc bạn có một chuyến du lịch tuyệt vời!</h1>
        <form action="index.php?act=show_don_hang&id_tuor=<?= $id_tuor ?>" method="post">
        <div class="flex mx-auto item-center justify-center py-8">
                    <input type="submit" value="CHI TIẾT TOUR" name="chi_tiet" class="bg-orange-500 w-[55%] h-12 text-xl text-center flex item-center justify-center rounded-lg 
                        text-white hover:scale-110 transition cursor-pointer">
        </div>
        </form>
    </div>
</section>





