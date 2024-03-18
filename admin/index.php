<?php
include "header.php";

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
    include "home.php";
}

include "footer.php";
?>