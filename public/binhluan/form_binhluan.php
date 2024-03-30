<?php
ob_start();
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = isset($_REQUEST['idpro']) ? $_REQUEST['idpro'] : '';
// Lấy dữ liệu về
$dsbinhluan = all_binhluan($idpro);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="./fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Similesve Travel - Bình luận</title>
</head>
<body>
    <!--  From Bình luận -->
    <div class="p-4 md:px-12">
        <div class="boxcontent2 binhluan">
            <table>
                <ul>
                    <?php if ($dsbinhluan): ?>
                        <?php foreach ($dsbinhluan as $binhluan): ?>
                            <tr>
                                <td>
                                    <img style="width:40px;height:40px;border-radius:50%"  src="./gallery/<?=$binhluan['anh_dai_dien']?>" class="m-2" name="anh_dai_dien">
                                </td>
                                <td class="text-orange-400 font-semibold text-lg">
                                    <?= $binhluan['ho_ten'] ?>
                                </td>
                                <td class="pt-14 pr-14 text-base">
                                    <?= $binhluan['noi_dung'] ?>
                                </td>
                                <td class="pt-16 pr-14 text-xs">
                                    <?= $binhluan['ngay_binh_luan'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Không có bình luận nào.</p>
                    <?php endif; ?>
                </ul>
            </table>
        </div>
    </div>

    <div>
        <div class="boxfooter searchbox">
            <!-- Check đăng nhập -->
            <?php if (isset($_SESSION['ho_ten'])): ?>
                <form class="w-full bg-white rounded-lg border mx-auto h-36"  action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>"> <!-- Thêm trường ẩn -->
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
        <?php
            // Xử lý gửi bình luận trước khi có bất kỳ đầu ra HTML nào được gửi ra
            if(isset($_POST['gui_binh_luan']) && isset($_POST['noi_dung']) && isset($_SESSION['ho_ten'])) {
                $idpro = $_POST['idpro'];
                $id_nguoi_dung = $_SESSION['ho_ten']['id_nguoi_dung'];
                $noi_dung = $_POST['noi_dung'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngay_binh_luan = date("H:i:s d/m/Y"); // Thay đổi định dạng ngày
                insert_binhluan($id_nguoi_dung, $idpro, $noi_dung, $ngay_binh_luan);
                
                // Chuyển hướng người dùng trở lại trang chứa bình luận
                header("Location: ".$_SERVER['HTTP_REFERER']);
               
            }
        ?>
    </div>
</body> 
</html>
