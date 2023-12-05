<?php
session_start();
ob_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productImg = $_POST['img'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];
    $productSalePrice = $_POST['saleprice'];

    $flag = array_search($productName,array_column($_SESSION['cart'], 'name'));

    

    if ($flag !== false) {
        $_SESSION['cart'][$flag]['quantity'] += 1;
    } else {
        $product = [
            'img' => $productImg,
            'name' => $productName,
            'price' => $productPrice,
            'saleprice' => $productSalePrice, 
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
    };
    echo count($_SESSION['cart']);

}
    

?>