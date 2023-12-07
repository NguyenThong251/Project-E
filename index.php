<?php
    session_start();
    ob_start();


include "View/global.php";
include "model/pdo.php";
include "model/product.php";
$product_hot = get_product_hot(4);
$product_new = get_product_new(4);
$product_view = get_product_view(4);


if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// USER
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'id' => NULL,
        'username' => "",
        'pass' => "",
        'name' => "",
        'avatar' => "",
        'email' => "",
        'location' => "",
        'phone' => "",
        'active' => "",
        'role' => ""
    ];
}
// LOGGED
if(!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = 0;
}

if(!isset($_SESSION['voucherSalePercent'])) {
    $_SESSION['voucherSalePercent'] = [
        'sale' => 0,
    ];
}


// $product_sale = get_product_sale(4);
include "View/header.php";
if (!isset($_GET['pg'])) {
    include "View/home.php";                                                
}
else {
    switch ($_GET['pg']) {
        case 'product':
            //search
                $kyw="";
                $titlepage="";
            if (isset($_POST["timkiem"])&&($_POST["timkiem"])) {
                $kyw=$_POST["kyw"];
                $titlepage="Kết quả tìm kiếm với từ khóa: ".$kyw;
            }
            $dssp = get_product_all($kyw,12);
            $dsdm = get_category_name();
            $dsbrand =  get_brand_name();
            include "View/shop.php";
            break;
        case 'cart':
            include "View/cart.php";
            break;

        case 'checkout' :
            include "View/checkout.php";
            if (isset($_POST['submit'])) {
                $idUser = $_SESSION['user']['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $location = $_POST['location'];
                $phone = $_POST['phone'];
                $note = $_POST['note'];
                $total = $_SESSION['lastprice'];
                // NHET ZO BILL
                
                // NHET SESSION CART ZO GIO HANG
               
            } 
            break;
            default:
        include "View/home.php";
            break;
    }
}

include "View/footer.php";

?>