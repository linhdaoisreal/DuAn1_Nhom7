<?php
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

    </body> 
</html>