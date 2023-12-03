<?php
include_once('../../model/pdo.php');
include_once('../../model/product.php');

if ($_GET['func'] == "show") {
  $products = product_select_all();
  echo json_encode($products);
}
