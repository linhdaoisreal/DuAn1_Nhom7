<?php
include "public/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhsachtour':
            include "public/danhsach_tour.php";
            break;
        
        default:
            # code...
            break;
    }
}else{
    include "public/trangchu.php";
}

include "public/footer.php";
?>