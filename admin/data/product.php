<?php
include_once('../../model/pdo.php');
include_once('../../model/global.php');
include_once('../../model/product.php');

if ($_GET['func'] == "show") {
  if (isset($_POST['page'])) {
    $page = ($_POST['page'] - 1) * 8;
  } else {
    $page = 0;
  }
  if (isset($_POST['name']) && $_POST['name'] != "") {
    $name = $_POST['name'];
  } else {
    $name = "";
  }
  $sql = "SELECT product.*, category.name AS category_name
  FROM product
  JOIN category ON product.id_category = category.id
  WHERE product.name LIKE '%" . $name . "%'
  ORDER BY product.id DESC
  LIMIT 8 OFFSET " . $page . ";
  ";

  $products = pdo_query($sql);
  $showProduct = "";
  foreach ($products as $product) {
    extract($product);
    if (is_file('../' . PATH_PRODUCT_ADMIN . $img)) {
      $img = PATH_PRODUCT_ADMIN . $img;
    } else {
      $img = PATH_PRODUCT_ADMIN . "no-image.jpeg";
    }
    if ($quantity == 0) {
      $quantity = '<p style="color: #ff497c;">Hết hàng</p>';
    } else {
      $quantity = '<p>' . $quantity . '</p>';
    }
    $showProduct .= '<tr>
          <td>
            <div class="product-image"> <img srcset="' . $img . '" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>' . $name . '</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>' . $entry_date . '</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>' . $quantity . '</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>' . $price . ' VND</del>
              <p>' . $price_sale . ' VND</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>' . $category_name . '</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" value="' . $id . '" onclick="openForm()" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>';
  }
  echo ($showProduct);
}
if ($_GET['func'] == 'page') {
  $pages = product_count_all();
  $pages = (int)$pages + 1;
  $page = ceil($pages / 8);
  // print_r($page);
  $showPageIndex = '';
  for ($i = 1; $i <= $page; $i++) {
    $showPageIndex .= '<a class="button table-page-button" value="' . $i . '" onclick="loadProductInPage(this)" href="#"><span>' . $i . '</span></a>';
  }
  echo ($showPageIndex);
}
