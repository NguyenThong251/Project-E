<?php
session_start();
ob_start();

include_once './pdo.php';
include_once './product.php';
include_once './global.php';

if (isset($_POST['action'])) {
    $productName = $_POST['productName'];

    // Find the index of the item in the cart
    $index = array_search($productName,array_column($_SESSION['cart'], 'name'));


    // Check if the index is valid before attempting to unset
    if ($index !== false) {
        unset($_SESSION['cart'][$index]);
        // Reset the array keys to ensure they are in sequential order
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    header('Content-Type: application/json');
    echo json_encode($_SESSION['cart']);
}

// MINUS QUANTITY
if (isset($_POST['minus'])) {
    $productName = $_POST['productName'];

    // Find the index of the item in the cart
    $index = array_search($productName,array_column($_SESSION['cart'], 'name'));

    if ($_SESSION['cart'][$index]['quantity'] > 0) {
        $_SESSION['cart'][$index]['quantity'] -= 1;
       } else {
        unset($_SESSION['cart'][$index]);

        // Reset the array keys to ensure they are in sequential order
        $_SESSION['cart'] = array_values($_SESSION['cart']);
       }

    header('Content-Type: application/json');
    echo json_encode($_SESSION['cart']);
}

// PLUS QUANTITY

if (isset($_POST['plus'])) {
    $productName = $_POST['productName'];

    // Find the index of the item in the cart
    $index = array_search($productName,array_column($_SESSION['cart'], 'name'));

    if ($_SESSION['cart'][$index]['quantity'] < 10) {
        $_SESSION['cart'][$index]['quantity'] += 1;
       } 


    header('Content-Type: application/json');
    echo json_encode($_SESSION['cart']);
}


// DISCOUNT
$conn = pdo_get_connection();
if (isset($_POST['discard'])) {
 $promoCode = $_POST['promoCode'];
 $totalCart = $_POST['totalCart'];
 $currentDate = date("Y-m-d");


//  SQL
 $sql='';    
 $sql = "SELECT * FROM `voucher` WHERE `promo_code` = '$promoCode' AND `expiration_date` >= '$currentDate'";
 $result = $conn->query($sql);
 if ($row = $result->rowCount()> 0) {
    $row=$result->fetch(PDO::FETCH_ASSOC);

    // Voucher is valid, you can apply it here
     $discountPercentage = $row['discount'];
     $_SESSION['voucherSalePercent']['sale'] = $discountedAmount;
     $totalCartAfterDiscount  = 0;
     $discountPrice = 0;

     $discountedAmount = $totalCart * ($discountPercentage / 100);
     $totalCartAfterDiscount = $totalCart - $discountedAmount;
     echo $totalCartAfterDiscount;

} else {
    // Voucher has expired
    echo $totalCart;
    // Handle the case where the voucher has expired
}
//  lấy discount price - total price
//  echo ra totalprice --> tính discount price ở cart.php bằng cách lấy total price mới - total price cũ 



}


?>