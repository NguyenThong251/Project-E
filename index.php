<?php
    session_start();
    ob_start();
include "View/global.php";
include "View/header.php";
if (!isset($_GET['pg'])) {
    include "View/home.php";                                                
}
else {
    switch ($_GET['pg']) {
        case 'sanpham':
           include "View/sanpham.php";
            break;
        default:
        include "View/home.php";
            break;
    }
}

include "View/footer.php";

?>