<?php
include "public/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'value':
            # code...
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