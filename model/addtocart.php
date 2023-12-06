<?php
session_start();
ob_start();


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productImg = $_POST['img'];
    $productName = $_POST['name'];
    $productBrand = $_POST['brand'];
    $productPrice = $_POST['price'];
    $productSalePrice = $_POST['saleprice'];

    $flag = array_search($productName,array_column($_SESSION['cart'], 'name'));

    

    if ($flag !== false) {
        $_SESSION['cart'][$flag]['quantity'] += 1;
    } else {
        $product = [
            'img' => $productImg,
            'name' => $productName,
            'brand' => $productBrand,
            'price' => $productPrice,
            'saleprice' => $productSalePrice, 
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
    };

   // Trả về dữ liệu session dưới dạng JSON
//    header('Content-Type: application/json');
//    echo json_encode($_SESSION['cart']);

}
    

header('Content-Type: application/json');
echo json_encode($_SESSION['cart']);

?>